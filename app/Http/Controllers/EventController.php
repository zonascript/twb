<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEvent;
use App\Service\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * @var Event
     */
    private $event;

    /**
     * EventController constructor.
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageTitle'] = 'Event List';
        return view('admin.events.index', $data);
    }

    public function datatableList()
    {
        return $this->event->datatable();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pageTitle'] = 'Add Event';
        return view('admin.events.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreEvent $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEvent $request)
    {
        if ($this->event->store($request)) {
            return backendRedirect('event');
        }
        return backendRedirect('event/create')->withInput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['id'] = $id;
        $data['post'] = $this->event->getById($id);
        $data['pageTitle'] = 'Edit Event';
        return view('admin.events.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreEvent $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEvent $request, $id)
    {
        if ($this->event->update($request, $id)) {
            return backendRedirect('event/' . $id . '/edit')->with('message', 'Event Saved.');
        }
        return backendRedirect('event/' . $id . '/edit')->withErrors(['error' => 'Error when updating the data.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->event->destroy($id)) {
            return backendRedirect('event');
        }
        return backendRedirect('event')->withErrors(['delete_failed' => 'Error when delete the data.']);
    }

    public function eventPaginated(Request $request)
    {
        $eventQuery = $this->event->getList();
        $events = $eventQuery->paginate(4);
        $events->withPath('event-paginated');
        return $events->toJson();
    }
}
