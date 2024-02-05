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
                                        aria-hidden="true"></i>Category Name</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <form method="POST" action="{{ url('admin/category/insert') }}">
                                @csrf
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-user"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="กรอกประเภทสินค้า">
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
                                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center custom-pro-edt-ds">
                                                <input type="submit" value="Save"
                                                    class="btn btn-ctl-bt waves-effect waves-light m-r-10">
                                                <a href="{{ url('admin/category/index') }}"><button type="button"
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