
@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add new static item</li>
        </ol>

        <!-- Page Content -->
        @include('includes.form_error')
        <a href="{{route('sys_statics.index')}}" class="color:white;"><button class="btn btn-primary">Return to static list</button></a>

        {!! Form::open(['method'=>'POST','onsubmit'=>"return Validate(this);", 'action'=> 'SysStaticController@store','files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('control_name','Static Name:') !!}
                    {!! Form::text('control_name',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('value_en','Value EN:') !!}
                    {!! Form::text('value_en',null,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('value_kh','Value KH:') !!}
                    {!! Form::text('value_kh',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('photo_id','Photo:') !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                </div>

                <div class="alert alert-danger" role="alert" style="display: none" id="validfile">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Warning</strong> You can upload file extension ".jpg", ".jpeg", ".bmp", ".gif", ".png" only!!!
                </div>
                <div class="alert alert-danger" role="alert" style="display: none" id="SizeFile">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Warning</strong> You can not upload file size more than 3MB!!!
                </div>

                <div class="form-group">
                    {!! Form::submit('Create',['class'=>'btn btn-primary']) !!}
                </div>


        {!! Form::close() !!}

    </div>
    <!-- /.container-fluid -->
@stop
