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
                                        aria-hidden="true"></i>Product Name</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <form action="{{ url('admin/product/insert') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Enter a name">
                                                </div>
                                                <div class="mt-3">
                                                    @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="amount" class="form-control"
                                                        placeholder="Enter an amount">
                                                </div>
                                                <div class="mt-3">
                                                    @error('amount')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="price" class="form-control"
                                                        placeholder="Enter a price">
                                                </div>
                                                <div class="mt-3">
                                                    @error('price')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="description" class="form-control"
                                                        placeholder="Enter a description">
                                                </div>
                                                <div class="mt-3">
                                                    @error('description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <select name="category_id" class="form-control mb-2"
                                                        id="exampleFormControlSelect1">
                                                        <option selected value="">Choose Category</option>

                                                        @foreach ($category as $cat)
                                                        <option value="{{ $cat->category_id }}">{{ $cat->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="mt-3">
                                                        @error('category_id')
                                                        <div class="alert alert-danger mt-3">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                                <div class="mt-3">
                                                    @error('image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center custom-pro-edt-ds">
                                                <input type="submit" value="Save"
                                                    class="btn btn-ctl-bt waves-effect waves-light m-r-10">
                                                <a href="{{ url('admin/product/index') }}"><button type="button"
                                                        class="btn btn-ctl-bt waves-effect waves-light">Discard
                                                    </button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection