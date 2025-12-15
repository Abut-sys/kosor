@extends('layouts.app')

@section('title', 'POS')

@section('content')
<div class="container py-4">
    <h1>Point of Sale</h1>

    <livewire:cashier.pos />
</div>
@endsection

@section('scripts')
    @livewireScripts
@endsection

@section('styles')
    @livewireStyles
@endsection
