@extends('backend.layouts.app')

@section('title', ' განახლება ')

@section('content')

                <div class="breadcrumb">
                    <h1>მომხმარებლები | </h1>
                    <ul>
                        <li>
                            <a class="btn btn-secondary text-white btn-rounded mt-1" href="{{ route('products.index') }}">დათვალიერება <i class="far fa-eye"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="needs-validation" novalidate="novalidate" action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="name">დასახელება</label>
                                            <input class="form-control" name="name" value="{{ $product->name }}" type="text" placeholder="დასახელება" required="required" />
                                            <div class="valid-tooltip">

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">

                                            <label for="category">კატეგორია</label>
                                            <select id="category_id" class="form-control selectpicker" name="category_id" data-live-search="true" >

                                                {{-- <option  value="" selected disabled >{{$product->category->name}}</option> --}}

                                                @foreach($categories as $item)
                                                    <option  value="{{$item->id}}" {{ $item->id == $product->category_id ? 'selected' : '' }} > {{$item->name}}</option>
                                                @endforeach
                                            </select>

                                            <div class="valid-tooltip">

                                            </div>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="category">სტსტუსი</label>
                                            <select name="status"  id="status" class="form-control selectpicker" required="">
                                                {{-- <option selected disabled>{{$product->status}}</option> --}}
                                                <option value="1">აქტიური</option>
                                                <option value="0">არაქტიური</option>

                                            </select>
                                            <div class="valid-tooltip">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label for="sku">კოდი</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="sku">#</span>
                                                </div>
                                                    <input class="form-control"  type="text" name="sku" value="{{ $product->sku }}"
                                                     placeholder="კოდი" aria-describedby="sku" required="required" />
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="qty">ბრენდი</label>
                                            <input class="form-control" name="brand" type="text"  value="{{ $product->brand }}" placeholder="ბრენდი" required="required" />
                                            <div class="invalid-tooltip">

                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="qty">რაოდენობა</label>
                                            <input class="form-control"  name="qty" type="number"  value="{{ $product->qty }}" placeholder="რაოდენობა" required="required" />
                                            <div class="invalid-tooltip">

                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="price">ფასი</label>
                                            <div class="input-group">

                                                <input class="form-control"  type="number" name="price"  value="{{$product->price }}"  placeholder="ფასი" aria-describedby="price" required="required" />
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="price">₾</span>
                                                </div>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">აღწერა</span>
                                                </div>
                                                <textarea class="form-control"  name="detail"  aria-label="With textarea">{!! $product->description !!}
                                                </textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input class="custom-file-input" id="image" name="image" type="file">
                                            <label class="custom-file-label" for="image" aria-describedby="">ფაილის არჩევა
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-success" type="submit">განახლება</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
