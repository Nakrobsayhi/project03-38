@extends('layouts.master_backend')
@section('con')

<br>
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <ul id="myTab3" class="tab-review-design">
                        <li class="active"><a href="#"><i class="icon nalika-forms icon-wrap"
                                    aria-hidden="true"></i>Product</a></li>
                    </ul>
                    <div class="add-product">
                        <a href="{{ route('make.pro') }}">Add Product</a>
                    </div>
                    <table>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($p as $product)

                        <tr>
                            <td>{{ $p->firstItem() + $loop->index }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->amount }} รายการ</td>
                            <td>{{ $product->cat->name}} </td>
                            <td><img src="{{ asset('backend/product/resize/'.$product->image) }}" alt=""></td>
                            <td>{{ $product->price }} บาท</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->updated_at }}</td>

                            <td>
                                <a href="{{ url('admin/product/edit/'.$product->product_id) }}"><button
                                        data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i
                                            class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                <a href="{{ url('admin/product/delete/'.$product->product_id) }}"><button
                                        data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i
                                            class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                            </td>
                        </tr>

                        @endforeach

                    </table>
                    <div class="mt-3">
                        {{ $p->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection