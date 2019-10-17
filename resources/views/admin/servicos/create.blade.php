@extends('layouts.appPainel')

@section('breadcrumb')
    <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Faça seu anúncio!</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/servicos') }}">Serviços</a></li>
                    <li class="breadcrumb-item active">Anúncio</li>
                </ol>
            </div>
    </div>

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="form p-t-20" action="/servicos" method="post">
                    {{-- METODO PARA MANDAR AO SERVIDOR --}}
                    @csrf
                        {{-- NOME SERVICO --}}
                        <div class="form-group-row">
                            {{-- NOME SERVICO --}}
                            <div class="col-sm-6">
                                <label for="nome">Nome do Serviço</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-home"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control @error('nome') is-invalid @enderror " id="nome" name="nome" placeholder="Digite o nome do serviço" required>
                                    @error('nome')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- FIM PRIMEIRA LINHA DO FORM-GROUP --}}
                        {{-- DESCRICAO SERVICOS --}}
                        <div class="form-group-row">
                            {{-- DESCRICAO SERVICO  --}}
                            <div class="col-sm-6">
                                <label for="descricao">Descrição do Serviço</label>
                                <!-- Ícone do bonequinho. trocar por <i class="far fa-comment-alt"></i>     daqui:  https://fontawesome.com/icons/comment-alt?style=regular -->
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-search" style="margin: 5px;"></i></div>
                                    </div>
                                <textarea rows="5" class="form-control @error('descricao') is-invalid @enderror " id="descricao" name="descricao" placeholder="Descrição do seu serviço" required></textarea>
                                @error('descricao')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- FIM SEGUNDA LINHA DO FORM-GROUP --}}
                        {{-- CEP --}}
                        <div class="form-group-row">
                            {{-- CEP --}}
                            <div class="col-sm-6">
                                <label for="CEP">CEP</label>
                                <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-search" style="margin: 5px;"></i></div>
                                </div>
                                <input type="text" class="form-control" name="CEP" id="CEP" maxlength="9" placeholder="Digite seu CEP" required/>
                                </div>
                            </div>
                        </div>
                        {{-- ENDEREÇO RUA --}}
                        <div class="form-group-row">
                            {{-- ENDERECO SERVICO --}}
                            <div class="col-sm-6">
                                <label for="endereco">Endereço</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-home"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control @error('endereco') is-invalid @enderror " id="endereco" name="endereco" placeholder="Av, Rua..." readonly required>
                                    @error('endereco')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- FINAL TERCEIRA LINHA FORM-GROUP --}}
                        {{-- NUMERO E COMPLEMENTO --}}
                        <div class="form-group-row">
                            {{-- NUMERO --}}
                            <div class="col-sm-6">
                                <label for="numero">N°</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-home"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control @error('numero') is-invalid @enderror" id="numero" name="numero" placeholder="N°" required>
                                    @error('numero')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- COMPLEMENTO --}}
                            <div class="col-sm-6">
                                <label for="complemento">Complemento</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-home"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Ap, BL, Cj...">
                                </div>
                            </div>
                        {{-- FINAL QUARTA LINHA FORM-GROUP --}}
                        </div>
                        {{-- COMEÇO QUINTA LINHA FORM-GROUP --}}
                        <div class="form-group-row">
                            {{-- BAIRRO --}}
                            <div class="col-sm-6">
                                <label for="bairro">Bairro</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa fa-map-signs" style="margin: 5px;"></i>
                                        </span>
                                    </div>
                                    <input name="bairro" type="text" class="form-control" id="bairro" readonly required />
                                </div>
                            </div>
                            {{-- CIDADE --}}
                            <div class="col-sm-6">
                                <label for="cidade">Cidade</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-map-signs" style="margin: 5px;"></i></div>
                                    </div>
                                    <input name="cidade" type="text" class="form-control" name="cidade" id="cidade" readonly required />
                                </div>
                            </div>
                        {{-- FINAL QUINTA LINHA FORM-GROUP --}}
                        </div>
                        {{-- COMEÇO SEXTA LINHA FORM-GROUP --}}
                        <div class="form-group row">
                            {{-- DATA --}}
                            <div class="col-sm-6">
                                <label for="data">Data</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-email"></i>
                                        </span>
                                    </div>
                                    <input type="date" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control @error('data') is-invalid @enderror " id="data" name="data" placeholder="Horário de início:" required>
                                    @error('data')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        {{-- FINAL SEXTA LINHA FORM-GROUp --}}
                        </div>
                        <div class="form-group-row">
                            {{-- HORARIO INICIO --}}
                            <div class="col-sm-6">
                                <label for="horaInicial">Horário de início:</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-email"></i>
                                        </span>
                                    </div>
                                    <input type="time" min="{{ Carbon\Carbon::now()->locale('pt_BR')->format('Y-m-d H:i') }}"  class="form-control @error('horaInicial') is-invalid @enderror " id="horaInicial" name="horaInicial" placeholder="Horário de início:" required>
                                    @error('horaInicial')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                {{-- HORARIO FINAL --}}
                                <label for="horaFinal">Horário de término:</label>
                                <div class="input-group mb-4"> 
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-email"></i>
                                        </span>
                                    </div>
                                    <input type="time"  class="form-control @error('horaFinal') is-invalid @enderror" id="horaFinal" name="horaFinal" placeholder="Horário de término:" required>
                                    @error('horaFinal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- INPUT ID_USUARIO --}}
                                    <input type="hidden" name="id_dono" id="id_dono" value="{{ Auth::user()->id }}">
                                <div class="form-group-row ml-4">
                                    <button type="submit" name="anunciar" class="btn mb-2 col-12 btn-success waves-effect waves-light m-r-10">Anunciar</button>
                                    <button type="create" name="cancelar" class="btn col-12 btn-inverse waves-effect waves-light">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    <script src="{{ url('js/cep.js')}}"></script>
@endsection






