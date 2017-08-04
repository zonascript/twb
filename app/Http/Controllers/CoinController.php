<?php

namespace App\Http\Controllers;

use App\Service\Coin;
use Illuminate\Http\Request;

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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coinIndex()
    {
        $data['pageTitle'] = 'Coin List';
        return view('admin.coins.participant', $data);
    }

    public function coinDatatable()
    {
        return $this->coin->coinDatatable();
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
