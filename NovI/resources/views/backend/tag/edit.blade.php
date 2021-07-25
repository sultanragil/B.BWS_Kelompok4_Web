@extends('backend.layouts.template')

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Edit Tag</h4>
              <p class="card-category">Edit Tag</p>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('tag.update',$tag->id) }}">
                @csrf
                @method('PUT')
                <input type="hidden" id="user_id" name="id" value="{{ $tag->id }}" class="form-control">
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name</label>
                      <input type="text" id="user_name" name="tag" value="{{ $tag->tag_name }}" class="form-control">
                    </div>
                  </div>
                  {{-- <div class="col-md-7">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="email" id="user_email" name="user_email" value="{{ isset($user) ? $user->user_email : '' }}" class="form-control">
                    </div>
                  </div> --}}
                </div>
                <!--<div class="col-md-4">
                    <label class="bmd-label-floating">Profile</label>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                <img src="{{ asset('backend/assets/img/faces/person_8x10.png') }}" rel="nofollow" alt="user_pprofile">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <input type="file" name="user_pprofile" value="{{ isset($user) ? $user->user_pprofile : '' }}" />
                            </div>
                        </div>
                </div>-->
                {{-- <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Username</label>
                      <input type="text" id="user_username" name="user_username" value="{{ isset($user) ? $user->user_username : '' }}" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Password</label>
                      <input type="password" id="user_password" name="user_password" value="{{ isset($user) ? $user->user_password : '' }}" class="form-control">
                    </div>
                  </div>
                </div> --}}
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Description About Me</label>
                      <div class="form-group">
                        <label class="bmd-label-floating"> Don't Expose Your Private Information</label>
                        <textarea id="user_desc" name="description" class="form-control" rows="5">{{ $tag->tag_desc }}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-info pull-right">Save Edit User</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
