<div class="modal fade" id="update-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.product.update') }}"
                  autocomplete="off"
                  method="post"
                  enctype="multipart/form-data" name="update_product_form" id="update-product-form">
                @csrf
                <div class="modal-header">
                    <h3 class="modal-title">UPDATE PRODUCT</h3>
                </div>
                <div class="modal-body">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <!-- Form Group -->
                        <div class="form-group">
                            <input type="hidden" class="form-input" id="id-product" name="id_product">
                        </div>

                        <div class="form-group">
                            <label for="update-name-product" class="form-label">Name</label>
                            <input type="text" class="form-input" id="update-name-product" placeholder="Eg: iphone 11" name="name">
                        </div>

                        <div class="form-group">
                            <label for="update-price-product" class="form-label">Price</label>
                            <input type="number" class="form-input" id="update-price-product" placeholder="Eg: 50000" name="price">
                        </div>

                        <div class="form-group">
                            <label for="update-category-product" class="form-label">Category</label>
                            <select name="category" id="update-category-product" class="form-input">
                                @foreach($categories as $category)
                                        <option value='{{ $category->id }}'>{{ $category->name }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="update-image-product" class="form-label">Image</label>
                            <input type="file" class="form-input" id="update-image-product" name="image">
                        </div>
                        <img class="img-preview" id="image-preview"/>
                        <!-- END -->
                    </div>
                </div>
                <div style="clear:both;"></div>
                <div class="modal-footer">
                    <button name="update_product" class="btn btn-warning" type="submit">
                        <span class="glyphicon glyphicon-edit"></span> Update
                    </button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
