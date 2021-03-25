<?php

namespace App\Http\Controllers;

use App\Models\Despesas;
use Illuminate\Http\Request;
use App\Models\MoldelDespesas;
use App\Usuarios;


class DespesasController extends Controller
{

  

    /**
     * Exibe uma lista do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $despesas = Despesas::orderBy('id')->get();
        return view('despesas', compact('despesas'));
        
  //      dd($this->objUsuarios->find(1)->relDespesa);
    }
       
    /**
     *Mostra o formulário de criação de um novo recurso.

     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('create');
    }

    /**
     * Armazene um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('Cadastrando');
    }

    /**
     * Mostra o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Detalhe das despesas" ($id);
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        return view('admin.despesas.edit', compact('id'));
        
    }

    /**
     * Atualize o recurso especificado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        dd("editando as despesas {$id}");
    }

    /**
     * Remova o recurso especificado do armazenamento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Despesa $despesa)    
    { 
        if ($despesa) {
            $despesa->delete();
        }
        return redirect(route('despesas.index'));
        //
    }
}
