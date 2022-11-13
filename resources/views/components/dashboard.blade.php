@extends('dashboard.master.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')
    <div class="container" style="margin-top: 5%">
        <div class="row justify-content-center">
            <div class="row row-cols-1 row-cols-md-3 g-4 "
                 style="justify-content: center; text-align: center">
                <div class="col">
                    <div class="card efeito3d_img1">
                        <a href="/accesses"><img src="img/icons/access.png" class="card-img-top img_dashboard "
                                                 alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">ACESSOS</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card efeito3d_img2">
                        <a href="/services"><img src="img/icons/servico.png" class="card-img-top img_dashboard"
                                                 alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">SERVIÇOS</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card efeito3d_img3">
                        <a href="/organizations/1"><img src="img/icons/organization.png"
                                                        class="card-img-top img_dashboard"
                                                        alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">EMPRESA</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card efeito3d_img4">
                        <a href="/images"><img src="img/icons/imagem.png" class="card-img-top img_dashboard" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">IMAGENS</h5>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="card efeito3d_img5">
                        <a href="/videos"><img src="img/icons/video.png" class="card-img-top img_dashboard"
                                               alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">VIDEOS</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card efeito3d_img6">
                        <a href="/testimonals"><img src="img/icons/testemunhos.png" class="card-img-top img_dashboard"
                                                    alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">TESTEMUNHOS</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


