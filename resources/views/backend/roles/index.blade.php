@extends('backend.layouts.app')


@section('content')


    <div class="breadcrumb">
        <h1>პრივილეგიები |</h1>
        <ul>
            <li><a class="btn btn-success" href="{{ route('roles.create') }}">დამატება  <i class="far fa-plus"></i></a></li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">როლების ცხრილი</h4>
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">პრივილეგია</th>
                                <th scope="col" width="280px" >მოქმედება</th>
                            </tr>
                        </thead>
                            @foreach ($roles as $key => $role)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}"><i class="far fa-eye"></i></a>
                                        @can('offer-edit')
                                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}"><i class="nav-icon i-Pen-2"></i></a>
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


{!! $roles->render() !!}

@endsection
