@extends('backend.layouts.app')


@section('content')


    <div class="breadcrumb">
        <h1>პრივილეგიები | </h1>
        <ul>
            <li><a href="{{ route('roles.index') }}" >დათვალიერება</a></li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>



<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>პრივილეგიის სახელი:</strong>
            {{ $role->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>პრივილეგიების ჩამონათვალი:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
