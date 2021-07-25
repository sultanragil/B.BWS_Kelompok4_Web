@extends('frontend/layouts.template-profile')
@section('header')
    Add Novel - Novel Inspiration
@endsection
@section('content')
<div class="contact-content">
    <div class="container">
        <h2 class="title">Buat Novel</h2>
        <form method="POST" action="{{ route('utitle.store') }}" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-md-4">
                    {{-- <div class="form-group label-floating">
                        <label class="control-label">Email address</label>
                        <input type="email" name="email" class="form-control"/>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Phone</label>
                        <input type="text" name="phone" class="form-control"/>
                    </div> --}}
                    <input type="hidden" name="favorit" value="0">
                    <input type="hidden" name="pengarang" value="{{Auth::user()->id}}">
                    <div class="form-group fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-raised">
                            <img src="{{asset('frontend/assets/img/image_placeholder.jpg')}}" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                        <div>
                            <span class="btn btn-raised btn-round btn-default btn-file">
                                <span class="fileinput-new">Pilih Cover</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="cover" />
                            </span>
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="form-group label-floating">
                        <label class="control-label">Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Sinopsis</label>
                        <textarea name="sinopsis" class="form-control" id="" rows="9"></textarea>
                    </div>
                    <div class="submit text-center">
                        <input type="submit" class="btn btn-primary btn-raised btn-round" value="Tambah Novel" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </form>
    </div>
</div>
<link rel="stylesheet" href="{{asset('froala/css/froala_editor.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/froala_style.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/code_view.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/colors.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/emoticons.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/image_manager.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/image.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/line_breaker.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/table.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/char_counter.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/video.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/fullscreen.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/file.css')}}">
<script type="text/javascript" src="{{asset('froala/js/froala_editor.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/align.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/code_beautifier.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/code_view.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/colors.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/draggable.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/emoticons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/font_size.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/font_family.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/image.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/file.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/image_manager.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/line_breaker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/link.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/lists.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/paragraph_format.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/paragraph_style.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/table.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/url.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/entities.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala//plugins/char_counter.min.js')}}js"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/inline_style.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/save.min.js')}}"></script>
<script type="text/javascript" src="{{asset('froala/js/plugins/fullscreen.min.js')}}"></script>

  <script>
    (function () {
      new FroalaEditor("#edit", {
        tabSpaces: 4
      })
    })()
  </script>
@endsection
