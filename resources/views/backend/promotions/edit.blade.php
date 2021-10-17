@extends('backend.layouts.app')


@section('content')
    <div class="breadcrumb">
        <h1>შეთავაზება | </h1>
        <ul>
            <li>
                <a class="btn btn-secondary text-white btn-rounded mt-1" href="{{ route('promotions.index') }}">დათვალიერება <i class="far fa-eye"></i></a>
            </li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-12">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <form action="{{ route('promotions.update',$promotion->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>ლინკი:</strong>
                                        <input type="text" value="{{ $promotion->text }}" name="text" class="form-control" placeholder="ტექსტი">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>დასრულების დრო:</strong>
                                        <input type="date" value="{{ $promotion->end_date }}" name="end_date" class="form-control" placeholder="დრო">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>ტექსტი:</strong>
                                        <textarea class="form-control" id="summary-ckeditor" name="link">
                                            {{ $promotion->link }}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="custom-file">
                                        <input class="custom-file-input" id="image" name="image" type="file">
                                        <label class="custom-file-label" for="image" aria-describedby="">ფაილის არჩევა
                                        </label>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn-success">განახლება</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection
