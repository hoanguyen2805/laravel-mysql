@extends('layouts.app')

@section('content')
    <section class="manage-product">
        <div class="container-fluid-w">
            <div class="row">
                <div class="col">
                    <div class="manage-product__header">
                        <h1>MANAGE PRODUCT</h1>
                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible" style="max-width: 450px; margin: 0 auto;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <p>FAILED!</p>
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        @if(session()->has('message'))
                            <div class="alert alert-success alert-dismissible"
                                 style="max-width: 450px; margin: 0 auto;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <p>{{ session()->get('message') }}</p>
                            </div>
                        @endif
                        @if(session()->has('error'))
                            <div class="alert alert-danger alert-dismissible" style="max-width: 450px; margin: 0 auto;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <p>{{ session()->get('error') }}</p>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <form action="" method="get"
                          class="manage-user__form">
                        {{--                        @csrf--}}
                        <input type="text" placeholder="Enter name" name="key">
                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </form>
                    <button class="btn btn-primary btn--center" data-toggle="modal" type="button"
                            data-target="#add-modal-product"><span
                            class="glyphicon glyphicon-plus"></span> Add Product
                    </button>
                    @includeIf('add_product')
                </div>

                <div class="col">
                    <div class="divTable blueTable">
                        <div class="divTableHeading">
                            <div class="divTableRow">
                                <div class="divTableHead" style="width: 5%">#</div>
                                <div class="divTableHead" style="width: 10%">Image</div>
                                <div class="divTableHead" style="width: 35%">Name</div>
                                <div class="divTableHead" style="width: 15%">Price</div>
                                <div class="divTableHead" style="width: 15%">Category</div>
                                <div class="divTableHead" style="width: 15%;">Action</div>
                            </div>
                        </div>
                        <div class="divTableBody">
                            @if($products)
                                @foreach($products as $product)
                                    <div class="divTableRow">
                                        <div class="divTableCell">
                                            {{ $loop->index + 1 + ($products->currentPage() - 1) * 5}}
                                        </div>
                                        <div class="divTableCell">
                                            <img src="{{ url($product->image) }}" alt="">
                                        </div>
                                        <div class="divTableCell">
                                            <span class="text-content">
                                                {{ $product->name }}
                                            </span>
                                        </div>
                                        <div class="divTableCell">
                                            @money($product->price)
                                        </div>
                                        <div class="divTableCell">
                                            {{ $product->category_name }}

                                        </div>
                                        <div class="divTableCell">
                                            <button class="btn btn-warning" data-toggle="modal" type="button"
                                                    data-target="#update-modal" onClick="setValueInput({{$product}});">
                                                <span
                                                    class="glyphicon glyphicon-edit">
                                                </span> Edit
                                            </button>
                                            <a href="{{ route('admin.product.delete', ['id' => $product->id]) }}"
                                               onClick="return confirm('Are you sure you want to delete this product?');"
                                               class="btn btn-danger">
                                                <i class="fa fa-trash"
                                                   aria-hidden="true"></i> DELETE
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                                @includeIf('update_product')
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col">


                    <div class="blueTable outerTableFooter">
                        <div class="tableFootStyle">
                            <div class="links">
                                {{ $products->links('pagination-links') }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
