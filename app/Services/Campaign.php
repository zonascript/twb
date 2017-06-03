<?php

namespace App\Service;


use App\Model\User;
use App\Models\ColoringImage;
use Illuminate\Support\Facades\Log;

class Campaign
{
    use DatatableParameters;

    protected $baseUrl = '';

    public function participantsDatatable()
    {
        $data = $this->getParticipants()->get();
        return (new DatatableGenerator($data))
            ->addColumn('birthdate', function($user) {
                return changeDateFormat($user->birth_date, 'Y-m-d', 'd F Y');
            })
            ->generate();
    }

    public function getParticipants()
    {
        $userQuery = User::query()
            ->join('user_details AS detail', 'detail.user_id', 'users.id')
            ->leftJoin('model_has_roles AS mhr', 'mhr.model_id', 'users.id')
            ->where('mhr.role_id', 7)
            ->select('users.*', 'detail.*');
        return $userQuery;
    }

    public function imageDatatable()
    {
        $data = $this->getImages()->get();
        $this->baseUrl = 'participant-images';
        $action = $this->actionParameters(['campaign.detail' => 'detail']);
        return (new DatatableGenerator($data))
            ->addActions($action)
            ->generate();
    }

    public function getImages()
    {
        $imageQuery = ColoringImage::query();
        return $imageQuery;
    }

    public function getImageById($id)
    {
        return ColoringImage::find($id);
    }

    public function updateStatus($id, $status)
    {
        $image = ColoringImage::find($id);
        $image->status = $status;
        $image->save();
    }
}