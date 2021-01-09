<?php

return [
    // tạo config cho truy cập đến các trang
    'access'=>[
        'list_category'=>'list_category',
        'add_category'=>'add_category',
        'edit_category'=>'edit_category',
        'delete_category'=>'delete_category',
    ],
    'permission_parent'=>[
        'category',
        'product',
        'menu',
        'slider',
        'setting',
        'user',
        'role',
        'trademark'
    ],
    'permission_child'=>[
        'list',
        'add',
        'edit',
        'delete'
    ]
]
?>
