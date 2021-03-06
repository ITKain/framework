<?php
$container['Admin'] = function ($container) {
    return new \Dappur\Controller\Admin\Admin($container);
};

$container['AdminBlog'] = function ($container) {
    return new \Dappur\Controller\Admin\Blog($container);
};

$container['AdminBlogCategories'] = function ($container) {
    return new \Dappur\Controller\Admin\BlogCategories($container);
};

$container['AdminBlogComments'] = function ($container) {
    return new \Dappur\Controller\Admin\BlogComments($container);
};

$container['AdminBlogTags'] = function ($container) {
    return new \Dappur\Controller\Admin\BlogTags($container);
};

$container['AdminEmail'] = function ($container) {
    return new \Dappur\Controller\Admin\Email($container);
};

$container['AdminMedia'] = function ($container) {
    return new \Dappur\Controller\Admin\Media($container);
};

$container['AdminOauth2'] = function ($container) {
    return new \Dappur\Controller\Admin\Oauth2($container);
};

$container['AdminRoles'] = function ($container) {
    return new \Dappur\Controller\Admin\Roles($container);
};

$container['AdminSeo'] = function ($container) {
    return new \Dappur\Controller\Admin\Seo($container);
};

$container['AdminSettings'] = function ($container) {
    return new \Dappur\Controller\Admin\Settings($container);
};

$container['AdminUsers'] = function ($container) {
    return new \Dappur\Controller\Admin\Users($container);
};

$container['App'] = function ($container) {
    return new \Dappur\Controller\App($container);
};

$container['Auth'] = function ($container) {
    return new \Dappur\Controller\Auth($container);
};

$container['Deploy'] = function ($container) {
    return new \Dappur\Controller\Deploy($container);
};

$container['Blog'] = function ($container) {
    return new \Dappur\Controller\Blog($container);
};

$container['Oauth2'] = function ($container) {
    return new \Dappur\Controller\Oauth2($container);
};

$container['Profile'] = function ($container) {
    return new \Dappur\Controller\Profile($container);
};
