@extends('dashboard.masterHomePage.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')


    @component('components.gallery', ['service'=>$service, 'images'=>$images, 'videos'=>$videos, 'organizations' => $organizations, 'services'=> $services])
    @endcomponent

@stop
