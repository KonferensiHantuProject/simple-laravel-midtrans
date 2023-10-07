@extends('Layout.main')

@section('container')

<h1 class="text-white text-center mt-5 mb-3">{{ __('Welcome') }}</h1>

<div class="card bg-secondary  mb-3">
    <div class="card-header text-center"></div>
    <div class="card-body">
      <h5 class="card-title">{{ __('Consuming Midtrans AP') }}I</h5>
      <p class="card-text">{{ __('This is a simple example that will show you how to use midtrans API and you could use it to learn how to implement it inside your own laravel app. I hope this app will give you what you need.') }}</p>
    </div>
</div>

@endsection
