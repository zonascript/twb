<?php

namespace App\Service;


use Illuminate\Http\Request;

class News
{
    use DatatableParameters;

    // News Post Type
    protected $postTypeId = 1;

    protected $baseUrl = 'news';

    /**
     * @var Post
     */
    private $post;

    /**
     * News constructor.
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function datatable()
    {
        $data = $this->getList();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($data))
            ->addActions($actions)
            ->generate();
    }

    public function getNewsById($newsId)
    {
        return $this->post->getPostById($newsId);
    }

    private function getList()
    {
        $params = [
            'post_type_id' => $this->postTypeId
        ];
        $news = $this->post->getPostQuery($params)->get();
        return $news;
    }

    public function getById($id)
    {
        return $this->post->getPostQuery(['id' => $id])->first();
    }

    public function store(Request $request)
    {
        $publishDate = $request->input('publish_date');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
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
        $publishDate = $request->input('publish_date');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
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