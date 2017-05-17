<?php

namespace App\Service;


use App\Models\Post as PostModel;
use Illuminate\Support\Facades\DB;

class Post
{

    public function getPostById($postId)
    {
        return PostModel::find($postId);
    }

    public function getPostQuery($params)
    {
        $query = DB::table('posts AS p')
            ->join('post_translations AS pt', 'p.id', '=', 'pt.post_id')
            ->select('p.*', 'pt.locale', 'pt.title', 'pt.excerpt', 'pt.content', 'pt.page_title', 'pt.meta_description');

        if (isset($params['post_type_id'])) {
            $query = $query->where('p.post_type_id', $params['post_type_id']);
        }

        if (isset($params['lang'])) {
            $query = $query->where('pt.locale', $params['lang']);
        } else {
            $query = $query->where('pt.locale', config('app.locale'));
        }

        return $query;
    }
}