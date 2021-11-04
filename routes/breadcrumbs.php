<?php

// Categories Breadcrumbs
Breadcrumbs::for('categories', function ($trail) {
    $trail->push(__('Categories'), route('categories'));
});

Breadcrumbs::for('categories.create', function ($trail) {
    $trail->parent('categories');
    $trail->push(__('Create Category'), route('categories.create'));
});

Breadcrumbs::for('categories.edit', function ($trail, $id) {
    $trail->parent('categories');
    $trail->push(__('Edit Category'), route('categories.edit', $id));
});
// End Categories Breadcrumbs
