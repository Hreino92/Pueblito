<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\Support\Facades\DB;

class EventosController extends Controller
{
    // / ** * Crear una nueva instancia de controlador. * * @return void * /
    
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except('show');
        $this->middleware('auth:sanctum')->only('index');
        $this->middleware('auth:sanctum')->only('create');
        $this->middleware('auth:sanctum')->only('store');
        $this->middleware('auth:sanctum')->only('edit');
        $this->middleware('auth:sanctum')->only('update');
        $this->middleware('auth:sanctum')->only('destroy');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::paginate(10);
        return view('eventos.index', [
            'eventos' => DB::table('eventos')->simplePaginate(5)
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo'=> 'required', 'subtitulo' => 'required', 'descripcion'=> 'required', 'img'=> 'required|image|mimes:jpeg,jpg,png|max:51200', 'img2'=> 'required|image|mimes:jpeg,jpg,png|max:51200', 'img3'=> 'required|image|mimes:jpeg,jpg,png|max:51200'
        ]);
        
         $evento = $request->all();
        
        if ($imagen = $request->file('img')) {
            $rutaGuardarImg = 'imagen/';
            $imagenEvento = date('YmHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenEvento);
            $evento['img']= "$imagenEvento";
            
        }
        if ($imagen2 = $request->file('img2')) {
            $imagenOpcional2 ="OPC2".date('YmHis').".".$imagen2->getClientOriginalExtension();
            $imagen2->move($rutaGuardarImg, $imagenOpcional2);
            $evento['img2']= "$imagenOpcional2";
        }
        if ($imagen3 = $request->file('img3')) {
            $imagenOpcional3 ="OPC3".date('YmHis').".".$imagen3->getClientOriginalExtension();
            $imagen3->move($rutaGuardarImg, $imagenOpcional3);
            $evento['img3']= "$imagenOpcional3";
        }

        $evento['titulo'] = $request->titulo;
        $evento['subtitulo'] = $request->subtitulo;
        $evento['descripcion'] = $request->subtitulo;

        Evento::create($evento);
        $eventos = DB::table('eventos')->simplePaginate(5 );
        return view('eventos.index', compact('eventos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);
        return view('eventos.show',compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::find($id);
        // var_dump($evento);
        return view('eventos.editar', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $eventoedit = Evento::find($id);
        $request->validate([
            'titulo'=> 'required', 'subtitulo' => 'required', 'descripcion'=> 'required', 'img'=> 'required|image|mimes:jpeg,jpg,png|max:51200', 'img2'=> 'required|image|mimes:jpeg,jpg,png|max:51200', 'img3'=> 'required|image|mimes:jpeg,jpg,png|max:51200'
        ]);

        $eventoedit['titulo']= $request->titulo;
        $eventoedit['subtitulo'] = $request->subtitulo;
        $eventoedit['descripcion'] = $request->descripcion;
        
        if ($imagen = $request->file('img')) {
            $rutaGuardarImg = 'imagen/';
            $imagenEvento = date('YmHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenEvento);
            $eventoedit['img']= "$imagenEvento";
        }
        if ($imagen2 = $request->file('img2')) {
            $imagenOpcional2 ="OPC2".date('YmHis').".".$imagen2->getClientOriginalExtension();
            $imagen2->move($rutaGuardarImg, $imagenOpcional2);
            $eventoedit['img2']= "$imagenOpcional2";
        }
        if ($imagen3 = $request->file('img3')) {
            $imagenOpcional3 ="OPC3".date('YmHis').".".$imagen3->getClientOriginalExtension();
            $imagen3->move($rutaGuardarImg, $imagenOpcional3);
            $eventoedit['img3']= "$imagenOpcional3";
        }
       
        $eventoedit->update();
        $eventos = DB::table('eventos')->simplePaginate(5);
        
        return redirect('/eventos')->with('success', 'Datos Actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::find($id);
        $evento->delete();
        return redirect('/eventos')->with('error','Evento Eliminado');
    }
}
