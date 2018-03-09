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
                                <th>Has Cache</th>
                                <th>Withdraw</th>
                                <th>Net Cache</th>
                                <th>user Id</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fromdrs as $fromdr)
                            <tr>
                                <td>{{$fromdr->name}}</td>
                                <td>{{$fromdr->has_cache}}</td>
                                <td>{{$fromdr->withdrawn}}</td>
                                <td>{{$fromdr->net_cache}}</td>
                                <td>{{$fromdr->user->name}}</td>
                                {{--<td>{{$fromdr->patient->name}}</td>--}}
                                {{--<td>{{$fromdr->user->i1d}}</td>--}}
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
                </div>
            </div>
        </div>
    </div>
@endsection
