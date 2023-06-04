<?php

namespace App\Http\Controllers;

use App\Models\loginModel;
use Illuminate\Http\Request;


class loginController extends Controller
{

    public function save(Request $request){
        $producto = new loginModel();
        $producto->nombre_fruta = $request->nombre_fruta;
        $producto->cantidad = $request->cantidad;
        $producto->proveedor =  $request->proveedor;
        $producto->save();
        return redirect('');
    }

    public function edit($id){
        $fruta = loginModel::find($id);
        return view('edit',compact('fruta'));
    }

    public function update(Request $request, $id){
        $fruta = loginModel::find($id);
        $fruta->nombre_fruta = $request->nombre_fruta;
        $fruta->cantidad = $request->cantidad;
        $fruta->proveedor = $request->proveedor;
        $fruta->estado = 1;
        $fruta->update();
        return redirect('');
    }

    // Existen dos tipos de borrados en el crud: borrado lógico y borrado fisico.

    public function delete($id){
        $fruta = loginModel::find($id);
        $fruta->estado = 0;
        $fruta->delete();
        return redirect('');
    }
}
