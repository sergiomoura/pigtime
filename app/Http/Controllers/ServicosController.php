<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use App\User;
use Illuminate\Support\Facades\DB;

class ServicosController extends Controller
{
    // MOSTRAR TODOS OS SERVICOS - '/servicos'
    public function index() {

        // Carregar os serviços do banco de dados
        $servicos = Servico::where('id_dono','!=',auth()->user()->id)->whereNull('id_prestador')->where('status','=','1')->get();
        // var_dump($servicos->user());
        // exit;
        foreach ($servicos as $servico) {
            $user = User::find($servico->id_dono);
            $servico->dono = $user->nome;
            $servico->donoSobrenome = $user->sobrenome;
            $servico->url_img = $user->url_img;
        }
        // Carregar os serviços em linha do tempo infitina ?

        // Retornar a view com os serviços
        return view(
            'admin.servicos',
            compact('servicos')
            // função compact passa a variavel $servicos para a view
        );
    }

    // CARREGAR OS SERVICOS ASSOCIADOS AO USUARIO LOGADO
    public function userindex() {

        // Carregar os serviços do banco de dados
        $servicos = Servico::where('id_dono','=',auth()->user()->id)->get();
        $aprovados = Servico::where('id_prestador','=',auth()->user()->id)->get();

        foreach ($servicos as $servico) {
            $user = User::find($servico->id_dono);
            $servico->dono = $user->nome;
            $servico->donoSobrenome = $user->sobrenome;
            $servico->url_img = $user->url_img;
        }

        foreach ($aprovados as $aprovado) {
            $user = User::find($aprovado->id_dono);
            $aprovado->dono = $user->nome;
            $aprovado->donoSobrenome = $user->sobrenome;
            $aprovado->url_img = $user->url_img;
        }

        // Retornar a view com os serviços
        return view(
            'admin.servicos.user',
            compact('servicos','aprovados')
        );
    }

    // MOSTRAR SERVIÇO INDIVIDUAL - '/servicos/{id}'
    public function show($id) {
        // Carrega o serviço do banco de dados
        // Comando FIND(encontrar)igual o SQL
        $servico = Servico::find($id);
        $user = User::find($servico->id_dono);

        // Retornar a view do serviço selecionado
        return view(
            'admin.servicos.show',
            compact('servico','user')
        );
    }

    // CARREGAR FORMULÁRIO EDIÇÃO SERVIÇOS
    public function edit($id){
        // Carrega o serviço do banco de dados
        // comando FIND(encontrar) igual o SQL
        $servico = Servico::find($id);

        // Retornar a view do serviço a ser editado
        return view(
            'admin.servicos.edit',
            compact('servico')
        );
    }

    // ALTERAR UM SERVIÇO - MANDAR DADOS PARA A DB
    public function update($id){

        // Validar o request
        // request -> pega o valor do campo do formulario
        // request()->validate(
        //     [
        //         // $campo => $regra
        //         'nome' => 'required',
        //         'descricao' => 'required',
        //         'CEP' => 'required',
        //         'endereco' => 'required',
        //         'horaInicial' => 'required',
        //         'horaFinal' => 'required',
        //     ]
        //     );
        
        // Carregando o produto da base de dados
        $servico = Servico::find($id);

        // Alterar os valores do produto
        $servico->nome = request('nome');
        $servico->descricao = request('descricao');
        $servico->CEP = request('CEP');
        $servico->endereco = request('endereco');
        $servico->numero = request('numero');
        $servico->complemento = request('complemento');
        $servico->bairro = request('bairro');
        $servico->cidade = request('cidade');
        $servico->horaInicial = request('data').' '.request('horaInicial').':00';
        $servico->horaFinal = request('data').' '.request('horaFinal').':00';
        $servico->pagamento = ($s->horaFinal->diffInMinutes($s->horaInicial, true))/60;

        // Salvar as alterações no banco de dados
        $servico->save();

        // Redirecionar para a lista de produtos
        return redirect('/servicos/'.$servico->id);
    }   

    // DELETAR UM SERVICO
    public function destroy($id){
        // Carregando o servico do banco de dados
        // $servico = Servico::find($id);

        // Remover elemento do Banco de Dado
        // $servico->delete();

        // Deletando o produto
        Servico::where('id',$id)->delete();

        // Redirecionar para a lista de produtos
        return redirect(
            'user/servicos'
        );
    }

    // MOSTRAR FORMULÁRIO CRIAÇÃO DE SERVICO
    public function create(){

        // Retornando a view
        return view(
            'admin.servicos.create'
        );
    }

    // CADASTRAR UM SERVICO - MANDAR PARA O DB
    public function store(){
        // Validar request
        // request -> pega o valor do campo do formulario
        // request()->validate(
        //     [
        //         // $campo => $regraDeValidacao
        //         'nome' => 'required',
        //         'descricao' => 'required',
        //         'endereco' => 'required',
        //         'horaInicial' => 'required',
        //         'horaFinal' => 'required',
        //     ]
        // );

        // Novo Servicos
        // var_dump(request('id_dono'));
        // exit;
        $s = new Servico;

        // Atribuindo valores ao Servico
        $s->nome = request('nome');
        $s->descricao = request('descricao');
        $s->CEP = request('CEP');
        $s->endereco = request('endereco');
        $s->numero = request('numero');
        $s->complemento = request('complemento');
        $s->bairro = request('bairro');
        $s->cidade = request('cidade');
        $s->horaInicial = request('data').' '.request('horaInicial').':00';
        $s->horaFinal = request('data').' '.request('horaFinal').':00';
        $s->pagamento = ($s->horaFinal->diffInMinutes($s->horaInicial, true))/60;
        $s->id_dono = request('id_dono');
        // Salvar o produto
        $s->save();

        return redirect(
            '/user/servicos'
        );

    }

    // CANDIDATAR UM USUÁRIO A UM SERVICO
    public function candidatar($id_servico){
        
        // Levantando o id do usuário candidato
        $id_usuario = User::find(request('id_user'));

        // Levantando o servico
        $servico = Servico::find($id_servico);

        // Adicionando o usuário como candidato ao serviço
        $servico->candidatos()->attach($id_usuario);

        // Redirecionando para tela de servicos
        return redirect('/servicos');

    }

    // APROVAR UM USUÁRIO A UM SERVICO
    public function aprovar($id){

        // Levantando o id do usuario aprovado
        $id_prestador = request('id_prestador');

        // Levantando o serviço
        $servico = Servico::find($id);

        // Alterar o falor id_prestador
        $servico->id_prestador = $id_prestador;

        // Limpar a tabela candidaturas
        DB::table('candidaturas')->where('servico_id','=',$id)->delete();

        // Salvar a alteração no banco de dados
        $servico->save();

        // Redirecionando para a tela servicos
        return redirect('user/servicos');
        
    }

    // FINALIZAR UM SERVICO
    public function finalizar($id){

        // caputrando o servico
        $servico = Servico::find($id);

        // mudando o status do servico
        $servico->status = 0;

        // transferir o saldo
        $pagamento = $servico->pagamento;
        $servico->prestador->saldo+=$pagamento;
        $servico->user->saldo-=$pagamento;

        // salvando os novos valores
        $servico->save();
        $servico->prestador->save();
        $servico->user->save();

        // redirecionando para a tela servicos
        return redirect('user/servicos');
    }
}
