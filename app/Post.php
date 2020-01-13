<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ScoutElastic\Searchable;

class Post extends Model
{
    use Searchable;

    protected $casts = [
        'tags' => 'json',
    ];

    /**
     * @var string
     */
    protected $indexConfigurator = PostIndexConfigurator::class;

    /**
     * @var array
     */
    protected $searchRules = [
        //
    ];

    /**
     * @var array
     */
    protected $mapping = [
        'properties' => [
            'title' => [
                'type' => 'text',
            ],
            'content' => [
                'type' => 'text',
            ],
            'created_at' => [
                'type' => 'date',
                "format" => "yyyy-MM-dd HH:mm:ss"
            ],
            'updated_at' => [
                'type' => 'date',
                "format" => "yyyy-MM-dd HH:mm:ss"
            ],
        ]
    ];
}