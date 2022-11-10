@extends('dashboard.master.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')


<<<<<<< Updated upstream
    @component('components.imagens.imagens-comp-edit', ['image' => $image, 'services' => $services])
=======
    @component('components.imagens.imagens-comp-edit', ['image'=> $image, 'services'=> $services])
>>>>>>> Stashed changes
    @endcomponent

@stop
