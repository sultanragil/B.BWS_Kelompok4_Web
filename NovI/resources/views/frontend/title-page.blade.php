@extends('frontend/layouts.template')

@section('header')
    Title Page - Novel Inspiration
@endsection

@section('content')

<div class="container">
    <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-left title">{{$title->name}} </h2>
            <div class="row">
              <div class="col-md-4">
                  <table class="table">
                      <tbody>
                          <tr>
                              <img src="{{ asset('images/'.$title->cover)  }}" alt="Cover Image" height="300" width="200">
                          </tr>
                          <!--<tr>
                              <h4 class="text-left title">Status </h4>
                              <p class="text-left">
                                <a href="http://">Completed</a>
                              </p>
                          </tr>-->
                          <tr>
                              <h4 class="text-left title">Author </h4>
                              <p class="text-left">
                                <a href="http://">{{$title->user_id}}</a>
                              </p>
                          </tr>
                          <tr>
                              <h4 class="text-left title">Year </h4>
                              <p class="text-left">
                                {{$title->created_at}}
                              </p>
                          </tr>
                          <tr>
                              <h4 class="text-left title">Genre </h4>
                              <p class="text-left" style="">
                                  <!--<div class="row">
                                      <div class="col-md-3">
                                        <span class="label label-default">Action</span>
                                      </div>
                                      <div class="col-md-3">
                                        <span class="label label-default">Romance</span>
                                      </div>
                                      <div class="col-md-3">
                                        <span class="label label-default">Sci-fi</span>
                                      </div>
                                      <div class="col-md-3">
                                        <span class="label label-default">Comedy</span>
                                      </div>
                                      <div class="col-md-3">
                                        <span class="label label-default">Default</span>
                                      </div>
                                  </div>-->
                                  @foreach ($genre as $item)
                                  <a href="http://">{{$item->genre_name}}</a>
                                  @endforeach


                              </p>
                          </tr>
                          <tr>
                              <h4 class="text-left title">Tag </h4>
                              <p class="text-left">
                                @foreach ($tag as $item)
                                  <a href="http://">{{$item->tag_name}}</a>
                                @endforeach
                              </p>
                          </tr>
                          <tr>
                              <h4 class="text-left title">Likes </h4>
                              <p class="text-left">

                                    <a href="#pablo" class="btn btn-danger btn pull-left">
                                        <i class="material-icons">favorite</i> {{$title->favorit}}
                                    </a>

                              </p>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <div class="col-md-7">
                  <table class="table">
                      <tbody>
                          <tr>
                              <h4 class="text-left title">Description </h4>
                              <p class="text-left">
                                {{$title->sinopsis}}
                              </p>
                          </tr>
                          <tr>
                              <table class="table">
                                  <thead class=" text-primary">
                                    <th>
                                      Date
                                    </th>
                                    <th>
                                      Chapter
                                    </th>
                                    <th>
                                      Link
                                    </th>
                                  </thead>
                                  <tbody>
                                        @foreach ($chapter as $item)
                                        <tr>
                                            <td>
                                                 {{$item->created_at}}
                                            </td>
                                            <td>
                                                {{$item->chapter_title}}
                                            </td>
                                            <td cl>
                                               <a href="{{ url('fchapter/' . $item->id) }}">Read</a>
                                            </td>
                                         </tr>
                                        @endforeach

                                  </tbody>
                                </table>
                                {!! $chapter->links() !!}
                          </tr>
                      </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>


@endsection
