@extends('layouts.admin')
@section('titulo')
    {{ __('Subscriptions') }}
@endsection

@section('content')
    @livewire('admin.control.subscripciones')
@endsection
