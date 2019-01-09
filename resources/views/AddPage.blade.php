@extends('layouts.home')
@section('content')
    @include('parts.navigation')
    <section class="single-page">
        <div class="container">
            <h1>Добавить запись</h1>
            <form method="post" class="form-horizontal" enctype="multipart/form-data" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Keywords</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="keywords" id="keywords">
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description" id="keywords">
                    </div>
                </div>
                <div class="form-group">
                    <label for="alias" class="col-sm-2 control-label">Alias</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alias" id="alias" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="content" class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control summernote" name="content" id="content" ></textarea>
                    </div>
                </div>
                {{--<div class="form-group">--}}
                    {{--<label for="attached_image" class="col-sm-2 control-label">Attached Image</label>--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<input type="file" accept="image/jpeg,image/png" class="form-control" name="attached_image" id="attached_image" >--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-skin btn-lg">Save</button>
                </div>
            </form>
        </div>
    </section>
    @include('parts.footer')
@endsection