@extends('dashboard.master.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')


    @component('components.servicos.servicos-comp-edit', ['service' => $service])
    @endcomponent

@stop
