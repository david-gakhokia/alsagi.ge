@extends('backend.layouts.app')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> სლაიდერის დეტალები </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sliders.index') }}"> უკან </a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ლინკი:</strong>
                {{ $slider->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>დეტალები:</strong>
                {!! $slider->detail !!}
            </div>
        </div>
    </div>
@endsection
