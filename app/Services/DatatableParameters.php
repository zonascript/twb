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
            'class'     => 'uk-label uk-text-capitalize green',
            'icon'      => 'fa fa-fw fa-pencil'
        ];
        return $edit;
    }

    protected function detailParameter()
    {
        $url = $this->baseUrl . '/%s/detail';
        $detail = [
            'title'     => 'Detail',
            'link'      => backendUrl($url),
            'class'     => 'uk-label uk-text-capitalize blue',
            'icon'      => 'fa fa-fw fa-eye'
        ];
        return $detail;
    }

    protected function deleteParameter()
    {
        $url = $this->baseUrl . '/%s/destroy';
        $delete = [
            'title'     => 'Delete',
            'link'      => backendUrl($url),
            'class'     => 'uk-label uk-text-capitalize red',
            'icon'      => 'fa fa-fw fa-times-circle',
        ];
        return $delete;
    }
}
