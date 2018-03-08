@extends('layouts.app')
@if (count($errors) > 0)

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>
@endif
@section('content')
    <div class="container">
        <div class="row">
                    <div class="panel panel-default">
                    <div class="panel-heading">Patients
                        <a href="patients/create"> <span class="glyphicon glyphicon-plus pull-right"></span></a>
                    </div>
                    <div class="panel-body">
                    </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>name</th>
                                <th>national_id</th>
                                <th>address</th>
                                <th>birth_date</th>
                                <th>mobile_no</th>
                                <th>dr_in</th>
                                <th>diagnose</th>
                                <th>report</th>
                                <th>image</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($patients as $patient)
                            <tr>
                                <td>{{$patient->name}}</td>
                                <td>{{$patient->national_id}}</td>
                                <td>{{$patient->address}}</td>
                                <td>{{$patient->birth_date}}</td>
                                <td>{{$patient->mobile_no}}</td>
                                <td>{{$patient->dr_in}}</td>
                                <td>{{$patient->diagnose}}</td>
                                <td>{{$patient->report}}</td>
                                <td> <img class= "img-responsive patientsThumb" src="{{$patient->image}}"></td>
                                {{--<td>{{$patient->user_patient->id}}</td>--}}
                                {{--<td>{{$patient->user->i1d}}</td>--}}
                                <td>
                                    {!!Form::open(['method'=>'DElETE','route'=>['patients.destroy',$patient->id]]) !!}
                                    {!! Form::submit('DELETE',['class'=>'btn btn-danger']) !!}
                                    {!!Form::close() !!}

                                </td>
                                <td>
                                    {{--<a href="patients/{{$patient->id}}/edit"> <span class="glyphicon glyphicon-edit"></span></gylp></a>--}}
                                    <a href="patients/{{$patient->id}}/edit">{!! Form::submit('EDIT',['class'=>'btn btn-primary']) !!}</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagibation dol-lg-12">
                            {!! $patients->render() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
