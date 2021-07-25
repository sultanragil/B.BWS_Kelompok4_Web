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
              <h4 class="card-title ">Tag Title Table</h4>
              <p class="card-category"> Tabel Data Tag Title</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Title Name
                    </th>
                    <th>
                      Tag Name
                    </th>
                    <!--<th>
                      Sinopsis
                    </th>
                    <th>
                      Favorit
                    </th>
                    <th>
                      Author
                    </th>
                    <th>
                      Created at
                    </th>
                    <th>
                      Tanggal Terupdate
                    </th>-->
                    <th>

                    </th>
                  </thead>
                  <tbody>
                      @foreach ($titlet as $item)
                      <tr>
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            {{$item->title_id}}
                        </td>
                        <td>
                            {{$item->tag_id}}
                        </td>
                        <!--<td>
                            {{$item->sinopsis}}
                        </td>
                        <td>
                            {{$item->favorit}}
                        </td>
                        <td>
                            {{$item->creator_id}}
                        </td>
                        <td>
                            {{$item->created_at}}
                        </td>
                        <td>
                            {{$item->updated_at}}
                        </td>-->
                        <td class="td-actions text-right">
                        <form action="{{ route('titlet.destroy',$item->id) }}" method="POST">
                          <a href="{{ route('titlet.edit',$item->id) }}"><button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
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
                {!! $titlet->links() !!}
              </div>
            </div>
          </div>
          <a href="{{ route('titlet.create') }}"><button type="button" class="btn btn-info">Tambah</button></a>
        </div>
      </div>
    </div>
  </div>
@endsection
