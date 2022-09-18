<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class ActionsController extends Controller
{
    public function hello(Request $request)
    {
        return response()->json([
            'mensagem' => 'Hello, world! Laravel OK'
        ]);
    }

    public function timeNow(Request $request)
    {
        return response()->json([
            'horaAtual' => Carbon::now('America/Sao_Paulo')->format('d-m-Y H:i:s'),
        ]);
    }

    public function textReceiver(Request $request)
    {
        return response()->json([
            'textoEnviado' => $request->input('inputContent'),
            'mensagem' => 'Post recebido com sucesso!'
        ]);
    }
}
