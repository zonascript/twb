<?php

namespace App\Http\Controllers;

use App\Service\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * @var Campaign
     */
    private $campaign;

    /**
     * CampaignController constructor.
     */
    public function __construct(Campaign $campaign)
    {
        $this->campaign = $campaign;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function participantIndex()
    {
        $data['pageTitle'] = 'Participant List';
        return view('admin.campaigns.participant', $data);
    }

    public function participantDatatable()
    {
        return $this->campaign->participantsDatatable();
    }

    public function participantImages()
    {
        $data['pageTitle'] = 'Coloring Image List';
        return view('admin.campaigns.images', $data);
    }

    public function imageDatatable()
    {
        return $this->campaign->imageDatatable();
    }

    public function imageDetail($id)
    {
        $data['pageTitle'] = 'Coloring Image Detail';
        return view('admin.campaigns.image-detail', $data);
    }
}
