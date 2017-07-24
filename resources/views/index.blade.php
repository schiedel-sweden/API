@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('layouts.errors')

                <h2>Importera excel fil</h2>

                <div class="alert alert-info">
                    information om importer
                </div>

                <form action="" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="file" name="" value="">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info" type="submit" name="button">Ladda upp excel fil</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
