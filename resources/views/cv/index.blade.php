@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>la liste de mes cv</h1>
                <div class="float-right">
                    <a href="{{ url('cvs/create')}}" class="btn btn-success">Nouveau cv</a>
                </div>
            <table class="table">
                <head>
                    <tr>
                        <th>Title</th>
                        <th>Presentation</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </head>
                <body>
                    @foreach($cvs as $cv)
                    <tr>
                        <td>{{ $cv->titre }}</td>
                        <td>{{ $cv->presentation }}</td>
                        <td>{{ $cv->created_at }}</td>
                        <td>
                            <a href="" class="btn btn-primary">Details</a>
                            <a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-default">Editer</a>
                            <a href="" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                </body>
            </table>
        </div>
    </div>
</div>
@endsection