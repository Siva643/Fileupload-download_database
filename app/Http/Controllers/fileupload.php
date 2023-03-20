<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;

use App\Models\product;

class fileupload extends Controller
{
    public function form()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $data=new product();
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);
        $data->file=$filename;
        $data->name=$request->name;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();   
    }
    public function show()
    {
        $data=product::all();
        return view('show',compact('data'));
    }
    public function download(Request $request,$file)
    {
        return response()->download(public_path('assets/'.$file));
    }
    public function view($id)
    {
        $data=product::find($id);
        return view('view',compact('data'));
    }
}
