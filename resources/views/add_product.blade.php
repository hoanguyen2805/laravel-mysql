<div class="modal fade" id="add-modal-product" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.product.add') }}"
                  autocomplete="off"
                  method="post"
                  enctype="multipart/form-data" name="form_add_product"
                  >
                @csrf
                <div class="modal-header">
                    <h3 class="modal-title">ADD NEW PRODUCT</h3>
                </div>
                <div class="modal-body">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <!-- Form Group -->

                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-input" id="name" placeholder="Eg: iphone 11" name="name">
                            {{--                            <p class="error" id="err-name-update-product-<?= $product->product_id ?>"></p>--}}
                        </div>

                        <div class="form-group">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-input" id="price" placeholder="Eg: 50000" name="price">
                            {{--                            <p class="error" id="err-price-update-product-<?= $product->product_id ?>"></p>--}}
                        </div>

                        <div class="form-group">
                            <label for="username" class="form-label">Category</label>
                            <select name="category" id="category" class="form-input">
                                @foreach($categories as $category)
                                    @if($category->id == 1)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value='{{ $category->id }}'>{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            {{--                            <p class="error" id="err-select-update-product-<?= $product->product_id ?>">Category is--}}
                            {{--                                required!</p>--}}
                        </div>

                        <div class="form-group">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-input" id="add-image" name="image">
                        </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
                <div class="modal-footer">
                    <button name="add_product" class="btn btn-primary" type="submit">
                        <span class="glyphicon glyphicon-plus"></span> Add
                    </button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
