@extends('layouts.master_backend')
@section('con')

<br>
<br>
<div class="single-product-tab-area mg-b-30">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#description"><i class="icon nalika-edit"
                                        aria-hidden="true"></i> Edit Product</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <form action="{{ url('admin/product/update/'.$pro->product_id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-user"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Name" value="{{ $pro->name }}">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-user"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="price" class="form-control"
                                                        placeholder="Price" value="{{ $pro->price }}">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-user"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="description" class="form-control"
                                                        placeholder="Description" value="{{ $pro->description }}">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <select name="category_id" class="form-select"
                                                        id="exampleFormControlSelect1"
                                                        aria-label="Default select example">
                                                        <option selected>{{ $pro->category_id }}</option>
                                                        <option value="1">โทรศัพท์มือถือ</option>
                                                        <option value="2">โน๊ตบุ๊ค</option>
                                                        <option value="3">คอมพิวเตอร์ตั้งโต๊ะ</option>
                                                    </select>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-user"
                                                            aria-hidden="true"></i></span>
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                                <div class="mt-4">
                                                    <img src="{{ asset('backend/product/resize/'.$pro->image) }}" alt=""
                                                        width="30%">
                                                </div>
                                                <div class="mt-3">
                                                    @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center custom-pro-edt-ds">
                                                <input type="submit" value="Update"
                                                    class="btn btn-ctl-bt waves-effect waves-light m-r-10">
                                                <a href="{{ url('admin/product/index') }}"><button type="button"
                                                        class="btn btn-ctl-bt waves-effect waves-light">Discard
                                                    </button></a>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection