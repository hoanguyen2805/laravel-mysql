$(document).ready(function(){
    /**
     *
     * Hoa
     * Created at 17-05-2021
     * open menu responsive
     *
     */
    $("#menu").click(function(){
        let x = document.getElementById("my-top-nav");
        if (x.className === "top-bar__menu") {
            x.className += " responsive";
        } else {
            x.className = "top-bar__menu";
        }
    });

    /**
     *
     * Hoa
     * Created at 19-05-2021
     * Preview Image - update product
     *
     */
    $("#update-image-product").on('input', function () {
        let oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById('update-image-product').files[0]);

        oFReader.onload = function (oFREvent) {
            $('#image-preview').attr("src", oFREvent.target.result);
        };
    })


})

/**
 *
 * Hoa
 * Created at 07-06-2021 09h30
 * send data from a row (product) to "product update form"
 *
 */
window.setValueInput = function (product) {
    $("#id-product").val(product.id);
    $("#update-name-product").val(product.name);
    $("#update-price-product").val(product.price);
    $("#update-category-product").val(product.category_id);
    $("#update-image-product").val("");
    $('#image-preview').attr("src", product.image);
}
