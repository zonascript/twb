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
            ->leftJoin('post_has_medias AS phm', 'p.id', '=', 'phm.post_id')
            ->leftJoin('medias', 'phm.media_id', '=', 'medias.id')
            ->select('p.*', 'pt.locale', 'pt.title', 'pt.excerpt', 'pt.content', 'pt.page_title', 'pt.meta_description', 'medias.id AS media_id', 'medias.path', 'medias.fullpath');

        if (isset($params['post_type_id'])) {
            $query = $query->where('p.post_type_id', $params['post_type_id']);
        }

        if (isset($params['id'])) {
            $query = $query->where('p.id', $params['id']);
        }

        if (isset($params['slug'])) {
            $query = $query->where('p.slug', $params['slug']);
        }

        if (isset($params['lang'])) {
            $query = $query->where('pt.locale', $params['lang']);
        } else {
            $query = $query->where('pt.locale', config('app.locale'));
        }

        return $query;
    }

    public function store($postType, $publishDate, $status, $details, $metas = [], $lang = '', $order = 0, $parent = 0)
    {
        $user = \Auth::user();
        $createdBy = $user->id;
        $createdByName = $user->name;
        $slug = isset($details['slug']) ? $details['slug'] : $this->generateSlug($details['title']);
        $lang = $lang == '' ? config('app.locale') : $lang;
        try {
            $post = PostModel::create([
                'slug' => $slug,
                'post_type_id' => $postType,
                'status' => $status,
                'parent_id' => $parent,
                'sort_order' => $order,
                'publish_at' => $publishDate,
                'created_by' => $createdBy,
                'created_by_name' => $createdByName
            ]);
            $this->storeDetail($post, $lang, $details);
            if (count($metas) > 0) {
                $this->storeMeta($post, $lang, $metas);
            }
            return $post;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update($id, $publishDate, $status, $details, $metas = [], $lang = '', $order = 0, $parent = 0)
    {
        $lang = $lang == '' ? config('app.locale') : $lang;
        $post = PostModel::find($id);
        $post->status = $status;
        $post->publish_at = $publishDate;
        try {
            $post->save();
            // destroy the old data
            $post->translations()->delete();
            $this->storeDetail($post, $lang, $details);
            if (count($metas) > 0) {
                $this->storeMeta($post, $lang, $metas);
            }
            return $post;
        } catch (\Exception $e) {
            return $e;
        }
    }

    private function storeDetail($post, $lang, $details)
    {
        $title = $details['title'];
        $content = $details['content'];
        $mediaId = isset($details['mediaId']) ? $details['mediaId'] : '';
        $excerpt = isset($details['excerpt']) ? $details['excerpt'] : wordwrap($content, 100);
        $pageTitle = isset($details['pageTitle']) ? $details['pageTitle'] : '';
        $metaDescription = isset($details['metaDescription']) ? $details['metaDescription'] : '';

        if ($mediaId != '') {
            $post->medias()->sync($mediaId);
        }

        $post->translations()->create([
            'locale' => $lang,
            'title' => $title,
            'excerpt' => $excerpt,
            'content' => $content,
            'page_title' => $pageTitle,
            'meta_description' => $metaDescription
        ]);
    }

    private function generateSlug($title, $loopNumber = 1)
    {
        $loopedTitle = $loopNumber == 1 ? $title : $title . ' ' . $loopNumber;
        $sluggedName = str_slug($loopedTitle, '-');
        // check existing slug
        if (PostModel::where('slug', $sluggedName)->exists()) {
            return $this->generateSlug($title, ++$loopNumber);
        }
        return $sluggedName;
    }

    private function storeMeta($post, $lang, $metas)
    {
        foreach ($metas as $key => $val) {
            // delete the old meta
            $post->metas()->where('meta_key', $key)->delete();

            $meta = $post->metas()->create([
                'meta_key' => $key
            ]);

            $meta->translations()->create([
                'locale' => $lang,
                'value' => $val
            ]);
        }
    }

    public function destroy($id)
    {
        return PostModel::destroy($id);
    }


}