@extends('layout')
@section('body')
<div class="row">

    @foreach ($posts as $post)


    <div class="col-lg-8 mx-auto">
      <h2 class="text-white mb-4">
          {!! $post->title !!}
        </h2>
      <div class="text-white mb-4" style="color: white">

        {!! $post->body !!}

      </div>
    </div>
    @endforeach
  </div>
@endsection
