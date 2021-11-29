<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriaController extends Controller
{
    public function index()
    {
        $galeria = Galeria::all();
        return view('galeria.index', compact('galeria'));
        return view('inicio.index', compact('galeria'));
    }

    public function create()
    {
        return view('galeria.create');
    }

    public function store(Request $request)
    {
        $galeria = new Galeria;
        $galeria->autor = $request->input('autor');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/galeria/', $filename);
            $galeria->image = $filename;
        }
        $galeria->save();
        return redirect()->back()->with('status','Student Image Added Successfully');
    }

    public function edit($id)
    {
        $galeria = Galeria::find($id);
        return view('galeria.edit', compact('galeria'));
    }

    public function update(Request $request, $id)
    {
        $galeria = Galeria::find($id);
        $galeria->autor = $request->input('autor');

        if($request->hasfile('image'))
        {
            $destination = 'uploads/galeria/'.$galeria->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/galeria/', $filename);
            $galeria->image = $filename;
        }

        $galeria->update();
        return redirect()->back()->with('status','Student Image Updated Successfully');
    }

    public function destroy($id)
    {
        $galeria = Galeria::find($id);
        $destination = 'uploads/students/'.$galeria->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $galeria->delete();
        return redirect()->back()->with('status','Student Image Deleted Successfully');
    }
}
