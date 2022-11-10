@extends('dashboard.master.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')


<<<<<<< Updated upstream
    @component('components.imagens.imagens-comp-create', ['services' => $services])
=======
    @component('components.imagens.imagens-comp-create', ['services'=> $services])
>>>>>>> Stashed changes
    @endcomponent

@stop
