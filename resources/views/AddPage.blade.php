@extends('layouts.home')
@section('content')
    @include('parts.navigation')
    <section>
        <div class="container">
            <h1>Добавить запись</h1>
            <form method="post" class="form-horizontal" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" id="title" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="alias" class="col-sm-2 control-label">Alias</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alias" id="alias" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="content" class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control summernote" name="content" id="content" ></textarea>
                    </div>
                </div>
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-skin btn-lg">Save</button>
                </div>
            </form>
        </div>
    </section>
    @include('parts.footer')
@endsection