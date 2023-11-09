<?php

namespace App\Http\Controllers\Web;

use App\Models\Guardia;
use App\Models\Informe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformeControllerWeb extends Controller
{

    public function indexAdmin()
    {
        $informes=Informe::all();
        
        return view('admin.informe.index',compact('informes'));
    }

    public function indexGuardia()
    {
        $informes=Informe::all();

        return view('guardia.informe.index',compact('informes'));
    }

    public function createView(Request $request){

        $credentials = $this->validate(
            request(),
            [
                'evento_id' => 'required|string|unique:eventos,id',
                'titulo' => 'required|string',
                'documento' => 'required|string',
            ]
        );


        $data=[
            'evento_id'=>$request->evento_id,
            'titulo'=>$request->titulo,
            'guardia_id'=>auth()->user()->id,
            'documento'=>''
        ];

        if ($request->hasFile('documento')) {
            $data['documento'] = Storage::disk('public')->put('documentos', $request->documento);
        }

        return redirect()->route('');

    }

}
