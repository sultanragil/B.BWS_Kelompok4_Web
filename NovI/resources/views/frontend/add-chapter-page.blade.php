@extends('frontend/layouts.template')
@section('header')
    Add Chapter - Novel Inspiration
@endsection
@section('content')
<div class="contact-content">
    <div class="container">
        <h2 class="title">Add New Chapter</h2>
            <div class="col-md">
                <p class="description">You can add new chapter for your novel here.<br><br>
                </p>
                <form action="{{ route('addc.store')}}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="hidden" name="title_id" id="chapter_id" value="{{$novel->id}}" >
                    <input type="hidden" name="chapter_read_counter" id="chapter_read_counter" value="0">
                    <div class="form-group label-floating">
                        <label class="control-label">Chapter Title</label>
                        <input type="text" name="title" value="" class="form-control">
                    </div>
                    {{-- <div class="form-group label-floating">
                        <label class="control-label">Email address</label>
                        <input type="email" name="email" class="form-control"/>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Phone</label>
                        <input type="text" name="phone" class="form-control"/>
                    </div> --}}
                    <div class="form-group label-floating">
                        <label class="control-label">Chapter Text</label>
                        <textarea id="edit" name="text"></textarea>
                    </div>
                    <div class="submit text-center">
                        <button type="submit" class="btn btn-primary btn-raised btn-round" >Add Chapter</button>
                    </div>
                </form>
            </div>
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
  {{-- <script>
    (function () {
      new FroalaEditor("#edit", {
        tabSpaces: 1
      })
    })()

  </script> --}}
  <script>
    (function() {
      new FroalaEditor("#edit", {
        events: {
          contentChanged: function () {
            $('#preview').html(this.html.get());
          }
        }
      })
    })()
  </script>
@endsection
