@extends('backend.layouts.app')


@section('content')

    <div class="breadcrumb">
        <h1>შეთავაზებები | </h1>
        <ul>
            <li>
                <a class="btn btn-success" href="{{ route('promotions.create') }}">დამატება  <i class="far fa-plus"></i></a>
            </li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>



    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">შეთავაზებების ცხრილი</h4>
                    <div class="table-responsive">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ფოტო</th>
                                    <th scope="col">ლინკი</th>
                                    <th scope="col">სახელი</th>
                                    <th scope="col">დასრულების დრო</th>
                                    <th scope="col" width="280px" >მოქმედება</th>
                                </tr>
                            </thead>
                            @foreach ($promotions as $promotion)
                            <tr>
                                <td>{{ $promotion->id }}</td>
                                <td><img src="{{ URL::to(''.$promotion->url) }}" width="20%" alt="img"></td>
                                <td>{{ $promotion->text }}</td>
                                <td>{{ $promotion->end_date }}</td>
                                <td>{!! $promotion->link !!}</td>
                                <td>
                                    <form action="{{ route('promotions.destroy',$promotion->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('promotions.show',$promotion->id) }}"><i class="far fa-eye"></i></a>
                                        @can('promotion-edit')
                                        <a class="btn btn-primary" href="{{ route('promotions.edit',$promotion->id) }}"><i class="nav-icon i-Pen-2"></i></a>
                                        @endcan


                                        @csrf
                                        @method('DELETE')
                                        @can('promotion-delete')
                                        <button type="submit" class="btn btn-danger"  onclick="return confirm('ნამდვილად წაიშალოს?')" ><i class="fas fa-times-circle"></i></button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {!! $promotions->links() !!}

@endsection
