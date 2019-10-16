@extends('layouts.appPainel')

@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">{{Auth::user()->nome}}</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Perfil</li>
                </ol>
            </div>
        <div class="col-md-7 col-4 align-self-center">
            <a href="{{ url('/servicos/create') }}" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Anunciar serviço</a>
        </div>
    </div>    
@endsection

@section('content')
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <!-- Column -->
            <div class="card">
                <img class="card-img-top" src="{{url('./admin/assets/images/background/profile-bg.jpg')}}" alt="Card image cap">
                <div class="card-block little-profile text-center">
                    <div class="pro-img"><img src="{{url('./storage/app/storage/')}}/{{Auth::user()->url_img}}" alt="user" /></div>
                    <h3 class="m-b-0">{{Auth::user()->nome}}</h3>
                    <h4 class="m-b-0">{{Auth::user()->sobrenome}}</h4>
                
                    
                    <div class="row text-center m-t-20">
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">59</h3><small>Aprovados</small></div>
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">9</h3><small>Reprovados</small></div>
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">5</h3><small>Anuncios</small></div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="card">
                <div class="card-block bg-info">
                    <h4 class="text-white card-title">Mensagens</h4>
                    <h6 class="card-subtitle text-white m-b-0 op-5">Tire suas dúvidas antes de aprovar os serviços</h6>
                </div>
                <div class="card-block">
                    <div class="message-box contact-box">
                        <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
                        <div class="message-widget contact-widget">
                            <!-- Message -->
                            <a href="#">
                                <div class="user-img"> <img src="{{url('./admin/assets/images/users/1.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                <div class="mail-contnet">
                                    <h5>Marcelo Freitas</h5> <span class="mail-desc">marcelo.freitas@hotmail.com</span></div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="user-img"> <img src="{{url('./admin/assets/images/users/2.jpg')}}" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                <div class="mail-contnet">
                                    <h5>Pamela Mendonça</h5> <span class="mail-desc">pamela1987@gmail.com</span></div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                                <div class="mail-contnet">
                                    <h5>Thais Marello</h5> <span class="mail-desc">thais.marello@gmail.com</span></div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="user-img"> <img src="{{url('./admin/assets/images/users/4.jpg')}}" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                <div class="mail-contnet">
                                    <h5>Katia Silva</h5> <span class="mail-desc">katia@gmail.com</span></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aprovacao" role="tab">Aguardando sua aprovação</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#servicos" role="tab">Serviços a realizar</a> </li>
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                        <div class="tab-pane active" id="aprovacao" role="tabpanel">
                            <div class="card-block">
                                <div class="profiletimeline">
    
                                    
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="{{url('./admin/assets/images/users/2.jpg')}}" alt="user" class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div> <a href="#" class="link">Maria tem interesse em:</a> <span class="link">Instalar Quadro</span>
                                                <div class="m-t-20 row">
                                                    <div class="col-md-3 col-xs-12"><img src="{{url('./admin/assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-md-9 col-xs-12">
                                                        <p> João, está aguardando sua aprovação para o serviço que você anunciou. Verifique o perfil do João atentamente e decida a aprovaçao o mais breve possível  </p> <a href="#" class="btn btn-warning" style="margin-right:4px"> Ver perfil</a> <a href="#" class="btn btn-primary" style="margin-right:4px"> Aprovar</a><a href="#" class="btn btn-danger"> Reprovar</a></div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <hr>
                                    <div class="sl-item">
                                            <div class="sl-left"> <img src="{{url('./admin/assets/images/users/2.jpg')}}" alt="user" class="img-circle"> </div>
                                            <div class="sl-right">
                                                <div> <a href="#" class="link">Maria tem interesse em:</a> <span class="link">Instalar Quadro</span>
                                                    <div class="m-t-20 row">
                                                        <div class="col-md-3 col-xs-12"><img src="{{url('./admin/assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius"></div>
                                                        <div class="col-md-9 col-xs-12">
                                                            <p> João, está aguardando sua aprovação para o serviço que você anunciou. Verifique o perfil do João atentamente e decida a aprovaçao o mais breve possível  </p> <a href="#" class="btn btn-warning" style="margin-right:4px"> Ver perfil</a> <a href="#" class="btn btn-primary" style="margin-right:4px"> Aprovar</a><a href="#" class="btn btn-danger"> Reprovar</a></div>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="{{url('./admin/assets/images/users/2.jpg')}}" alt="user" class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div> <a href="#" class="link">Maria tem interesse em:</a> <span class="link">Instalar Quadro</span>
                                                <div class="m-t-20 row">
                                                    <div class="col-md-3 col-xs-12"><img src="{{url('./admin/assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-md-9 col-xs-12">
                                                        <p> João, está aguardando sua aprovação para o serviço que você anunciou. Verifique o perfil do João atentamente e decida a aprovaçao o mais breve possível  </p> <a href="#" class="btn btn-warning" style="margin-right:4px"> Ver perfil</a> <a href="#" class="btn btn-primary" style="margin-right:4px"> Aprovar</a><a href="#" class="btn btn-danger"> Reprovar</a></div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--second tab-->
                        <div class="tab-pane" id="servicos" role="tabpanel">
                            <div class="card-block">
                            
                                
                                        <div class="sl-item">
                                        
                                            <div class="sl-right">
                                                <div> <a href="#" class="link">Maria tem interesse em:</a> <span class="link">Instalar Quadro</span>
                                                    <div class="m-t-20 row">
                                                        <div class="col-md-3 col-xs-12"><img src="{{url('./admin/assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius"></div>
                                                        <div class="col-md-9 col-xs-12">
                                                            <p> João, está aguardando sua aprovação para o serviço que você anunciou. Verifique o perfil do João atentamente e decida a aprovaçao o mais breve possível  </p> <a href="#" class="btn btn-primary" style="margin-right:4px"> Aprovado</a> <a href="#" class="btn btn-warning" style="margin-right:4px"> Ver anúncio</a>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="sl-item">
                                            
                                                <div class="sl-right">
                                                    <div> <a href="#" class="link">Maria tem interesse em:</a> <span class="link">Instalar Quadro</span>
                                                        <div class="m-t-20 row">
                                                            <div class="col-md-3 col-xs-12"><img src="{{url('./admin/assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius"></div>
                                                            <div class="col-md-9 col-xs-12">
                                                                <p> João, está aguardando sua aprovação para o serviço que você anunciou. Verifique o perfil do João atentamente e decida a aprovaçao o mais breve possível  </p><a href="#" class="btn btn-danger"> Reprovado</a></div>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        <hr>
                                
                        
                                
                                <h4 class="font-medium m-t-30">Meus progressos</h4>
                                <hr>
                                <h5 class="m-t-30">Aprovados <span class="pull-right">80%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h5 class="m-t-30">Reprovados <span class="pull-right">15%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                    
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
            
    </div>
@endsection