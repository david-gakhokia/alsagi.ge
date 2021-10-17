@extends('backend.layouts.app')


@section('content')

    <div class="breadcrumb">
        <h1>შეთავაზებები | </h1>
        <ul>
            <li>
                <a class="btn btn-secondary text-white btn-rounded mt-1" href="{{ route('offers.index') }}">დათვალიერება <i class="far fa-eye"></i></a>
            </li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-12">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ლინკი:</strong>
                                <a href="https://{{ $offer->text }}" target="_blank" >{{ $offer->text }}</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ტექსტი:</strong>
                                {!! $offer->link !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
