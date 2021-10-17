@extends('layouts.app')

@section('title', ' განახლება ')

@section('content')

                <div class="breadcrumb">
                    <h1>კატეგორიის რედაქტირება | </h1>
                    <ul>
                        <li>
                            <a class="btn btn-secondary text-white btn-rounded mt-1" href="{{ route('categories.index') }}">დათვალიერება <i class="far fa-eye"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="needs-validation" novalidate="novalidate" action="{{ route('categories.update',$Category->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="name">დასახელება</label>
                                            <input class="form-control" name="name" value="{{ $Category->name }}" type="text" placeholder="დასახელება" required="required" />
                                            <div class="valid-tooltip">

                                            </div>
                                        </div>

                                    </div>


                                    <button class="btn btn-success" type="submit">განახლება</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
