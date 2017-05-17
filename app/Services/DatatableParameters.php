<?php

namespace App\Service;


trait DatatableParameters
{
    function actionParameters(array $actions)
    {
        $params = array();
        foreach ($actions as $action) {
            $function = $action.'Parameter';
            $params[$action] = $this->$function();
        }

        return $params;
    }

    protected function editParameter()
    {
        $url = $this->baseUrl . '/%s/edit';
        $edit = [
            'title'     => 'Edit',
            'link'      => backendUrl($url),
            'class'     => 'btn btn-xs btn-default',
            'icon'      => 'fa fa-edit'
        ];
        return $edit;
    }

    protected function detailParameter()
    {
        $url = $this->baseUrl . '/%s/detail';
        $detail = [
            'title'     => 'Detail',
            'link'      => backendUrl($url),
            'class'     => 'btn btn-xs btn-default',
            'icon'      => 'fa fa-location-arrow'
        ];
        return $detail;
    }

    protected function deleteParameter()
    {
        $url = $this->baseUrl . '/%s/destroy';
        $delete = [
            'title'     => 'Delete',
            'link'      => backendUrl($url),
            'class'     => 'btn btn-xs btn-default btn-delete',
            'icon'      => 'fa fa-times',
        ];
        return $delete;
    }
}