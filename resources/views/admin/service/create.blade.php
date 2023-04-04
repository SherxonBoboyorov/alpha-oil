@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Our services</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('page.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="content_uz">Content [uzbek]</label>
                            <textarea name="content_uz" class="my-editor" id="content_uz" cols="30" rows="10"></textarea>
                            @if($errors->has('content_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('content_uz') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="content_ru">Content [Russian]</label>
                            <textarea name="content_ru" class="my-editor" id="content_ru" cols="30" rows="10"></textarea>
                            @if($errors->has('content_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('content_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="content_en">Content [English]</label>
                            <textarea name="content_en" class="my-editor" id="content_en" cols="30" rows="10"></textarea>
                            @if($errors->has('content_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('content_en') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="meta_title_en">Meta Title EN</label>
                            <textarea name="meta_title_en" class="form-control" id="meta_title_en" cols="30" rows="10"></textarea>
                            @if($errors->has('meta_title_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('meta_title_en') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="meta_description_en">Meta Description EN</label>
                            <textarea name="meta_description_en" class="form-control" id="meta_description_en" cols="30" rows="10"></textarea>
                            @if($errors->has('meta_description_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('meta_description_en') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="meta_title_es">Meta Title ES</label>
                            <textarea name="meta_title_es" class="form-control" id="meta_title_es" cols="30" rows="10"></textarea>
                            @if($errors->has('meta_title_es'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('meta_title_es') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="meta_description_es">Meta Description EN</label>
                            <textarea name="meta_description_es" class="form-control" id="meta_description_es" cols="30" rows="10"></textarea>
                            @if($errors->has('meta_description_es'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('meta_description_es') }}
                            </div>
                            @endif
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="frame">Link</label>
                            <input type="text" id="frame" class="form-control" name="frame">
                            @if($errors->has('frame'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('frame') }}
                            </div>
                            @endif
                        </div>
                    </div>


                      <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control-file">
                            @if($errors->has('image'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>
                    </div><br>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-block">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div><!-- container -->

</div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection
