@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
           
            <h1>la liste de mes cv</h1>
                <div class="float-right">
                    <a href="{{ url('cvs/create')}}" class="btn btn-success">Nouveau cv</a>
                </div>
                <div class="row">
                    @foreach($cvs as $cv)
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                          <img src="{{ asset('storage/'.$cv->photo) }}" alt="..." class="img-responsive" width="304" height="236">
                            <div class="caption">
                            <h3>{{ $cv->titre }}</h3>
                            <p>{{ $cv->presentation}}</p>
                              <p>
                                <a href="#" class="btn btn-primary" role="button">Show</a> 
                              <a href="{{ url('cvs/'.$cv->id.'/edit')}}" class="btn btn-warning" role="button">Editer</a>
                                <a href="#" class="btn btn-danger" role="button">Supprimer</a>
                            </p>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
        </div>
    </div>
</div>
@endsection