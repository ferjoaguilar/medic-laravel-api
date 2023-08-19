<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    
    public function index(){
        $patients = Patient::all();
        return $patients;
    }

    //$request = {"name":"Jairo","age":123}
    public function store(Request $request){
        //Laravel 8 o menor
       /* 
        $patient = new Patient();
        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->num_afi = $request->num_afi;
        $patient->address = $request->adress;

        $patient->save(); */

        //Eloquent
        
        $patient = Patient::create($request->all());
        return response()->json($patient,201);
    }

    public function update(Request $request,string $id){
        //Laravel 8 o menor
       /* 
        $patient = Patient::findOrFail($id);
        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->num_afi = $request->num_afi;
        $patient->address = $request->adress;

        $patient->save(); */

        $patient = Patient::findOrFail($id);
        $patient->update($request->all());
        return response()->json($patient,200);
    }
}
