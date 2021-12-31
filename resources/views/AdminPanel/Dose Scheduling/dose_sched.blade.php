@extends('layouts.master')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dose Scheduling</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Dose Scheduling</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Dose Id</th>
                                    <th>Prescription Id</th>
                                    <th>Patient Id</th>
                                    <th>Doctor Id</th>
                                    <th>Department Id</th>
                                    <th>Attendant Name</th>
                                    <th>Disease</th>
                                    <th>Medicine</th>
                                    <th>Weeks</th>
                                    <th>From Date</th>
                                    <th>Till Date</th>
                                    <th>Medicine Dosage</th>
                                    <th>Patient Category</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($dose_schedule))
                                @foreach($dose_schedule as $list)
                                <tr>
                                    <td>{{ $list->id}}</td>
                                    <td>{{ $list->prescription_id}}</td>
                                    <td>{{ $list->patient_id}}</td>
                                    <td>{{ $list->doctor_id}}</td>
                                    <td>{{ $list->department_id}}</td>
                                    <td>{{ $list->attendant_name}}</td>
                                    <td>{{ $list->pres_disease}}</td>
                                    <td>{{ $list->medicines}}</td>
                                    <td>{{ $list->weeks}}</td>
                                    <td>{{ $list->from_date}}</td>
                                    <td>{{ $list->till_date}}</td>
                                    <td>{{ $list->medicines}}</td>
                                    <td>{{ $list->patient_cat}}</td>
                                    <td>{{ $list->description}}</td>
                                    <td> {!! Form::open(array('url' => route('doseschedule.destroy', ['doseschedule' => $list->id]), 'method' => 'delete')) !!}		
                                                        {!! Form::submit('Delete', array('class' => 'btn btn-danger w-100')) !!}
                                            
                                                    {!! Form::close() !!}
                                                    </td>
                                    
                                </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection()
