<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class EventController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){
            $users = Pessoa::where([
                ['Nome', 'like', '%'.$search.'%']
            ])->first();
        }else{
            $users = Pessoa::all();
        }

        return view('index',['users' => $users, 'search' => $search]);

    }

    public function create(){

        return view('/events/create');
    }

    public function read(){

        $tabelas = Pessoa::all();

        return view('/events/read', ['tabelas' => $tabelas]);
    }

    public function store(Request $request){

        $info = new Pessoa;

        $info->Nome = $request->Nome;
        $info->Senha = $request->Senha;
        $info->jogos = $request->jogos;

        $info->save();

        return redirect('/');

    }

    public function show($id){
        $user = Pessoa::findOrFail($id);

        return view('/events/info', ['user' => $user]);
    }

}
