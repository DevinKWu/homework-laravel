<?php

return [
    'page' => [
        'alerts' => [
            'created' => '創建成功',
            'edited' => '編輯成功',
            'deleted' => '刪除成功',
        ],
        'menus' => [
            'title' => '頁面管理',
            'main' => '頁面',
            'create' => '創建',
            'edit' => '編輯',
            'delete' => '刪除',
        ],
        'management' => '頁面管理',
            'create' => '創建頁面',
            'edit' => '編輯頁面',
            'delete' => '刪除頁面',
        'table' => [
            'page'=>'頁面',
            'total' => '頁面總計|頁面總計',
        ],
        'validation' => [
            'attributes' => [
                'name' => '名稱',
                'body' => '內容',
                'slug' => '頁面代碼',
            ],
        ],
    ],
    'post_category' => [
        'alerts' => [
            'created' => '創建成功',
            'edited' => '編輯成功',
            'deleted' => '刪除成功',
        ],
        'menus' => [
            'title' => '消息分類管理',
            'main' => '消息分類',
            'create' => '創建',
            'edit' => '編輯',
            'delete' => '刪除',
        ],
        'management' => '消息分類管理',
            'create' => '創建消息分類',
            'edit' => '編輯消息分類',
            'delete' => '刪除消息分類',
        'table' => [
            'post_category'=>'消息分類',
            'total' => '消息分類總計|消息分類總計',
        ],
        'validation' => [
            'attributes' => [
                'name' => '名稱',
                'body' => '內容',
            ],
        ],
    ],
    'post' => [
        'alerts' => [
            'created' => '創建成功',
            'edited' => '編輯成功',
            'deleted' => '刪除成功',
        ],
        'menus' => [
            'title' => '消息管理',
            'main' => '消息',
            'create' => '創建',
            'edit' => '編輯',
            'delete' => '刪除',
        ],
        'management' => '消息管理',
            'create' => '創建消息',
            'edit' => '編輯消息',
            'delete' => '刪除消息',
        'table' => [
            'post_category' => '消息分類',
            'post'=>'消息',
            'total' => '消息總計|消息總計',
        ],
        'validation' => [
            'attributes' => [
                'post_category' => '消息分類',
                'name' => '名稱',
                'body' => '內容',
                'slug' => '頁面代碼',
            ],
        ],
    ],
];
