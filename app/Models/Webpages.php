<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Webpages extends Model
{
    protected $fillable = [
        "id",
        "page_title",
        "website_title",
        "head_title",
        "meta_title",
        "meta_keywords",
        "meta_description",
        "url_slug",
        "page_content",
        "page_rank",
        "is_publish",
        "is_home",
        "parent_id",
        "show_in_toppanel",
        "show_in_footer",
        "short_description",
        "icon",
        "created_at",
        "updated_at"
    ];
}
