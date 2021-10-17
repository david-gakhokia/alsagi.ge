@extends('backend.layouts.app')

@section('title', ' დამატება ')

@section('content')

    <div class="breadcrumb">
        <h1>კატეგორიის დამატება |</h1>
        <ul>
            <li>
                <a class="btn btn-secondary text-white btn-rounded mt-1" href="{{ route('categories.index') }}">დათვალიერება <i class="far fa-eye"></i></a>
            </li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">პროდუქტის დამატება</div>
                                <form class="needs-validation" novalidate="novalidate"   method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="name">დასახელება</label>
                                            <input class="form-control" name="name" type="text" placeholder="დასახელება" required="required" />
                                            <div class="valid-tooltip">

                                            </div>
                                        </div>



                                        <div class="col-md-6 mb-3">
                                            <label for="parent_id">შეარჩიე კატეგორია</label>
                                            <select class="form-control" name="parent_id">
                                                <option value="">შეარჩიე კატეგორია</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="col-md-4 mb-3">
                                            <label for="position">პოზიცია</label>
                                            <input class="form-control" name="position" type="number" placeholder="position" required="required" />
                                            <div class="valid-tooltip">

                                            </div>
                                        </div>
                                        <div class="col-md-8 mb-3">
                                            <label for="position">დასახელება</label>
                                            <div class="custom-file">
                                                <input class="custom-file-input" id="image" name="image" type="file">
                                                <label class="custom-file-label" for="image" aria-describedby="">ფაილის არჩევა
                                                </label>
                                            </div>
                                        </div>
                                    </div>




                                    <button class="btn btn-primary" type="submit">დამატება</button>
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
