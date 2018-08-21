<?php

//post_category

Breadcrumbs::register('admin.post_category.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('models.post_category.menus.main'), url('admin/post_category'));
});

Breadcrumbs::register('admin.post_category.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.post_category.index');
    $breadcrumbs->push(__('models.post_category.menus.create'), url('admin/post_category/create'));
});
Breadcrumbs::register('admin.post_category.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.post_category.index');
    $breadcrumbs->push(__('models.post_category.menus.edit'), url('admin/post_category/edit'));
});


//post

Breadcrumbs::register('admin.post.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('models.post.menus.main'), url('admin/post'));
});

Breadcrumbs::register('admin.post.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.post.index');
    $breadcrumbs->push(__('models.post.menus.create'), url('admin/post/create'));
});
Breadcrumbs::register('admin.post.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.post.index');
    $breadcrumbs->push(__('models.post.menus.edit'), url('admin/post/edit'));
});
