@extends('admin.master')
@section('css')
@include('admin.layouts.select2CssFiles')
@include('admin.layouts.fancy-uploader-css')
@endsection
@section('page-header')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">Create Webpage</h4>
    </div>
    <div class="page-rightheader">
        <div class="btn btn-list">
            <a href="{{ route('admin:webpages') }}" class="btn btn-success"><i class="fe fe-block mr-1"></i> Back </a>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Gerenal Elements</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form class="validationForm formSubmit" id="myForm" enctype="multipart/form-data" method="POST" action="{{ route('admin:webpages.submitForm', [$data['updateId'] ?? 0]) }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$data['updateId'] ?? 0}}">
                            <div class="card-body pb-2">
                                <div class="row row-sm">
                                    <div class="col-lg-6 form-group">
                                        <label class="form-label">Page Title</label>
                                        <input class="form-control txtPageTitle" placeholder="" name="page_title" value="{{ $data['record']->page_title ?? '' }}">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label class="form-label">Url Slug</label>
                                        <input class="form-control txtPageUrl" placeholder="Url Slug" name="url_slug" value="{{ $data['record']->url_slug ?? '' }}" type="text" readonly>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label class="form-label">Page priority</label>
                                        <select name="page_rank" id="page_rank" class="form-control custom-select select2 notrequired">
                                            @for ($i = 0; $i <= 50; $i++) <option value="{{ $i }}" <?php if (($data['record']->page_rank ?? '') == $i) {
                                                                                                        echo 'selected';
                                                                                                    } ?>>
                                                {{ $i }}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    <!-- <div class="col-lg-6 form-group">
                                        <label class="form-label">Website Title</label>
                                        <input class="form-control notrequired" placeholder="Head Title" name="website_title" value="{{ $data['record']->website_title ?? '' }}" type="text">
                                    </div> -->
                                    <div class="col-lg-6 form-group">
                                        <label class="form-label">Meta Title</label>
                                        <input class="form-control notrequired" placeholder="Meta Title" name="meta_title" value="{{ $data['record']->meta_title ?? '' }}" type="text">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label class="form-label">Meta Keyword</label>
                                        <input class="form-control notrequired" placeholder="Meta keywords" name="meta_keywords" value="{{ $data['record']->meta_keywords ?? '' }}" type="text">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label class="form-label">Meta Description</label>
                                        <textarea class="form-control notrequired" placeholder="Meta Description" name="meta_description" rows="3" spellcheck="false">{{ $data['record']->meta_description ?? '' }}</textarea>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label class="form-label">Head Title</label>
                                        <input class="form-control notrequired" placeholder="Head Title" name="head_title" value="{{ $data['record']->head_title ?? '' }}" type="text">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label class="form-label">Short Description</label>
                                        <textarea class="form-control notrequired" placeholder="Short Description" name="short_description" rows="3" spellcheck="false">{{ $data['record']->short_description ?? '' }}</textarea>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 form-group">
                                        <label class="form-label">Image</label>
                                        @php
                                        if (isset($data['record']->icon) && !empty($data['record']->icon) && File::exists(public_path(ORIGNAL_IMAGE_PATH_WEPAGES . $data['record']->icon))) {
                                        $path = BASE_URL . ORIGNAL_IMAGE_PATH_WEPAGES . $data['record']->icon;
                                        } else {
                                        $path = NO_IMAGE;
                                        }
                                        @endphp
                                        <input type="file" name="icon" class="dropify notrequired" data-default-file="{{ $path }}" data-height="180" name="image" />
                                    </div>
                                    <div class="col-12 form-group">
                                        <label class="form-label">Long Description</label>
                                        <textarea class="ckeditor form-control disc_2 notrequired" name="page_content" id="disc_2">{{ $data['record']->page_content ?? '' }}</textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="btn btn-list" style="text-align:center;width:100%">
                                            <button type="submit" class="btn btn-success user_form submit_button">Save
                                            </button>
                                            <button type="button" href="{{ route('admin:webpages') }}" class="btn btn-warning">Cancel </button>
                                        </div>
                                    </div>
                                    <input class="form-control" name="updateId" type="hidden" value="{{ $record->id ?? '' }}" id="validationCustom01">
                                    <div class="formHiddenId noneDiv">{{ $record->id ?? '' }}</div>
                                    <div class="checkUrlSlug noneDiv">{{ route('admin:webpages.checkPageUrlSlug') }}
                                    </div>
                                    <div class="formSubmitUrl noneDiv">
                                        {{ route('admin:webpages.submitForm', ['id' => $record->id ?? 0]) }}
                                    </div>
                                    <div class="formRedirectUrl noneDiv">{{ route('admin:webpages') }}</div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
@include('admin.layouts.select2JsFiles')
@include('admin.layouts.fancy-uploader-js')
@include('admin.layouts.tinymce-js')
@include('admin.layouts.templateJquery')
<script src="{{ URL::asset('assets/themeJquery/webpages/jquery.js') }}"></script>
@endsection