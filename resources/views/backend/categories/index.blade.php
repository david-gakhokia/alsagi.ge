@extends('backend.layouts.app')

@section('title', ' პროდუქცია ')

@section('content')

                <div class="breadcrumb">
                    <h1>კატეგორიები | </h1>
                    <ul>
                        <li>
                            <a class="btn btn-success" href="{{ route('categories.create') }}">დამატება  <i class="far fa-plus"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>

                                <!-- end of row-->
                <div class="row mb-12">
                    <div class="col-md-8 mb-3">
                        <div class="card text-left">
                            <div class="card-body">

                                <ul class="list-group">
                                    @foreach ($categories as $key => $category)
                                        <li class="list-group-item" style="background-color:#cae9d9a1">
                                        <div class="d-flex justify-content-between" >
                                            {{ $category->position }} | {{ $category->name }} | <img src="{{ URL::to(''.$category->image) }}" width="20%" alt="img">
                                            @auth
                                            <div class="button-group ">
                                                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                                    <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">
                                                        <i class="nav-icon i-Pen-2"></i></i>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="nav-icon i-Close-Window"></i></button>
                                                </form>
                                            </div>
                                            @endauth
                                        </div>

                                        @if ($category->children)
                                            <ul class="list-group mt-2">
                                            @foreach ($category->children  as $childKey => $child)
                                                <li class="list-group-item">
                                                <div class="d-flex justify-content-between">
                                                    {{ $child->name }}
                                                    <img src="{{ asset($child->image) }}" alt="" height="70px">

                                                    @auth
                                                    <div class="button-group">

                                                    <a href="{{ url('admin/category/edit/'.$child->id) }}">
                                                        <button type="button" class="btn btn-sm btn-primary mr-1 edit-category"><i class="far fa-edit"></i>
                                                        </button>
                                                    </a>
                                                        <a href="{{ url('admin/category/destroy/'.$child->id) }}"  onclick="return confirm('ნამდვილად წავშალო?')"  class="btn btn-sm btn-danger">
                                                            <i class="fas fa-times"></i> წაშლა
                                                        </a>
                                                    </div>
                                                    @endauth
                                                </div>
                                                </li>

                                            @endforeach
                                            </ul>
                                        @endif
                                        </li>

                                    @endforeach
                                    </ul>

                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
                </div>

@endsection
