@extends('layouts.admin')
@section('titulo')
    {{ __('Users') }}
@endsection

@section('content')
    @livewire('admin.control.usuarios')
@endsection
