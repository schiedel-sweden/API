@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{-- Renders the excel uploader form --}}
            @include('uploads.form')
        </div>
    </div>
@endsection
