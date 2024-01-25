@extends('layouts.master_backend')
@section('con')

<br>
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Product</h4>
                    <div class="add-product">
                        <a href="{{ route('make.pro') }}">Add Product</a>
                    </div>
                    <table>
                        <tr>
                            <th>product_id</th>
                            <th>name</th>
                            <th>image</th>
                            <th>price</th>
                            <th>description</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                        </tr>

                        @foreach ($p as $product)

                        <tr>
                            <td>{{ $p->firstItem() + $loop->index }}</td>
                            <td>{{ $product->name }}</td>
                            <td><img src="{{ asset('backend/product/resize/'.$product->image) }}" alt=""></td>
                            <td>{{ $product->price }}</td>
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
                    <div class="custom-pagination">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection