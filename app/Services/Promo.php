<?php

namespace App\Service;

use Carbon\Carbon;
use Illuminate\Http\Request;

class Promo
{
    use DatatableParameters;

    // Promo Post Type
    protected $postTypeId = 6;

    protected $baseUrl = 'promo';

    /**
     * @var Post
     */
    private $post;

    /**
     * Promo constructor.
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function datatable()
    {
        $data = $this->getList()->get();
        $actions = $this->actionParameters([
            'promo.edit' => 'edit',
            'promo.delete' => 'delete'
        ]);

        return (new DatatableGenerator($data))
            ->addActions($actions)
            ->generate();
    }

    public function getPromoById($promoId)
    {
        return $this->post->getPostById($promoId);
    }

    public function getList($params = [])
    {
        $listParams = [
            'post_type_id' => $this->postTypeId
        ];
        if (isset($params['slug'])) {
            $listParams['slug'] = $params['slug'];
        }
        $promo = $this->post->getPostQuery($listParams);
        return $promo;
    }

    public function getById($id)
    {
        return $this->post->getPostQuery(['id' => $id])->first();
    }

    public function store($request)
    {
        $publishDate = Carbon::createFromFormat('d/m/Y', $request->input('publish_date'))->format('Y-m-d');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
        $details['excerpt'] = $request->input('excerpt');
        $details['pageTitle'] = $request->input('page_title');
        $details['metaDescription'] = $request->input('meta_description');
        $details['mediaId'] = $request->has('featured_image_id') ? $request->input('featured_image_id') : '';
        try {
            $this->post->store($this->postTypeId, $publishDate, $status, $details);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update($request, $id)
    {
        $publishDate = Carbon::createFromFormat('d/m/Y', $request->input('publish_date'))->format('Y-m-d');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
        $details['excerpt'] = $request->input('excerpt');
        $details['pageTitle'] = $request->input('page_title');
        $details['metaDescription'] = $request->input('meta_description');
        $details['mediaId'] = $request->has('featured_image_id') ? $request->input('featured_image_id') : '';
        try {
            $this->post->update($id, $publishDate, $status, $details);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function destroy($id)
    {
        return $this->post->destroy($id);
    }

}