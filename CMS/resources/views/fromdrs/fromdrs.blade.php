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
                    <div class="panel-heading">fromdrs
                        <a href="fromdrs/create"> <span class="glyphicon glyphicon-plus pull-right"></span></a>
                    </div>
                    <div class="panel-body">
                    </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>name</th>
                                <th>has_cache</th>
                                <th>withdrawn</th>
                                <th>net_cache</th>
                                <th>Created By</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fromdrs as $fromdr)
                            <tr>
                                <td>{{$fromdr->name}}</td>
                                <td>{{$fromdr->has_cache}}</td>
                                <td>{{$fromdr->withdrawn}}</td>
                                <td>{{$fromdr->net_cache=$fromdr->has_cache-$fromdr->withdrawn}}</td>
                                <td>{{$fromdr->user->name}}</td>
                                <td>
                                    {!!Form::open(['method'=>'DElETE','route'=>['fromdrs.destroy',$fromdr->id]]) !!}
                                    {!! Form::submit('DELETE',['class'=>'btn btn-danger']) !!}
                                    {!!Form::close() !!}

                                </td>
                                <td>
                                    {{--<a href="fromdrs/{{$fromdr->id}}/edit"> <span class="glyphicon glyphicon-edit"></span></gylp></a>--}}
                                    <a href="fromdrs/{{$fromdr->id}}/edit">{!! Form::submit('EDIT',['class'=>'btn btn-primary']) !!}</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagibation dol-lg-12">
                            {!! $fromdrs->render() !!}
                        </div>
                        {{"Total No of Doctors    =".$fromdrs->total()}}
                        {{"Sum Of Total Cache   =".$fromdrs->sum('has_cache')}}
                </div>
            </div>
        </div>
    </div>
@endsection
