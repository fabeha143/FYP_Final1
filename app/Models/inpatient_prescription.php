<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inpatient_prescription extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['pres_disease','weeks','from_date' , 'till_date','dosage','medicines','description', 'patient_cat','patient_id','doctor_id','department_id'];
    public function medicines()
    {
        return $this->belongsTo(medicines::class, 'medicines', 'id');
    }
}
