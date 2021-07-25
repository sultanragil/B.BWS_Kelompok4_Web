@extends('backend.layouts.template')

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Add Creator</h4>
              <p class="card-category">Add New Creator</p>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('user.store') }}">
                {!! csrf_field() !!}
                <div class="row">
                <input type="hidden" id="creator_username" name="job" class="form-control" value="1">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name</label>
                      <input type="text" id="creator_name" name="name" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="email" id="creator_email" name="email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Password</label>
                      <input type="password" id="creator_password" name="password" class="form-control">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-info pull-right">Add New User</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
