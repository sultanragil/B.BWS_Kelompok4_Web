@extends('backend.layouts.template')

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Edit Genre</h4>
              <p class="card-category">Edit Genre</p>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('genre.update',$genre->id) }}">
                @csrf
                @method('PUT')
                <input type="hidden" id="user_id" name="id" value="{{ $genre->id }}" class="form-control">
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name</label>
                      <input type="text" id="user_name" name="genre" value="{{ $genre->genre_name }}" class="form-control">
                    </div>
                  </div>
                  {{-- <div class="col-md-7">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="email" id="user_email" name="user_email" value="{{ isset($user) ? $user->user_email : '' }}" class="form-control">
                    </div>
                  </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description About Me</label>
                        <div class="form-group">
                          <label class="bmd-label-floating"> Don't Expose Your Private Information</label>
                          <textarea id="user_desc" name="description" class="form-control" rows="5">{{ $genre->genre_desc }}</textarea>
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
