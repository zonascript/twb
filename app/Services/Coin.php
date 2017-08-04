<?php

namespace App\Service;


use App\Model\Coin as CoinModel;
use App\Model\User;
use Illuminate\Support\Facades\Log;

class Coin
{
    use DatatableParameters;

    protected $baseUrl = '';

    public function coinDatatable()
    {
        $data = $this->getParticipants()->get();
        return (new DatatableGenerator($data))
            ->generate();
    }

    public function getParticipants()
    {
        $userQuery = User::query()
            ->join('user_details AS detail', 'detail.user_id', 'users.id')
            ->leftJoin('model_has_roles AS mhr', 'mhr.model_id', 'users.id')
            ->where('mhr.role_id', 8)
            ->select('users.*', 'detail.*');
        return $userQuery;
    }

    public function imageDatatable()
    {
        $data = $this->getImages()->get();
        Log::warning(\GuzzleHttp\json_encode($data));
        $this->baseUrl = 'coins';
        $action = $this->actionParameters(['coins' => 'detail']);
        return (new DatatableGenerator($data))
            ->addActions($action)
            ->generate();
    }

    public function getImages()
    {
        $imageQuery = CoinModel::with('user.detail');
        return $imageQuery;
    }

    public function getImageById($id)
    {
        return CoinModel::find($id);
    }

    public function updateStatus($id, $status)
    {
        $image = CoinModel::find($id);
        $image->status = $status;
        $image->save();
    }
}