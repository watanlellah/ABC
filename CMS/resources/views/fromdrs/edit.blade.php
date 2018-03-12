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
            <div class="col-lg-12">
           <div class="panel panel-default">
                <div class="panel-heading">Edit fromdrs {{$fromdrs->name}}</div>
                    <Hdiv class="panel-body">
                        <div class="col-lg-8">
                    {!! Form::model($fromdrs, array('method'=>'PATCH','action' => ['FromDrsController@update',$fromdrs->id], 'enctype' => 'multipart/form-data','file'=>'true' ))!!}
                            <div class="form-group col-lg-4">
                                {!! Form::text('name',null, array('namr','class'=>'form-control','placeholder'=>'إسم الطبيب')) !!}
                            </div>
                            <div class="form-group col-lg-4">
                                {!! Form::number('has_cache',null, array('required','class'=>'form-control','placeholder'=>'مبلغ مستحق')) !!}
                            </div>
                            <div class="form-group col-lg-4">
                                {!! Form::number('withdrawn',null, array('required','step'=>'any','class'=>'form-control','placeholder'=>'قام بسحب')) !!}
                            </div>
                            <div class="form-group col-lg-4">
                                {!! Form::label ('net_cache',null,array('required','class'=>'form-control'
                                )) !!}
                            </div>
                            <div class="form-group col-lg-4">

                                {!! Form::label('user_id',
                                'Updated By user( '. $users .' )'
                                , array( 'class'=>'form-control','placeholder'=>'Created By')) !!}
                            </div>
                    <div class="form-group col-lg-4">
                        {!! Form::submit('Edit',array('required','class'=>'btn btn-primary')) !!}
                        </div>
                      {!! Form::close() !!}
                        </div>
                    </Hdiv>
              </div>
            </div>
        </div>
    </div>
@endsection
