@extends('layouts.app')

@section('title', 'Coffee')

@section('content')
<div class="container py-4">
    <h1>Coffee Shop</h1>
    <p>Browse products and categories.</p>

    <livewire:coffee.index />
</div>
@endsection

@section('styles')
    @livewireStyles
@endsection

@section('scripts')
    @livewireScripts
@endsection
