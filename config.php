<?php

return [
    'baseUrl' => 'http://localhost:3000/',
    'production' => false,
    'siteName' => "Men's Group Singapore",
    'siteDescription' => "Men's Group Singapore Website",
    'siteAuthor' => 'Christophe',
    // Google Analytics Tracking Id. For example, UA-123456789-1
    'gaTrackingId' => 'UA-147344635-1',

    // collections
    'collections' => [
        'posts' => [
            'author' => 'Christophe', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'articles/{filename}',
        ],
        'categories' => [
            'path' => '/articles/categories/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],
    ],

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        $content = $page->excerpt ?? $page->getContent();
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content),
            '<code>'
        );

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
    'isBlogArticle' => function ($page, $path) {
        return str_contains(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return starts_with($path, 'http') ? $path : '/' . trimPath($path);
    },
];
