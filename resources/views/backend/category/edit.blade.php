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
                                        aria-hidden="true"></i> Edit Category</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <form action="{{ url('admin/category/update/'.$cat->category_id) }}" method="POST">
                                @csrf
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" value="{{ $cat->name }}" class="form-control"
                                                        placeholder="write here" name="name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center custom-pro-edt-ds">
                                                <input type="submit" value="Save"
                                                    class="btn btn-ctl-bt waves-effect waves-light m-r-10">
                                                <a href="{{ url('admin/category/index') }}"><button type="button"
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