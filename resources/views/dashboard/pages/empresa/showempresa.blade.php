@extends('dashboard.master.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')


    @component('components.empresa.empresa-comp-show', ['organization' => $organization])
    @endcomponent

@stop
