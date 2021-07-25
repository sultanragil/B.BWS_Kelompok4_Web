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
              <form method="POST" action="{{ route('carousel.update',$carousel->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$carousel->id}}">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Title</label>
                            <input type="text" name="title" value="{{$carousel->title}}" class="form-control">
                        </div>
                        {{-- pesan error  --}}
                        @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <!--<div class="form-group">
                            <label class="bmd-label-floating">Pengarang</label>
                            <input type="text" name="pengarang" class="form-control">
                        </div>-->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Link</label>
                            <input type="text" name="link" value="{{$carousel->link}}" class="form-control">
                          </div>
                        {{-- pesan error  --}}
                        @error('pengarang')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="bmd-label-floating">Input File</label>
                        <input type="file" id="nama" name="image">
                        {{-- pesan error  --}}
                        @error('cover')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="bmd-label-floating">Text</label>
                            <textarea name="text" rows="5" class="form-control">{{$carousel->text}}</textarea>
                        </div>
                        {{-- pesan error  --}}
                        @error('sinopsis')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-info pull-right">Add New Carousel</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
