@extends('backend.layouts.app')


@section('content')


    <div class="breadcrumb">
        <h1>მომხმარებლები | </h1>
        <ul>
            <li>
                <a class="btn btn-success" href="{{ route('users.create') }}">დამატება  <i class="far fa-plus"></i></a>
            </li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>


    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">მომხმარებლების ცხრილი</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">სახელი</th>
                                    <th scope="col">ელ.ფოსტა</th>
                                    <th scope="col">როლი</th>
                                    <th scope="col">მოქმედება</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $user)
                                <tr>
                                    <th scope="row">{{ ++$i }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $v)
                                            <span class="badge badge-success">{{ $v }}</span>
                                        @endforeach
                                        @endif
                                    </td>

                                    <td>
                                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">
                                                <i class="nav-icon i-Pen-2"></i>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="nav-icon i-Close-Window"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {!! $data->render() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
