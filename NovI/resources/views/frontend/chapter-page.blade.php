@extends('frontend/layouts.template')
@section('header')
    Chapter Page - Novel Inspiration
@endsection
@section('content')
<div class="container">
    <div class="section section-text">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="title">{{$chapter->chapter_title}}</h3>
                <br>
                <div class="fr-view" id="preview" >
                    {!!$chapter->chapter_text!!}
                </div>

            </div>
        </div>
    </div>

    <div class="section text-center">
        <div class="col-md-12">
            <button class="btn btn-primary btn-simple btn-sm">Previous</button>
            <a href="{{ url('ftitle/' . $chapter->title_id) }}"><button class="btn btn-primary btn-simple btn-sm">Table of Content</button></a>
            <button class="btn btn-primary btn-simple btn-sm">Next</button>

        </div>
    </div>
    <div class="section section-comments">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="media-area">
                    <h3 class="title text-center">{{$count}} Comments</h3>
                    @foreach ($comment as $item)
                    <div class="media">

                        <a class="pull-left" href="#pablo">
                            <div class="avatar">
                                <img class="media-object" src="{{ asset('images/'.$item->foto) }}" alt="..."/>
                            </div>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">{{$item->name}} <small>&middot; {{$item->created_at}}</small></h4>
                            <h6 class="text-muted"></h6>

                            <p>{{$item->content}}</p>
                            <div class="media-footer">
                                <!--<a href="#pablo" class="btn btn-primary btn-simple pull-right" rel="tooltip" title="Reply to Comment">
                                    <i class="material-icons">reply</i> Reply
                                </a>-->
                                <a href="#pablo" class="btn btn-danger btn-simple pull-right">
                                    <i class="material-icons">favorite</i> {{$item->like}}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                  <h3 class="title text-center">Post your comment</h3>
                  <div class="media media-post">
                      <a class="pull-left author" href="#pablo">
                          <div class="avatar">
                                <img class="media-object" alt="64x64" src="frontend/assets/img/faces/card-profile6-square.jpg">
                          </div>
                      </a>
                      <div class="media-body">
                            <textarea class="form-control" placeholder="Write some nice stuff or nothing..." rows="6"></textarea>
                            <div class="media-footer">
                                 <a href="#pablo" class="btn btn-primary btn-round btn-wd pull-right">Post Comment</a>
                            </div>
                      </div>
                  </div> <!-- end media-post -->
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
    (function() {
      new FroalaEditor("#edit", {
        events: {
          contentChanged: function () {
            ("#preview").html(this.html.get());
          }
        }
      })
    })()
</script>
@endsection
