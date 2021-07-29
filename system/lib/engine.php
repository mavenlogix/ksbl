<?php
require_once __DIR__ . '/autoload.php';
define('LIB', __DIR__);

class Engine
{
    public function add($id, $title, $headings, $description, $content, $url)
    {
        return $this->eg->update([
            "id" => $id,
            'type' => 'page',
            "title" => $title,
            "headings" => $headings,
            "description" => $description,
            "content" => $content,
            "url" => $url,
        ]);
    }
    public function suggest($keyword)
    {
        return $this->eg->suggestToken($keyword, ['facets' => ["title", "url"]]);
    }
    public function search($keyword, $limit = 10, $offset = 0)
    {
        $raw = $this->eg->search($keyword, ['limit' => $limit, 'offset' => $offset]);
        $num = $raw['numFound'];
        $raw = array_values($raw['documents']);
        return [
            'total_results' => $num,
            'results' => array_map(function ($val) {
                return [
                    'title' => $val['title'],
                    'url' => $val['url'],
                    'description' => $val['description'],
                ];
            }, $raw)
        ];
    }
    public function clear()
    {
        $this->eg->getIndex()->clearCache();
    }
    public function build()
    {
        $this->eg->getIndex()->rebuild();
    }
    private $eg;
    public function __construct()
    {
        $this->eg = new VFou\Search\Engine([
            'config' => [
                "var_dir" => LIB . DIRECTORY_SEPARATOR . "var",
            ],
            'schemas' => [
                'page' => [
                    "title" => [
                        "_type" => "string",
                        "_indexed" => true,
                        "_filterable" => true,
                        "_boost" => 5,
                    ],
                    "headings" => [
                        '_type' => 'text',
                        '_indexed' => true,
                        '_filterable' => true,
                        "_boost" => 10,
                    ],
                    "description" => [
                        "_type" => "text",
                        "_indexed" => false,
                        "_filterable" => false,
                    ],
                    "content" => [
                        "_type" => "text",
                        "_indexed" => false,
                        "_filterable" => false,
                        "_boost" => 10,
                    ],
                    "url" => [
                        "_type" => "text",
                        "_indexed" => false,
                        "_filterable" => false,
                        "_boost" => 0.5,
                    ],
                ],
            ],
        ]);
    }
}
