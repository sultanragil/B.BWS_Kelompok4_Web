@extends('backend.layouts.template')



@section('content')

<div class="content">
    <div class="container-fluid">
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <i class="material-icons">close</i>
    </button>
    <span>
      <b> Success - </b> {{ $message }}"</span>
</div>
@endif
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title ">Tag Table</h4>
              <p class="card-category"> Tabel Data Tag</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Tag
                    </th>
                    {{-- <th>
                      Profile
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Join Date
                    </th>
                    <th>
                      Username
                    </th>
                    <th>
                      Password
                    </th> --}}
                    <th>
                      Description
                    </th>
                    <th>
                      Created at
                    </th>
                    <th>
                      Updated at
                    </th>
                    <th>

                    </th>
                  </thead>
                  <tbody>
                      @foreach ($tag as $item)
                      <tr>
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            {{$item->tag_name}}
                        </td>
                        {{-- <td>
                            {{$item->user_pprofile}}
                        </td>
                        <td>
                            {{$item->user_email}}
                        </td>
                        <td>
                            {{$item->created_at}}
                        </td>
                        <td>
                            {{$item->user_username}}
                        </td>
                        <td>
                            {{$item->user_password}}
                        </td> --}}
                        <td>
                            {{$item->tag_desc}}
                        </td>
                        <td>
                            {{$item->created_at}}
                        </td>
                        <td>
                            {{$item->updated_at}}
                        </td>
                        <td class="td-actions text-right">
                        <form action="{{ route('tag.destroy',$item->id) }}" method="POST">
                          <a href="{{ route('tag.edit',$item->id) }}"><button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i></a>
                          </button>
                          @csrf
                          @method('DELETE')
                          <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" onclick="return confirm('Yakin akan menghapus data?')">
                            <i class="material-icons">close</i>
                          </button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
                {!! $tag->links() !!}
              </div>
            </div>
          </div>
          <a href="{{ route('tag.create') }}"><button type="button" class="btn btn-info">Tambah</button></a>
        </div>
      </div>
    </div>
  </div>
@endsection
