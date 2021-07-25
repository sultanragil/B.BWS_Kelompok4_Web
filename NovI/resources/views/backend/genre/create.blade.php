@extends('backend.layouts.template')

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Add Genre</h4>
              <p class="card-category">Add New Genre</p>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('genre.store') }}">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" id="user_name" name="genre" class="form-control">
                        </div>
                    </div>
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
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description About Me</label>
                        <div class="form-group">
                          <label class="bmd-label-floating"> Don't Expose Your Private Information</label>
                          <textarea id="user_desc" name="description" class="form-control" rows="5"></textarea>
                        </div>
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
