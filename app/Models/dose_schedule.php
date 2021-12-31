<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dose_schedule extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['pres_disease','weeks','from_date' , 'till_date','dosage','medicines','description', 'patient_cat','patient_id','doctor_id','department_id','attendant_name','prescription_id']; 
}
