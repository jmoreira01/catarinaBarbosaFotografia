@extends('dashboard.master.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')


    @component('components.testemunhos.testemunho-comp-edit', ['testimonal' => $testimonal] )
    @endcomponent

@stop
