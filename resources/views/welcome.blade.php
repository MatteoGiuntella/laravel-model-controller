@extends('layouts.app')

@section('main-content')
  
    <div class=" container box ">
        <div class="row">
            @foreach ($movies as $index => $singlemovie)
            <div class=" col-3 p-3 m-4 ">
          
                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body">
                      <h4 class="card-title">{{$singlemovie->title}}</h4>
                      <p class="card-text">Nationality: {{$singlemovie->nationality}}</p>
                      <p class="card-text">Vote: {{$singlemovie->vote}}</p>
                      <p class="card-text">Date: {{$singlemovie->date}}</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
        
             
            </div>
            @endforeach

        </div>
       
       
    </div>
  
@endsection
