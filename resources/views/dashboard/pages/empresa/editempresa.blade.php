@extends('dashboard.master.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')


    @component('components.empresa.empresa-comp-edit', ['organization' => $organization])
    @endcomponent

@stop
