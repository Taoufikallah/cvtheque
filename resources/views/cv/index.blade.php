@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>La liste de mes cv</h1>

            <table class="table">
                <head>
                    <tr>
                        <th>Title</th>
                        <th>Presentation</th>
                        <th>actions</th>
                    </tr>
                </head>
                <body>
                    @foreach($cvs as $cv)
                    <tr>
                    <td>{{ $cv->titre }}</td>
                    <td>{{ $cv->presentation}}</td>
                        <td>
                            <a href="" class="btn btn-primary">Details</a>
                            <a href="" class="btn btn-default">Editer</a>
                            <a href="" class="btn btn-denger">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                </body>    
            </table>
        </div>
    </div>
</div>
@endsection