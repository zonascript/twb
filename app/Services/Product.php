<?php

namespace App\Service;


use Carbon\Carbon;
use Illuminate\Http\Request;

class Product
{
    use DatatableParameters;

    // Product Post Type
    protected $postTypeId = 5;

    protected $baseUrl = 'product';

    /**
     * @var Post
     */
    private $post;

    /**
     * Product constructor.
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function datatable()
    {
        $data = $this->getList()->get();
        $actions = $this->actionParameters([
            'product.edit' => 'edit',
            'product.delete' => 'delete'
        ]);

        return (new DatatableGenerator($data))
            ->addActions($actions)
            ->generate();
    }

    public function getProductById($productId)
    {
        return $this->post->getPostById($productId);
    }

    public function getList($params = [])
    {
        $listParams = [
            'post_type_id' => $this->postTypeId
        ];
        if (isset($params['slug'])) {
            $listParams['slug'] = $params['slug'];
        }
        $product = $this->post->getPostQuery($listParams)
            ->leftJoin('post_metas AS pm', 'p.id', '=', 'pm.post_id')
            ->leftJoin('post_meta_translations AS pmt', function ($join) {
                $join->on('pm.id', '=', 'pmt.post_meta_id')
                    ->where('pm.meta_key', 'product_type');
            })
            ->addSelect('pm.meta_key', 'pmt.value AS product_type');
        return $product;
    }

    public function getById($id)
    {
        return $this->post->getPostQuery(['id' => $id])
            ->leftJoin('post_metas AS pm', 'p.id', '=', 'pm.post_id')
            ->leftJoin('post_meta_translations AS pmt', function ($join) {
                $join->on('pm.id', '=', 'pmt.post_meta_id')
                    ->where('pm.meta_key', 'product_type');
            })
            ->addSelect('pm.meta_key', 'pmt.value AS product_type')
            ->first();
    }

    public function store(Request $request)
    {
        $publishDate = Carbon::createFromFormat('d/m/Y', $request->input('publish_date'))->format('Y-m-d');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
        $details['excerpt'] = $request->input('excerpt');
        $details['pageTitle'] = $request->input('page_title');
        $details['metaDescription'] = $request->input('meta_description');
        $details['mediaId'] = $request->has('featured_image_id') ? $request->input('featured_image_id') : '';
        $metas['product_type'] = $request->input('product_type');
        try {
            $this->post->store($this->postTypeId, $publishDate, $status, $details, $metas);
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
        $metas['product_type'] = $request->input('product_type');
        try {
            $this->post->update($id, $publishDate, $status, $details, $metas);
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