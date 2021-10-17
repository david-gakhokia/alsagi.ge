@extends('backend.layouts.app')

@section('title', ' სლაიდის დამატება ')

@section('content')


    <div class="breadcrumb">
        <h1>სლაიდერი | </h1>
        <ul>
            <li>
                <a class="btn btn-secondary text-white btn-rounded mt-1" href="{{ route('sliders.index') }}">დათვალიერება <i class="far fa-eye"></i></a>
            </li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>



    <div class="row mb-12">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="row">

                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <div class="form-group">
                                    <strong>სახელი:</strong>
                                    <input type="text" name="title" class="form-control" placeholder="სახელი">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-2 col-md-2">
                                <div class="form-group">
                                    <strong>სტატუსი:</strong>
                                    {{-- <label for="status">სტსტუსი</label> --}}
                                    <select name="status"  id="status" class="form-control selectpicker" required="">
                                        <option value="1">აქტიური</option>
                                        <option value="0">არაქტიური</option>
                                    </select>
                                </div>
                                <div class="valid-tooltip">

                                </div>
                            </div>



                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label for="basic-url">ლინკი:</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon3">https://</span></div>
                                    <input class="form-control" id="basic-url" name="link" type="text" aria-describedby="basic-addon3" />
                                </div>
                            </div>

                            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>ლინკი:</strong>
                                    <input type="text" name="link" class="form-control" placeholder="ლინკი">
                                </div>
                            </div>    --}}

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>აღწერა:</strong>
                                    <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
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
                                    <button type="submit" class="btn btn-primary">დამატება</button>
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