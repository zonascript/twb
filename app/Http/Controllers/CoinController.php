<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Service\Coin;
use Illuminate\Http\Request;
use Log;

class CoinController extends Controller
{
    /**
     * @var Coin
     */
    private $coin;

    /**
     * CoinController constructor.
     */
    public function __construct(Coin $coin)
    {
        $this->coin = $coin;
    }

    public function dashboard()
    {
        $data['participants'] = $this->coin->getParticipants()->count();
        $data['allCoins'] = $this->coin->getAllCoins()->count();
        $data['open'] = $this->coin->getOpenCoins()->count();
        $data['approved'] = $this->coin->getApprovedCoins()->count();
        $data['rejected'] = $this->coin->getRejectedCoins()->count();
        $data['pageTitle'] = 'Dashboard Dunia Main';
        return view('admin.coins.dashboard', $data);
    }

    public function participantImages($userId)
    {
        $user = User::find($userId);
        $data['user'] = $user;
        $data['pageTitle'] = $user->name . ' Images';
        return view('admin.coins.participant-images', $data);
    }


    public function participantImagesDatatable($userId)
    {
        return $this->coin->participantImagesDatatable($userId);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coinIndex(Request $request)
    {
        $data['startDate'] = $request->has('start_date') ? $request->start_date : '';
        $data['endDate'] = $request->has('end_date') ? $request->end_date : '';
        $data['scoreMin'] = $request->has('score_min') ? $request->score_min : '';
        $data['scoreMax'] = $request->has('score_max') ? $request->score_max : '';
        $data['isCompleted'] = $request->has('is_completed') ? $request->is_completed : '';
        $data['pageTitle'] = 'Coin List';

        return view('admin.coins.participant', $data);
    }

    public function coinDatatable(Request $request)
    {
        return $this->coin->coinDatatable($request);
    }

    public function coinImages()
    {
        $data['pageTitle'] = 'Coin Image List';
        return view('admin.coins.images', $data);
    }

    public function imageDatatable()
    {
        return $this->coin->imageDatatable();
    }

    public function imageDetail($id)
    {
        $data['image'] = $this->coin->getImageById($id);
        $data['pageTitle'] = 'Coloring Image Detail';
        return view('admin.coins.image-detail', $data);
    }

    public function updateStatus($id, $status)
    {
        if ($this->coin->updateStatus($id, $status)) {
            return redirect(action('CoinController@coinImages'));
        }
        return redirect(action('CoinController@coinImages'));
    }
}
