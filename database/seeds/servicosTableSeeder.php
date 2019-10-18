<?php

use Illuminate\Database\Seeder;
use App\Servico;

class servicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = new Servico();
        
        $s->nome = '1';
        $s->descricao = 'Tenho um labrador de 50kg ele ama correr e morder o dono';
        $s->CEP = '01307-000';
        $s->endereco = 'Rua Frei Caneca';
        $s->numero = '444';
        $s->bairro = 'Consoloção';
        $s->cidade = 'São Paulo';
        $s->complemento = 'Ap 64';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->id_dono = 2;
        $s->status = 1;
        $s->avaliacao = 'teste';
        $s->pagamento = "1";
        $s->id_prestador = null;

        $s->save();

        $s = new Servico();
        
        $s->nome = '2';
        $s->descricao = 'Tenho um labrador';
        $s->CEP = '01307-000';
        $s->endereco = 'Rua Frei Caneca';
        $s->numero = '444';
        $s->bairro = 'Consoloção';
        $s->cidade = 'São Paulo';
        $s->complemento = 'Ap 64';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->id_dono = 2;
        $s->status = 1;
        $s->avaliacao = 'teste';
        $s->pagamento = "1";
        $s->id_prestador = null;

        $s->save();

        $s = new Servico();
        
        $s->nome = '3';
        $s->descricao = 'Tenho um labrador de 50kg ele ama correr e morder o dono ASUDKAHKWDUHASKUDHAKSUDHAKSUDHAIWUDHASKJDHKAUWDKSUHDKAWUDHKASUHDSKAUh';
        $s->CEP = '01307-000';
        $s->endereco = 'Rua Frei Caneca';
        $s->numero = '444';
        $s->bairro = 'Consoloção';
        $s->cidade = 'São Paulo';
        $s->complemento = 'Ap 64';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->id_dono = 2;
        $s->status = 1;
        $s->avaliacao = 'teste';
        $s->pagamento = "1";
        $s->id_prestador = null;

        $s->save();

        $s = new Servico();
        
        $s->nome = '4';
        $s->descricao = 'Tenho um labrador de 50kg ele ama correr e morder o dono';
        $s->CEP = '01307-000';
        $s->endereco = 'Rua Frei Caneca';
        $s->numero = '444';
        $s->bairro = 'Consoloção';
        $s->cidade = 'São Paulo';
        $s->complemento = 'Ap 64';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->id_dono = 1;
        $s->status = 1;
        $s->avaliacao = 'teste';
        $s->pagamento = "1";
        $s->id_prestador = null;

        $s->save();

        $s = new Servico();
        
        $s->nome = '5';
        $s->descricao = 'Tenho um labrador de 50kg ele ama correr e morder o dono UHASDHKASHDKASUhkaushdkasuhdKUSDHKASUHDKASUHDKASUHDKASUHDKASUHDKUASHDKUASH';
        $s->CEP = '01307-000';
        $s->endereco = 'Rua Frei Caneca';
        $s->numero = '444';
        $s->bairro = 'Consoloção';
        $s->cidade = 'São Paulo';
        $s->complemento = 'Ap 64';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->id_dono = 1;
        $s->status = 1;
        $s->avaliacao = 'teste';
        $s->pagamento = "1";
        $s->id_prestador = null;

        $s->save();

        $s = new Servico();
        
        $s->nome = 'Passear com cachorro Grande';
        $s->descricao = 'Tenho um labrador';
        $s->CEP = '01307-000';
        $s->endereco = 'Rua Frei Caneca';
        $s->numero = '444';
        $s->bairro = 'Consoloção';
        $s->cidade = 'São Paulo';
        $s->complemento = 'Ap 64';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->id_dono = 1;
        $s->status = 1;
        $s->avaliacao = 'teste';
        $s->pagamento = "1";
        $s->id_prestador = null;

        $s->save();
    }
}
