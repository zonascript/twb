<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePromo;
use App\Service\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * @var Promo
     */
    private $promo;

    /**
     * PromoController constructor.
     */
    public function __construct(Promo $promo)
    {
        $this->promo = $promo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageTitle'] = 'Promo List';
        return view('admin.promo.index', $data);
    }

    public function datatableList()
    {
        return $this->promo->datatable();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pageTitle'] = 'Add Promo';
        return view('admin.promo.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePromo $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePromo $request)
    {
        if ($this->promo->store($request)) {
            return backendRedirect('promo');
        }
        return backendRedirect('promo/create')->withInput();
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
        $data['post'] = $this->promo->getById($id);
        $data['pageTitle'] = 'Edit Promo';
        return view('admin.promo.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StorePromo $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePromo $request, $id)
    {
        if ($this->promo->update($request, $id)) {
            return backendRedirect('promo/' . $id . '/edit')->with('message', 'Promo Saved.');;
        }
        return backendRedirect('promo/' . $id . '/edit')->withErrors(['update' => 'Error when updating the data.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->promo->destroy($id)) {
            return backendRedirect('promo');
        }
        return backendRedirect('promo')->withErrors(['delete_failed' => 'Error when delete the data.']);
    }
}
