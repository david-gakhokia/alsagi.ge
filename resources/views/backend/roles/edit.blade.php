@extends('backend.layouts.app')


@section('content')


<div class="breadcrumb">
    <h1>პრივილეგიების რედაქტირება |</h1>
    <ul>
        <li>
            <a class="btn btn-secondary text-white btn-rounded mt-1" href="{{ route('roles.index') }}">დათვალიერება <i class="far fa-eye"></i></a>
        </li>

    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>


    <div class="row mb-12">
        <div class="col-md-6 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>სახელი:</strong>
                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>პრივილეგიები:</strong>
                                <br/>
                                @foreach($permission as $value)
                                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                    {{ $value->title }}</label>
                                <br/>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-success">განახლება</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


@endsection
