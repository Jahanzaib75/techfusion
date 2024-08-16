<?php

use Illuminate\Support\Facades\Auth;

if (!app()->runningInConsole()) {

    $server_name = request()->getSchemeAndHttpHost();
    define("BASE_URL", $server_name);
    define("ADMIN_BASE_URL", $server_name.'/admin');

    //Outlet Images Path
    define("ORIGNAL_IMAGE_PATH_WEPAGES", '/uploads/wepages/orignal_images/');
    define("LARGE_IMAGE_PATH_WEPAGES", '/uploads/wepages/large_images/');
    define("MEDIUM_IMAGE_PATH_WEPAGES", '/uploads/wepages/medium_images/');
    define("SMALL_IMAGE_PATH_WEPAGES", '/uploads/wepages/small_images/');
    //home conntent image///
    define("ORIGNAL_IMAGE_PATH_HOMECONTENT", '/uploads/homecontent/orignal_images/');
    define("LARGE_IMAGE_PATH_HOMECONTENT", '/uploads/homecontent/large_images/');
    define("MEDIUM_IMAGE_PATH_HOMECONTENT", '/uploads/homecontent/medium_images/');
    define("SMALL_IMAGE_PATH_HOMECONTENT", '/uploads/homecontent/small_images/');
    ///////////Testimonial images///////////
    define("ORIGNAL_IMAGE_PATH_TESTIMONIAL", '/uploads/testimonial/orignal_images/');
    define("LARGE_IMAGE_PATH_TESTIMONIAL", '/uploads/testimonial/large_images/');
    define("MEDIUM_IMAGE_PATH_TESTIMONIAL", '/uploads/testimonial/medium_images/');
    define("SMALL_IMAGE_PATH_TESTIMONIAL", '/uploads/testimonial/small_images/');
    ////////////our clients///////////////////////
    define("ORIGNAL_IMAGE_PATH_CLIENTS", '/uploads/clients/orignal_images/');
    define("LARGE_IMAGE_PATH_CLIENTS", '/uploads/clients/large_images/');
    define("MEDIUM_IMAGE_PATH_CLIENTS", '/uploads/clients/medium_images/');
    define("SMALL_IMAGE_PATH_CLIENTS", '/uploads/clients/small_images/');
    ///////////our team////////////////////
    define("ORIGNAL_IMAGE_PATH_TEAM", '/uploads/teams/orignal_images/');
    define("LARGE_IMAGE_PATH_TEAM", '/uploads/teams/large_images/');
    define("MEDIUM_IMAGE_PATH_TEAM", '/uploads/teams/medium_images/');
    define("SMALL_IMAGE_PATH_TEAM", '/uploads/teams/small_images/');
    ////////////our blog///////////////////////////////
    define("ORIGNAL_IMAGE_PATH_BLOG", '/uploads/blogs/orignal_images/');
    define("LARGE_IMAGE_PATH_BLOG", '/uploads/blogs/large_images/');
    define("MEDIUM_IMAGE_PATH_BLOG", '/uploads/blogs/medium_images/');
    define("SMALL_IMAGE_PATH_BLOG", '/uploads/blogs/small_images/');
    //Default Images
    define("NO_IMAGE", 'https://www.carsfrombanks.com/frontend/assets/images/placeholder/inventory-full-placeholder.png');

} else {
    $server_name = gethostname();
}






