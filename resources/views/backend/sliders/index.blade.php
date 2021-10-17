@extends('backend.layouts.app')


@section('content')

    <div class="breadcrumb">
        <h1>სლაიდერი | </h1>
        <ul>
            <li>
                <a class="btn btn-success" href="{{ route('sliders.create') }}">დამატება  <i class="far fa-plus"></i></a>
            </li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <!-- end of col-->
    <div class="row mb-12">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">სლაიდების ცხრილი</h4>
                    <div class="table-responsive">
                        <table class="display table table-striped table-bordered" id="multicolumn_ordering_table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>სახელი</th>
                                    <th>ლინკი</th>
                                    <th>აღწერა</th>
                                    <th>ფოტო</th>
                                    <th>მოქმედება</th>
                                </tr>
                            </thead>
                            @foreach ($sliders as $slider)
                            <tbody>
                                <tr>
                                    <td>{{ $slider->id }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td><a href="https://{{ $slider->link }}" target="_blank" >{{ $slider->link }}</a>  </td>
                                    <td>{!! $slider->description !!}</td>
                                    <td><img src="{{ URL::to(''.$slider->image) }}" width="250px" alt="img"></td>
                                    <td>
                                        <form action="{{ route('sliders.destroy',$slider->id) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('sliders.show',$slider->id) }}">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a class="btn btn-primary" href="{{ route('sliders.edit',$slider->id) }}">
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

                            <tfoot>
                                <tr>
                                    <th>#ID</th>
                                    <th>ლინკი</th>
                                    <th>აღწერა</th>
                                    <th>ფოტო</th>
                                    <th>მოქმედება</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of col-->

@endsection
