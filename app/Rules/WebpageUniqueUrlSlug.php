<?php

namespace App\Rules;
use Illuminate\Contracts\Validation\Rule;
use App\Models\Webpages;

class WebpageUniqueUrlSlug implements Rule
{
    public function __construct($request)
    {
        $this->request = $request;
    }
    public function passes($attribute, $value)
    {
        $webpage = Webpages::where([['id', '!=', $this->request->updateId],['url_slug', '=', $this->request->url_slug]])->first();
        if(!isset($webpage->id) || empty($webpage->id)) {
            return true;
        }
    }
    public function message()
    {
        return "Title already take, change the title";
    }
}
