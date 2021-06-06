$().ready(function () {
    /**
     *
     * Hoa
     * Created at 06-06-2021 19h00
     * Validate login form
     *
     */
    $("#login-form").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
            "username": {
                required: true,
            },
            "password": {
                required: true,
            }
        },
        messages: {
            "username": {
                required: "The username field is required.",
            },
            "password": {
                required: "The password field is required.",
            },
        },
        highlight: function (element) {
            $(element).addClass('input--error');
        },
        unhighlight: function (element) {
            $(element).removeClass('input--error');
        }
    })

    /**
     *
     * Hoa
     * Created at 06-06-2021 19h30
     * validate send email form (forgot password)
     *
     */
    $("#send-email-form").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
            "email": {
                required: true,
            }
        },
        messages: {
            "email": {
                required: "The email field is required.",
            }
        },
        highlight: function (element) {
            $(element).addClass('input--error');
        },
        unhighlight: function (element) {
            $(element).removeClass('input--error');
        }
    })

    /**
     *
     * Hoa
     * Created at 06-06-2021 20h00
     * Validate register form
     *
     */
    $("#register-form").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
            "name": {
                required: true,
                minlength: 4,
                maxlength: 255,
            },
            "email": {
                required: true,
                maxlength: 255,
            },
            "username": {
                required: true,
                minlength: 4,
                maxlength: 255
            },
            "password": {
                required: true,
                minlength: 8,
                maxlength: 20,
            },
            "password_confirmation": {
                required: true,
                equalTo: "#password",
            },
            "birth_day": {
                required: true,
            },
            "avatar": {
                required: true,
                extension: "jpg,jpeg,png",
                filesize: 2048000,
            }
        },
        messages: {
            "name": {
                required: "The name field is required.",
            },
            "email": {
                required: "The email field is required.",
            },
            "username": {
                required: "The username field is required.",
            },
            "password": {
                required: "The password field is required.",
            },
            "password_confirmation": {
                required: "The password confirmation field is required.",
                equalTo: "Password and password confirmation must be same",
            },
            "birth_day": {
                required: "The birth day field is required.",
            },
            "avatar": {
                required: "The avatar field is required.",
                extension: "The avatar must be an image.",
                filesize: " file size must be less than 2048KB.",
            }

        },
        highlight: function (element) {
            $(element).addClass('input--error');
        },
        unhighlight: function (element) {
            $(element).removeClass('input--error');
        },
        submitHandler: function (form) {
            form.submit();
        }
    })

    /**
     *
     * Hoa
     * Created at 06-06-2021 20h40
     * handle file size
     *
     */
    $.validator.addMethod('filesize', function (value, element, arg) {
        if (element.files[0].size <= arg) {
            return true;
        } else {
            return false;
        }
    });

    /**
     *
     * Hoa
     * Created at 06-06-2021 21h00
     * validate reset password form
     *
     */
    $("#reset-form").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
            "email": {
                required: true,
                maxlength: 255,
            },
            "password": {
                required: true,
                minlength: 8,
                maxlength: 20,
            },
            "password_confirmation": {
                required: true,
                equalTo: "#password",
            },
        },
        messages: {
            "email": {
                required: "The email field is required.",
            },
            "password": {
                required: "The password field is required.",
            },
            "password_confirmation": {
                required: "The password confirmation field is required.",
                equalTo: "Password and password confirmation must be same",
            },
        },
        highlight: function (element) {
            $(element).addClass('input--error');
        },
        unhighlight: function (element) {
            $(element).removeClass('input--error');
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    /**
     *
     * Hoa
     * Created at 06-06-2021 21h20
     * validate add product form
     *
     */
    $("#add-product-form").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
            "name": {
                required: true,
                minlength: 4,
                maxlength: 255,
            },
            "price": {
                required: true,
                min: 0,
                max: 2147483647,
            },
            "category": {
                required: true,
            },
            "image": {
                required: true,
                extension: "jpg,jpeg,png",
                filesize: 2048000,
            }
        },
        messages: {
            "name": {
                required: "The name field is required.",
            },
            "price": {
                required: "The price field is required.",
            },
            "category": {
                required: "The category field is required.",
            },
            "image": {
                required: "The image field is required.",
                extension: "The image must be an image.",
                filesize: " file size must be less than 2048KB.",
            }
        },
        highlight: function (element) {
            $(element).addClass('input--error');
        },
        unhighlight: function (element) {
            $(element).removeClass('input--error');
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    /**
     *
     * Hoa
     * Created at 06-06-2021 22h00
     * validate update product form
     *
     */
})
// The avatar must not be greater than 2048 kilobytes.
