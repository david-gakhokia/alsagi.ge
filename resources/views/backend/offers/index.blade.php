@extends('backend.layouts.app')


@section('content')

    <div class="breadcrumb">
        <h1>შეთავაზებები | </h1>
        <ul>
            <li>
                <a class="btn btn-success" href="{{ route('offers.create') }}">დამატება  <i class="far fa-plus"></i></a>
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
                                    <th scope="col">სახელი</th>
                                    <th scope="col">ლინკი</th>
                                    <th scope="col" width="280px" >მოქმედება</th>
                                </tr>
                            </thead>
                            @foreach ($offers as $offer)
                            <tr>
                                <td>{{ $offer->id }}</td>
                                <td><img src="{{ URL::to(''.$offer->url) }}" width="20%" alt="img"></td>
                                <td><a href="https://{{ $offer->text }}" target="_blank" >{{ $offer->text }}</a></td>
                                <td>{!! $offer->link !!}</td>
                                <td>
                                    <form action="{{ route('offers.destroy',$offer->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('offers.show',$offer->id) }}"><i class="far fa-eye"></i></a>
                                        @can('offer-edit')
                                        <a class="btn btn-primary" href="{{ route('offers.edit',$offer->id) }}"><i class="nav-icon i-Pen-2"></i></a>
                                        @endcan


                                        @csrf
                                        @method('DELETE')
                                        @can('offer-delete')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-times-circle"></i></button>
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


    {!! $offers->links() !!}

@endsection
