@extends('dashboard.master.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')


    @component('components.imagens.imagens-comp-list', ['images' => $images])
    @endcomponent

@stop
