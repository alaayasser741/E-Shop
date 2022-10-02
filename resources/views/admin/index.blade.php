@extends('layouts.admin')

@section('content')
    <div class="card-body container-fluid py-0 px-4">
        <h1 class="-mb-2">{{ Auth::user()->name }}</h1>
    </div>
@endsection