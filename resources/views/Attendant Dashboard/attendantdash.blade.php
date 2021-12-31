@extends('layouts.attandantmaster')
@section('contentattendant')

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
                                    <th>Disease</th>
                                    <th>Patient Id</th>
                                    <th>Doctor Id</th>
                                    <th>Department Id</th>
                                    <th>Prescription Id</th>
                                    <th>Weeks</th>
                                    <th>From Date</th>
                                    <th>Till Date</th>
                                    <th>Medicine Dosage</th>
                                    <th>Patient Category</th>
                                    <th>Description</th>
                                    <th>Medicines</th>
                                    <th>Attendant Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($dose_schedule))
                                @foreach($dose_schedule as $list)
                                <tr>
                                    <td>{{ $list->pres_disease}}</td>
                                    <td>{{ $list->patient_id}}</td>
                                    <td>{{ $list->doctor_id}}</td>
                                    <td>{{ $list->department_id}}</td>
                                    <td>{{ $list->prescription_id}}</td>
                                    <td>{{ $list->weeks}}</td>
                                    <td>{{ $list->from_date}}</td>
                                    <td>{{ $list->till_date}}</td>
                                    <td>{{ $list->dosage}}</td>
                                    <td>{{ $list->patient_cat}}</td>
                                    <td>{{ $list->description}}</td>
                                    <td>{{ $list->medicines}}</td>
                                    <td>{{ $list->attendant_name}}</td>
                                    <td> 
                                    {!! Form::open(array('url' => route('attendantdashstore',$list->id), 'method' => 'post')) !!}
                                        {!! Form::submit('done', array('class' => 'btn btn-primary openbutton')) !!}
                                    {!! Form::close() !!}
                                    </td>
                                    
                                </tr>
                                @endforeach
                           
                            @else
                            <tr>
                                <td colspan="14">No Data found!!</td>
                            </tr>
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
