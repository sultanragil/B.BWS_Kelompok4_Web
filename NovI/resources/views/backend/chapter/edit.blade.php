@extends('backend.layouts.template')

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Edit Chapter</h4>
              <p class="card-category">Edit Chapter</p>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('chapter.update',$chapter->id) }}">
                @csrf
                @method('PUT')
                <input type="hidden" id="user_id" name="chapter_id" value="{{ $chapter->id }}" class="form-control">
                <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Name</label>
                        <input type="text" id="user_name" name="title" value="{{ $chapter->chapter_title }}" class="form-control">
                      </div>
                    </div>
                    <!--<div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">TTS</label>
                        <input type="text" id="user_email" name="tts" value="{{ $chapter->chapter_tts }}" class="form-control">
                      </div>
                    </div>-->
                  </div>
                  <!--<div class="col-md-4">
                      <label class="bmd-label-floating">Profile</label>
                          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                              <div class="fileinput-new thumbnail img-raised">
                                  <img src="{{ asset('backend/assets/img/faces/person_8x10.png') }}" rel="nofollow" alt="user_pprofile">
                              </div>
                              <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                              <div>
                                  <input type="file" name="user_pprofile" />
                              </div>
                          </div>
                  </div>-->
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Novel</label>
                        <input type="text" id="user_username" name="title_id" value="{{ $chapter->title_id }}" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Isi</label>
                        <div class="form-group">
                          <label class="bmd-label-floating"> Chapter Content Here.</label>
                          <textarea id="edit" name="text" class="form-control" rows="5">{{ $chapter->chapter_text}}</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                <button type="submit" class="btn btn-info pull-right">Save Edit Chapter</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
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
  <script>
    (function () {
      new FroalaEditor("#edit", {
        tabSpaces: 1
      })
    })()
  </script>
@endsection
