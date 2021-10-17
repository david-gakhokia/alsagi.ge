@extends('backend.layouts.app')

@section('title', ' პროდუქცია ')

@section('content')

                <div class="breadcrumb">
                    <h1>პროდუქცია | </h1>
                    <ul>
                        <li>
                            <a class="btn btn-success" href="{{ route('products.create') }}">დამატება  <i class="far fa-plus"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>

                <div class="row mb-12">
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">პროდუქციის ცხრილი</h4>
                                <div class="table-responsive">
                                    <table class="display table table-striped table-bordered" id="multicolumn_ordering_table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#id</th>
                                                <th>ფოტო</th>
                                                <th>დასახელება</th>
                                                <th>კოდი</th>
                                                <th>კატეგორია</th>
                                                <th>ფასი</th>
                                                <th>ბრენდი</th>
                                                <th>რაოდენობა</th>
                                                <th>მოქმედება</th>
                                            </tr>
                                        </thead>
                                        @foreach ($products as $index => $product)
                                        <tbody>
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td><img src="{{ URL::to(''.$product->image) }}" width="100px" alt="img"></td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->sku }}</td>
                                                <td>{{ $product->category ? $product->category->name : 'Uncategorized' }}</td>
                                                <td>{{ $product->price }} ₾</td>
                                                <td> {{ $product->brand }}</td>
                                                <td> {{ $product->qty }}</td>
                                                <td>
                                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">
                                                            <i class="nav-icon i-Pen-2"></i></i>
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="nav-icon i-Close-Window"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
