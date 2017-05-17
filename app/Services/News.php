<?php

namespace App\Service;


class News
{
    use DatatableParameters;

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
            'post_type_id' => 1
        ];
        $news = $this->post->getPostQuery($params)->get();
        return $news;
    }


}