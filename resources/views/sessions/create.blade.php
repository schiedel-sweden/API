@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Registrera en ny användare</h2>

            <form class="" action="index.html" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Namn:</label>
                    <input class="form-control" type="text" name="name" placeholder="Anders Andersson">
                </div>

                <div class="form-group">
                    <label for="email">E-post:</label>
                    <input class="form-control" type="email" name="email" placeholder="Anders.Andersson@schiedel.se">
                </div>

                <div class="form-group">
                    <label for="password">Lösenord:</label>
                    <input class="form-control" type="password" name="password">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registrera ny användare</button>
                </div>
            </form>
        </div>
    </div>
@endsection
