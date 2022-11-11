@extends('dashboard.master.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Benvinda ao Painel de Gestão') }}
                </div>
                <div>
                    <div class="m-2">
                        <div class="row row-cols-1 row-cols-md-3 g-4" style="justify-content: center; text-align: center">
                            <div class="col">
                                <div class="card">
                                    <a href="/accesses"><img src="img/exemplo.jpg" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">ACESSOS</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="/services"><img src="img/exemplo.jpg" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">SERVIÇOS</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="/organizations/1"><img src="img/exemplo.jpg" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">EMPRESA</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="/images"><img src="img/exemplo.jpg" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">IMAGENS</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="/videos"><img src="img/exemplo.jpg" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">VIDEOS</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="/testimonals"><img src="img/exemplo.jpg" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">TESTEMUNHOS</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @stop


