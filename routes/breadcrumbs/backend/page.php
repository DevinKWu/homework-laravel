<?php
Breadcrumbs::register('admin.page.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('models.page.menus.main'), url('admin/page'));
});

Breadcrumbs::register('admin.page.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.page.index');
    $breadcrumbs->push(__('models.page.menus.create'), url('admin/page/create'));
});
Breadcrumbs::register('admin.page.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.page.index');
    $breadcrumbs->push(__('models.page.menus.edit'), url('admin/page/edit'));
});