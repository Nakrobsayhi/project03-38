@extends('layouts.master_backend')
@section('con')

<br>
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <ul id="myTab3" class="tab-review-design">
                        <li class="active"><a href="#"><i class="icon nalika-user icon-wrap"
                                    aria-hidden="true"></i>Product</a></li>
                    </ul>
                    <table>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>

                        @foreach ($u as $user)

                        <tr>
                            <td>{{ $u->firstItem() + $loop->index }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                        </tr>

                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection