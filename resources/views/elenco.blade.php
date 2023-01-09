@extends('layouts.main')

@section('content')
<h1>Elenco Film</h1>
<div class="container">
  <div class="row">
    @foreach ($movies as $movie)
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <a href="{{ route('details', $movie->id) }}">
            <img src="{{ $movie->cover_image }}" class="card-img-top" alt="{{ $movie->title }}">
          </a>
          <div class="card-body">
            <h5 class="card-title">{{ $movie->title }}</h5>
            <p class="card-text">{{ $movie->plot }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection