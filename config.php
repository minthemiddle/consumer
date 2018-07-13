<?php

return [
    'baseUrl' => 'http://consumer.test',
    'production' => false,
    'collections' => [
        'posts' => [
            'extends' => '_layouts.post',
            'items' => function() {
                $posts = json_decode(file_get_contents('http://api.test/api/camps'));

                return collect($posts)->map(function ($post) {
                    return [
                        'title' => $post->title,
                        // 'filename' => $post->filename,
                        'content' => $post->content,
                    ];
                });
            },
            'path' => 'camps/{title}',
            'sort' => '-title'
        ],
    ],
];

// [{"id":1,"title":"Stuttgart","filename":"1808-stuttgart","content":"Hier darf alles m\u00f6gliche rein.","created_at":"2018-07-13 23:50:15","updated_at":"2018-07-13 23:50:18"},{"id":2,"title":"M\u00fcnchen","filename":"1808-muenchen","content":"Hier darf alles m\u00f6gliche rein.","created_at":"2018-07-13 23:50:21","updated_at":"2018-07-13 23:50:24"},{"id":3,"title":"Bochum","filename":"1809-bochum","content":"Hier darf alles m\u00f6gliche rein.","created_at":"2018-07-13 23:50:21","updated_at":"2018-07-13 23:50:24"}]