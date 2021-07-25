@extends('backend.layouts.template')

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Edit Tag Title </h4>
              <p class="card-category">Edit Tag Title</p>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('titlet.update',$titlet->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" id="titletag_id" name="titletag_id" value="{{ $titlet->id }}" class="form-control">
                {{-- <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name</label>
                      <input type="text" id="title_name" name="title_name" value="{{ isset($title) ? $post->title_name : '' }}" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="email" id="title_email" name="title_email" value="{{ isset($title) ? $post->title_email : '' }}" class="form-control">
                    </div>
                  </div>
                </div>
                <!--<div class="col-md-4">
                    <label class="bmd-label-floating">Profile</label>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                <img src="{{ asset('backend/assets/img/faces/person_8x10.png') }}" rel="nofollow" alt="title_pprofile">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <input type="file" name="title_pprofile" value="{{ isset($title) ? $post->title_pprofile : '' }}" />
                            </div>
                        </div>
                </div>-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">titlename</label>
                      <input type="text" id="title_titlename" name="title_titlename" value="{{ isset($title) ? $post->title_titlename : '' }}" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Password</label>
                      <input type="password" id="title_password" name="title_password" value="{{ isset($title) ? $post->title_password : '' }}" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Description About Me</label>
                      <div class="form-group">
                        <label class="bmd-label-floating"> Don't Expose Your Private Information</label>
                        <textarea id="title_desc" name="title_desc" class="form-control" rows="5">{{ isset($title) ? $post->title_desc : '' }}</textarea>
                      </div>
                    </div>
                  </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Title</label>
                            <select class="form-control selectpicker" name="title_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                              @foreach ($title as $item)
                              <option value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach
                            </select>
                        </div>
                        {{-- pesan error  --}}
                        @error('title_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tag</label>
                            <select class="form-control selectpicker" name="tag_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                              @foreach ($tag as $item)
                              <option value="{{$item->id}}">{{$item->tag_name}}</option>
                              @endforeach
                            </select>
                          </div>
                        {{-- pesan error  --}}
                        @error('tag_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <button type="submit" class="btn btn-info pull-right">Save Edit Tag Title</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
