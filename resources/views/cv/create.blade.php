@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form action="{{ url('cvs')}}" method="post">
                {{ csrf_field()}}
                    <div class="form-group">
                            <label for="">Titre</label>
                            <input type="text" name="titre"  class="form-control">
                        </div>

                    <div class="form-group">
                        <label for="">Presentation</label>
                        <textarea name="presentation" class="form-control" cols="30" rows="10"></textarea>
                    </div>

                    
    
                    <div class="form-group">
                        <input type="submit"  class="form-control btn btn-primary" value="Enregistrer" >
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection