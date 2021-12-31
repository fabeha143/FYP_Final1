<?php

namespace App\Http\Controllers;
use App\Models\patient;
use App\Models\medicines;
use App\Models\inpatient_prescription;
use Illuminate\Http\Request;

class InPatientController extends Controller
{
    public function index($id)
    {
        $docid = patient::select('doctor')->where('id',$id)->get();
        $departid = patient::select('department')->where('id',$id)->get();
        
        
        
        $patients  = patient::where('id' , $id)->first();
        $items = medicines::select('id','med_name')->get();
        $medicine = array();
        foreach( $items as $item )
        {
            $medicine[$item->id] = $item->med_name;
        }
       
        return view('DoctorDashboard/write_prescription_inpatient',['patients' => $patients],compact('medicine','docid','departid'));
       
    }
    public function store(Request $request,$id=null)
    {

        inpatient_prescription::create([
            'pres_disease' => $request->pres_disease,
            'medicines' => $request->medicines,
            'weeks' => $request->weeks,
            'from_date' => $request->from_date,
            'till_date' => $request->till_date,
            'dosage' => $request->dosage,
            'patient_cat' => $request->patient_cat,
            'description' => $request->description,
            'patient_id' => $request->id,
            'doctor_id' => $request->doctor_id,
            'department_id' => $request->department_id,
        ]);
        
        redirect()->back();

       
       
    }
}
