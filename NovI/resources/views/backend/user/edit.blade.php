@extends('backend.layouts.template')

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Edit Creator</h4>
              <p class="card-category">Edit Creator</p>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ isset($user) ? route('user.update',$user->id) : route('user.store') }}">
                @csrf
                @method('PUT')
                <input type="hidden" id="creator_id" name="creator_id" value="{{ $user->id }}" class="form-control">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name</label>
                      <input type="text" id="creator_name" name="creator_name" value="{{ isset($user) ? $user->name : '' }}" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="email" id="creator_email" name="creator_email" value="{{ isset($user) ? $user->email : '' }}" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Username</label>
                            <input type="text" id="creator_username" name="creator_username" value="{{ isset($creator) ? $creator->creator_username : '' }}" class="form-control">
                        </div>
                    </div> --}}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Password</label>
                            <input type="password" id="creator_password" name="creator_password" value="{{ isset($user) ? $user->password : '' }}" class="form-control">
                        </div>
                    </div>
                </div>
                <!--<div class="col-md-4">
                    <label class="bmd-label-floating">Profile</label>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                {{-- <img src="{{ asset('backend/assets/img/faces/person_8x10.png') }}" rel="nofollow" alt="creator_pprofile"> --}}
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                {{-- <input type="file" name="creator_pprofile" value="{{ isset($creator) ? $creator->creator_pprofile : '' }}" /> --}}
                            </div>
                        </div>
                </div>-->
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                      <label>Description About Me</label>
                      <div class="form-group">
                        <label class="bmd-label-floating"> Don't Expose Your Private Information</label>
                        <textarea id="creator_desc" name="creator_desc" class="form-control" rows="5">{{ isset($user) ? $user->desc : '' }}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-info pull-right">Save Edit creator</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
