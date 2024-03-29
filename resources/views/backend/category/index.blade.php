@extends('layouts.master_backend')
@section('con')

<br>
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <div class="add-product">
                        <a href="{{ route('make.cat') }}">Add Category</a>
                    </div>
                    <ul id="myTab3" class="tab-review-design">
                        <li class="active"><a href="#"><i class="icon nalika-pie-chart icon-wrap"
                                    aria-hidden="true"></i>Category</a></li>
                    </ul>
                    <table>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($c as $category)

                        <tr>
                            <td>{{ $c->firstItem() + $loop->index }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->pro->count() }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>{{ $category->updated_at }}</td>
                            <td>
                            <a href="{{ url('admin/category/edit/'.$category->category_id) }}"><button data-toggle="tooltip" title="Edit"
                                    class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                            <a href="{{ url('admin/category/delete/'.$category->category_id) }}"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o"
                                    aria-hidden="true"></i></button></a>
                        </td>
                        </tr>

                        @endforeach

                        </tr>
                    </table>
                    <div class="mt-3">
                        {{ $c->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection