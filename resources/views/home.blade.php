@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  

  <div class="row">

    {{-- for each to display db elements --}}
    @foreach ($movies as $movie)
    <div class="col-6">

      <div class=" card">
        <div class=" card-body ">
          <p>{{$movie -> id}}</p>
          <p>{{$movie -> title}}</p>
          <p>{{$movie -> original_title}}</p>
          <p>{{$movie -> nationality}}</p>
          <p>{{$movie -> date}}</p>
          <p>{{$movie -> vote}}</p>
        </div>
      </div>

    </div>
    @endforeach

  </div>

@endsection
