@extends('dashboard.master.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')


    @component('components.videos.videos-comp-create', ['services' => $services])
    @endcomponent

@stop
