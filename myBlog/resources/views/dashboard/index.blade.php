@extends('layouts.dashboard')

@section('title')
    Dashboard Main Page
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard_home') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Welcome To The Page {{ Auth::user() -> name}}</h2>
        </div>
    </div>
@endsection
