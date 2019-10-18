@extends('layouts.master')

@section('title' , 'Cadastrar')

@section('content')

<div class="page-wrapper">
    <div class="container-fluid d-flex justify-content-center">            
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align: center">Formulário de Cadastro</h4>

                        @if(isset($errors) && count($errors) > 0)
                            <div class="alert-danger">
                                @foreach($errors->all() as $error)
                                    <p>{{$error}}</p>
                                @endforeach
                            </div>
                        @endif
                        <form class="form p-t-20" action="/regUser" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6">
                                <label for="nome" class="label">*Nome:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-user"></i>
                                            </span>
                                        </div>
                                        
                                        <input type="text" class="form-control" id="nameInput" name="nome" placeholder="* Nome" value="{{old('nome')}}">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                <label for="sobrenome" class="label">*Sobrenome:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="* Sobrenome" value="{{old('sobrenome')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                <label for="rg" class="label">RG:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-user"></i>
                                                </span>
                                        </div>
                                        <input type="text" class="form-control" id="rg" name="rg" placeholder="RG" value="{{old('rg')}}">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                <label for="cpf" class="label">CPF:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-user"></i>
                                                </span>
                                        </div>
                                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" value="{{old('cpf')}}">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label for="sexo" class="label">Sexo:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-user"></i>
                                                </span>
                                        </div>
                                        
                                        <select name="sexo" id="sexo" class="form-control">
                                            <option value="sexo" selected disabled hidden>Sexo</option>
                                            <option value="m">Masculino</option>
                                            <option value="f">Feminino</option>
                                            <option value="o">Outro</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6">
                                <label for="email" class="label">*E-mail:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-email"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="* E-mail" value="{{old('email')}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <label for="emailConf" class="label">*Confirmar E-mail:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-email"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="emailConf" placeholder="* Confirmar e-mail">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6">
                                <label for="password" class="label">*Senha:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-lock"></i>
                                            </span>
                                        </div>
                                            <input type="password" class="form-control" id="senha" name="password" placeholder="* Senha">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <label for="passwordConf" class="label">*Confirmar senha:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-lock"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control" id="senha" name="passwordConf" placeholder="* Confirmar senha">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6">
                                <label for="endereco" class="label">Endereço:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-home"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Av, Rua..." value="{{old('endereco')}}">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label for="numero" class="label">Número:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-home"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="numero" name="numero" placeholder="N°" value="{{old('numero')}}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                <label for="complemento" class="label">Complemento:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-home"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Ap, BL, Cj..." value="{{old('complemento')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-5">
                                <label for="bairro" class="label">Bairro:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-home"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="{{old('bairro')}}">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                <label for="cidade" class="label">Cidade:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-home"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="{{old('cidade')}}">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                <label for="uf" class="label">UF:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-home"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="uf" name="uf" placeholder="UF" value="{{old('uf')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                <label for="telefone_2" class="label">Telefone 1:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-mobile"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="telefone_1" name="telefone_1" placeholder="Telefone 1" value="{{old('telefone_1')}}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                <label for="telefone_2" class="label">Telefone 2:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-mobile"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="telefone_2" name="telefone_2" placeholder="Telefone 2" value="{{old('telefone_2')}}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                <label for="cep" class="label">CEP:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-mobile"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="CEP" name="cep" placeholder="CEP" value="{{old('cep')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <p>(*) Necessário preencher</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label class="btn btn-warning" for="img">Carregar foto</label>
                                    <input type="file" name="img" id="img" class="d-none" >
                                </div>
                                <div class="col-sm-5">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="enviar" class="btn btn-success waves-effect waves-light m-r-10">Enviar</button>
                                <button type="submit" name="cancelar" class="btn btn-inverse waves-effect waves-light">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>