    @extends('layouts.home')
    @section('content')
        @include('parts.navigation')
        <section>
            <div class="container">
                <h1>Добавить запись</h1>
                <div class="row form-group">
                    <label>Title
                    <input name="title"></label>
                </div>
                <div class="row form-group">
                    <label>alias
                    <input name="alias"></label>
                </div>
                <div class="row form-group">
                    <textarea id="summernote" name="content">Hello Summernote</textarea>
                </div>
                <div class="row text-center form-group">
                    <button class="btn btn-skin btn-lg btn-block contact-btn">Save</button>
                </div>
            </div>
        </section>
        @include('parts.footer')
    @endsection