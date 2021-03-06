<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Specialty;
use App\Http\Controllers\Controller;
class SpecialtyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $specialties = Specialty::all();
        return view('specialties.index', compact('specialties'));
    }
    private function performValidation(){
        $rules = [
            'name' => 'required|min:3'
        ];
        $messages = [
            'name.required' => 'Es necesario ingresar un nombre.',
            'name.min' => 'Como mínimo el nobre debe tener 3 caracteres.'
        ];

        $this->validate($request, $rules, $messages);
    }
    public function create()
    {
        return view('specialties.create');
    }
    public function store(Request $request)
    {
        //dd($request->all());
       $this->performValidation($request);

        $specialty = new Specialty();
        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save(); //
        $notification = 'La especialidad se ha registrado correctamente.';
        return redirect('/specialties')->with(compact('notification'));
    }

    public function edit(Specialty $specialty)
    {
        
        return view('specialties.edit', compact('specialty'));
    }
    
    public function update(Request $request, Specialty $specialty)
    {
        //dd($request->all());
        $this->performValidation($request);

        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save(); //update
        $notification = 'La especialidad se ha actulizado correctamente.';
        return redirect('/specialties')->with(compact('notification'));
    }
    public function destroy(Specialty $specialty)
    {
        $deletedSpecialty = $specialty->name;

        $specialty->delete();
        $notification = 'La especialidad '. $deletedSpecialty .'se ha eliminado correctamente.';
        return redirect('/specialties')->with(compact('notification'));
    }
}


