@extends('layouts.appPainel')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Escolha um serviço e ganhe tempo!</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Serviços</li>
            <li class="breadcrumb-item active">Meus Serviços</li>
        </ol>
    </div>
    <div class="col-md-7 col-4 align-self-center">
        <a href="{{ url('/servicos/create') }}"
            class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Anunciar serviço</a>
    </div>
</div>
@endsection


@section('content')
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row m-0 w-100">
    <div class="card w-100">
        {{-- Nav Tab --}}
        <ul class="nav nav-tabs profile-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#servicos" role="tab">Seus Serviços</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#Aprovacoes" role="tab">Aprovações</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#candidaturas" role="tab">Candidaturas</a>
            </li>
        </ul>
        {{-- Tab panes --}}
        <div class="tab-content">
            
            {{-- PAINEL SERVICOS --}}
            <div class="tab-pane active col-12 p-0 m-0" id="servicos" role="tabpanel">
                <div class="d-flex flex-wrap mt-4">
                    @foreach ($servicos as $s)
                    <!-- CARD -->
                    <div class="col-lg-4 col-md-4">
                        <div class="card rounded">
                            <!-- HEADER CARD; TÍTULO E DESCRICAO -->
                            <img class="rounded-top"
                                src="{{ url('admin/assets/images/background/previsao-do-tempo.jpg') }}"
                                alt="Card image cap">
                            <div class="card-img-overlay" style="height:110px;">
                                {{-- TITULO --}}
                                <h3 class="card-title text-white m-b-0 dl">{{ $s->nome }}</h3>
                                {{-- DESCRICAO  --}}
                                <small
                                    class="card-text text-white font-light"><br>{{ Str::limit($s->descricao, $limit =45, $end = '...') }}</small>
                            </div>
                            {{-- CORPO DO CARD --}}
                            <div class="card-body weather-small">
                                <div class="row d-flex m-b-10">
                                    {{-- FOTO DO USUARIO --}}
                                    <img src="{{ url($s->url_img) }}" alt="user"
                                        class="m-l-20" style="width: 50px; border-radius: 100%;">
                                    {{-- NOME DO USUARIO --}}
                                    <h5 class="my-0 py-0 m-l-10 card-title align-self-center">
                                        {{ $s->dono . ' ' . $s->donoSobrenome }} </h5>
                                </div>
                                {{-- DESCRICAO DETALHADA --}}
                                <p class="card-text" style="min-height:48px;">
                                    {{ Str::limit($s->descricao, $limit=60, $end = '...')}}</p>
                                {{-- DATA / HORARIO / DISTANCIA / --}}
                                <div class="row">
                                    {{-- CAMPO DATA --}}
                                    <div class="col-4 b-r text-center">
                                        <h1 class="font-light text-info m-b-0 m-r-10">
                                            <small>{{ $s->horaInicial->format('d/m') }}</small>
                                        </h1>
                                        <small>Data</small>
                                    </div>
                                    {{-- CAMPO HORAS --}}
                                    <div class="col-4 b-r px-0 d-flex flex-column align-items-center">
                                        <div class="d-flex">
                                            <div class="display-6 text-info"><i class="far fa-clock"></i></div>
                                            <div class="m-l-0">
                                                {{-- HORARIO --}}
                                                <h1 class="font-light text-info m-b-0">
                                                    {{ $s->horaInicial->format('H:i') }}<small>h</small></h1>
                                                {{-- PAGAMENTO --}}
                                                <small>Pagamento
                                                    {{ ($s->horaFinal->diffInMinutes($s->horaInicial, true))/60}}
                                                    h</small>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- DISTANCIA --}}
                                    <div class="col-4 text-center">
                                        <h1 class="font-light text-info m-b-0">13<small>km</small></h1>
                                        <small>Distância</small>
                                    </div>
                                </div>
                            </div>
                            <a href="/servicos/{{ $s->id }}" class="btn btn-primary">Visualizar</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- TAB Aprovacoes --}}
            <div class="tab-pane col-12 p-0 m-0" id="Aprovacoes" role="tabpanel">
                <div class="d-flex flex-wrap mt-4">
                    @foreach ($aprovados as $a)
                    
                    <!-- CARD -->
                    <div class="col-lg-4 col-md-4">
                        <div class="card rounded">
                            <!-- HEADER CARD; TÍTULO E DESCRICAO -->
                            <img class="rounded-top"
                                src="{{ url('admin/assets/images/background/previsao-do-tempo.jpg') }}"
                                alt="Card image cap">
                            <div class="card-img-overlay" style="height:110px;">
                                {{-- TITULO --}}
                                <h3 class="card-title text-white m-b-0 dl">{{ $a->nome }}</h3>
                                {{-- DESCRICAO  --}}
                                <small
                                    class="card-text text-white font-light"><br>{{ Str::limit($a->descricao, $limit =45, $end = '...') }}</small>
                            </div>
                            {{-- CORPO DO CARD --}}
                            <div class="card-body weather-small">
                                <div class="row d-flex m-b-10">
                                    {{-- FOTO DO USUARIO --}}
                                    <img src="{{ url($a->url_img) }}" alt="user"
                                        class="m-l-20" style="width: 50px; border-radius: 100%;">
                                    {{-- NOME DO USUARIO --}}
                                    <h5 class="my-0 py-0 m-l-10 card-title align-self-center">
                                        {{ $a->dono . ' ' . $a->donoSobrenome }} </h5>
                                </div>
                                {{-- DESCRICAO DETALHADA --}}
                                <p class="card-text" style="min-height:48px;">
                                    {{ Str::limit($a->descricao, $limit=60, $end = '...')}}</p>
                                {{-- DATA / HORARIO / DISTANCIA / --}}
                                <div class="row">
                                    {{-- CAMPO DATA --}}
                                    <div class="col-4 b-r text-center">
                                        <h1 class="font-light text-info m-b-0 m-r-10">
                                            <small>{{ $a->horaInicial->format('d/m') }}</small>
                                        </h1>
                                        <small>Data</small>
                                    </div>
                                    {{-- CAMPO HORAS --}}
                                    <div class="col-4 b-r px-0 d-flex flex-column align-items-center">
                                        <div class="d-flex">
                                            <div class="display-6 text-info"><i class="far fa-clock"></i></div>
                                            <div class="m-l-0">
                                                {{-- HORARIO --}}
                                                <h1 class="font-light text-info m-b-0">
                                                    {{ $a->horaInicial->format('H:i') }}<small>h</small></h1>
                                                {{-- PAGAMENTO --}}
                                                <small>Pagamento
                                                    {{ ($a->horaFinal->diffInMinutes($a->horaInicial, true))/60}}
                                                    h</small>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- DISTANCIA --}}
                                    <div class="col-4 text-center">
                                        <h1 class="font-light text-info m-b-0">13<small>km</small></h1>
                                        <small>Distância</small>
                                    </div>
                                </div>
                            </div>
                            <a href="/servicos/{{ $a->id }}" class="btn btn-primary">Visualizar</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- TAB candidaturas --}}
            <div class="tab-pane col-12 p-0 m-0" id="candidaturas" role="tabpanel">
                <div class="d-flex flex-wrap mt-4">
                    @foreach (Auth::user()->candidaturas as $a)
                    <!-- CARD -->
                    <div class="col-lg-4 col-md-4">
                        <div class="card rounded">
                            <!-- HEADER CARD; TÍTULO E DESCRICAO -->
                            <img class="rounded-top"
                                src="{{ url('admin/assets/images/background/previsao-do-tempo.jpg') }}"
                                alt="Card image cap">
                            <div class="card-img-overlay" style="height:110px;">
                                {{-- TITULO --}}
                                <h3 class="card-title text-white m-b-0 dl">{{ $a->nome }}</h3>
                            </div>
                            {{-- CORPO DO CARD --}}
                            <div class="card-body weather-small">
                                <div class="row d-flex m-b-10">
                                    {{-- FOTO DO USUARIO --}}
                                    <img src="{{ url($a->user->url_img) }}" alt="user" class="m-l-20" style="width: 50px; border-radius: 100%;">
                                    {{-- NOME DO USUARIO --}}
                                    <h5 class="my-0 py-0 m-l-10 card-title align-self-center">
                                        {{ $a->user->nome . ' ' . $a->user->sobrenome }}
                                    </h5>
                                </div>
                                {{-- DESCRICAO DETALHADA --}}
                                <p class="card-text" style="min-height:48px;">
                                    {{ Str::limit($a->descricao, $limit=60, $end = '...')}}</p>
                                {{-- DATA / HORARIO / DISTANCIA / --}}
                                <div class="row">
                                    {{-- CAMPO DATA --}}
                                    <div class="col-4 b-r text-center">
                                        <h1 class="font-light text-info m-b-0 m-r-10">
                                            <small>{{ $a->horaInicial->format('d/m') }}</small>
                                        </h1>
                                        <small>Data</small>
                                    </div>
                                    {{-- CAMPO HORAS --}}
                                    <div class="col-4 b-r px-0 d-flex flex-column align-items-center">
                                        <div class="d-flex">
                                            <div class="display-6 text-info"><i class="far fa-clock"></i></div>
                                            <div class="m-l-0">
                                                {{-- HORARIO --}}
                                                <h1 class="font-light text-info m-b-0">
                                                    {{ $a->horaInicial->format('H:i') }}<small>h</small></h1>
                                                {{-- PAGAMENTO --}}
                                                <small>Pagamento
                                                    {{ ($a->horaFinal->diffInMinutes($a->horaInicial, true))/60}}
                                                    h</small>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- DISTANCIA --}}
                                    <div class="col-4 text-center">
                                        <h1 class="font-light text-info m-b-0">13<small>km</small></h1>
                                        <small>Distância</small>
                                    </div>
                                </div>
                            </div>
                            <a href="/servicos/{{ $a->id }}" class="btn btn-primary">Visualizar</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- TAB CONTENT FINAL --}}
        </div>
    </div>
    <!-- Column -->
</div>

<!-- CARREGAR MAIS  -->
{{-- <div class="d-flex justify-content-start">
            <a href="#" class="btn btn-primary d-flex justify-content-center">Carregar Mais</a>
        </div> --}}
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@endsection