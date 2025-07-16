<!-- error -->
@extends('errors::layout')
@section('title', __('Forbidden'))
@section('code', '403')


@section('message', __('Forbidden'))
@section('description', __('You do not have permission to access this resource.'))
@section('content')
    <div class="error-container">
        <h1 class="error-code">403</h1>
        <h2 class="error-message">{{ __('Forbidden') }}</h2>
        <p class="error-description">{{ __('You do not have permission to access this resource.') }}</p>
        <a href="{{ url('/') }}" class="btn btn-primary">{{ __('Go to Home') }}</a>
    </div>
@endsection
@section('styles')