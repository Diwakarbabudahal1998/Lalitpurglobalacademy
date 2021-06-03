<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admission;

class AdmissionController extends Controller
{
    public function index(){
        $admission=Admission::all();
        return view('backend.admission.index',compact('admission'));

    }
    public function show($id){
        $admission=Admission::find($id);
        return view('backend.admission.show',compact('admission'));

    }

}
