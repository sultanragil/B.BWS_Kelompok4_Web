@extends('backend.layouts.template')

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Add Title Genre</h4>
              <p class="card-category">Add New Genre for Title</p>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('titleg.store') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                {{-- <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name</label>
                      <input type="text" id="title_name" name="title_name" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Author</label>
                      <input type="text" id="title_author" name="title_author" class="form-control">
                    </div>
                  </div>
                  <!-- <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Tanggal Terupdate</label>
                      <input type="text" id="title_author" name="title_author" class="form-control">
                    </div>
                  </div> -->
                </div>

                <!--<div class="col-md-4">
                    <label class="bmd-label-floating">Profile</label>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                <img src="{{ asset('backend/assets/img/faces/person_8x10.png') }}" rel="nofollow" alt="title_pprofile">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <input type="file" name="title_pprofile" />
                            </div>
                        </div>
                </div>-->
                <div class="row">
                  <!-- <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Favorit</label>
                      <input type="text" id="title_favorit" name="title_favorit" class="form-control">
                    </div>
                  </div> -->
                  <div class="col-md-4">
                      <label class="bmd-label-floating">Cover</label>
                      <input type="file" name="title_cover">
                  </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Created at</label>
                        <input type="text" id="title_created" name="title_creted" class="form-control">
                      </div>
                    </div>
                </div>  -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Sionopsis</label>
                      <textarea id="title_sinopsis" name="title_sinopsis" class="form-control" rows="5"></textarea>
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
                        <!--<div class="form-group">
                            <label class="bmd-label-floating">Pengarang</label>
                            <input type="text" name="pengarang" class="form-control">
                        </div>-->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Genre</label>
                            <select class="form-control selectpicker" name="genre_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                              @foreach ($genre as $item)
                              <option value="{{$item->id}}">{{$item->genre_name}}</option>
                              @endforeach
                            </select>
                          </div>
                        {{-- pesan error  --}}
                        @error('genre_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <!--<div class="row">
                    <div class="col-md-4">
                        <label class="bmd-label-floating">Input File</label>
                        <input type="file" id="nama" name="cover">
                        {{-- pesan error  --}}
                        @error('cover')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="bmd-label-floating">Sinopsis</label>
                            <textarea name="sinopsis" rows="5" class="form-control"></textarea>
                        </div>
                        {{-- pesan error  --}}
                        @error('sinopsis')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>-->
                <button type="submit" class="btn btn-info pull-right">Add New Title Genre</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
