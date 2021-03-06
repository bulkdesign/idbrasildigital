/****WooCommerce Checkout Wizard **/
jQuery(document).ready(function ($) {
    $(".wmc-loading-img").block({
        message: null,
        overlayCSS: {
            background: '#fff',
            opacity: 0.6
        }
    });
    jQuery('form.checkout').show();
    jQuery("form.checkout .validate-required :input").attr("required", "required");
    jQuery("form.checkout .validate-email .input-text").addClass("email");

    if (wmc_wizard.isAuthorizedUser == false && wmc_wizard.include_login != "false" && wmc_wizard.woo_include_login != "no") {
        var nextButtonTitle = wmc_wizard.no_account_btn
    } else {
        var nextButtonTitle = wmc_wizard.next
    }
    var nextButtonTitle

    if (wmc_wizard.wmc_remove_numbers == 'true') {
        jQuery("#wizard").steps({
            transitionEffect: wmc_wizard.transitionEffect,
            stepsOrientation: wmc_wizard.stepsOrientation,
            enableAllSteps: false,
            enablePagination: wmc_wizard.enablePagination,
            titleTemplate: '#title#',
            labels: {
                next: nextButtonTitle,
                previous: wmc_wizard.previous,
                finish: wmc_wizard.finish
            },
            onInit: function (event, current) {
                $(".wmc-loading-img").hide();
                $('.actions > ul > li:first-child').attr('style', 'display:none');
            },
            onStepChanging: function (event, currentIndex, newIndex)
            {
                /*** You can attach your custom event hanlder here. Usefule for form valiation **/
                $(this).trigger("onStepChanging", [a = event, b = currentIndex, c = newIndex]);

                if ((currentIndex == 0 && wmc_wizard.isAuthorizedUser == false && wmc_wizard.include_login != "false" && wmc_wizard.woo_include_login != "no") || currentIndex > newIndex || isCouponForm()) {
                    return true
                } else {
                    return validate_checkoutform();
                }
            },
            onStepChanged: function (event, currentIndex, priorIndex)
            {
                //Add your custom funtions to this hanlder                
                $(this).trigger("onStepChanged", [a = event, b = currentIndex, c = priorIndex]);

                if (currentIndex > 0) {
                    $('.actions > ul > li:first-child').attr('style', '');
                } else {
                    $('.actions > ul > li:first-child').attr('style', 'display:none');
                }
                if (currentIndex == 0 && wmc_wizard.isAuthorizedUser == false && wmc_wizard.include_login != "false" && wmc_wizard.woo_include_login != "no") {
                    jQuery('form.checkout a[href="#next"]').html(wmc_wizard.no_account_btn);
                    jQuery('form.checkout a[href="#previous"]').hide();
                } else {
                    jQuery('form.checkout a[href="#next"]').html(wmc_wizard.next);
                    jQuery('form.checkout a[href="#previous"]').show();
                }
            },
            onFinishing: function (event, currentIndex) {
                $(this).trigger('onFinishing');
            }
        });
    } else {
        jQuery("#wizard").steps({
            transitionEffect: wmc_wizard.transitionEffect,
            stepsOrientation: wmc_wizard.stepsOrientation,
            enableAllSteps: false,
            enablePagination: wmc_wizard.enablePagination,
            labels: {
                next: nextButtonTitle,
                previous: wmc_wizard.previous,
                finish: wmc_wizard.finish
            },
            onInit: function (event, current) {
                $(".wmc-loading-img").hide();
                $('.actions > ul > li:first-child').attr('style', 'display:none');
            },
            onStepChanging: function (event, currentIndex, newIndex)
            {
                /*** You can attach your custom event hanlder here. Usefule for form valiation **/
                $(this).trigger("onStepChanging", [a = event, b = currentIndex, c = newIndex]);

                if ((currentIndex == 0 && wmc_wizard.isAuthorizedUser == false && wmc_wizard.include_login != "false" && wmc_wizard.woo_include_login != "no") || currentIndex > newIndex || isCouponForm()) {
                    return true
                } else {
                    return validate_checkoutform();
                }
            },
            onStepChanged: function (event, currentIndex, priorIndex)
            {
                /***Add your customer functions to the onStepChanged Hander function **/
                $(this).trigger("onStepChanged", [a = currentIndex, b = currentIndex, c = priorIndex]);

                if (currentIndex > 0) {
                    $('.actions > ul > li:first-child').attr('style', '');
                } else {
                    $('.actions > ul > li:first-child').attr('style', 'display:none');
                }
                if (currentIndex == 0 && wmc_wizard.isAuthorizedUser == false && wmc_wizard.include_login != "false" && wmc_wizard.woo_include_login != "no") {
                    jQuery('form.checkout a[href="#next"]').html(wmc_wizard.no_account_btn);
                    jQuery('form.checkout a[href="#previous"]').hide();
                } else {
                    jQuery('form.checkout a[href="#next"]').html(wmc_wizard.next);
                    jQuery('form.checkout a[href="#previous"]').show();
                }
            },
            onFinishing: function (event, currentIndex) {
                $(this).trigger('onFinishing');
            }
        });
    }


    jQuery.extend(jQuery.validator.messages, {
        required: wmc_wizard.error_msg,
        email: wmc_wizard.email_error_msg
    });


    jQuery(".actions > ul li:last a").addClass("finish-btn");

    /****
     * When Wizard is complete or checkout form is submitted
     */
    jQuery(".finish-btn").click(function () {
        jQuery("#place_order").trigger("click");

    });



    //add class based on step
    var total_steps = jQuery("#wizard ul[role='tablist'] > li").length;
    if (total_steps == 5) {
        jQuery("#wizard").addClass("five-steps");
    }

    if (total_steps == 3) {
        jQuery("#wizard").addClass("three-steps");
    }

    /*** Adjustments of Tab Width **/
    if (wmc_wizard.stepsOrientation != "vertical") {
        var total_steps = jQuery("#wizard ul[role='tablist'] > li").length;
        var step_width = 100 / total_steps;
        $("#wizard .steps ul li").css("width", step_width + "%");
    }

    if (wmc_wizard.zipcode_validation == 'true') {
        jQuery('body').on('change', '#billing_country', function ()
        {
            if ($("#billing_country").is(":visible")) {
                checkPostCode('billing');
            }
        });

        jQuery('body').on('blur', '#billing_postcode', function ()
        {
            if ($("#billing_postcode").is(":visible")) {
                checkPostCode('billing');
            }
        });


        jQuery('body').on('change', '#shipping_country', function ()
        {
            if ($("#shipping_country").is(":visible")) {
                checkPostCode('shipping');
            }

        });

        jQuery('body').on('blur', '#shipping_postcode', function ()
        {
            if ($("#shipping_postcode").is(":visible")) {
                checkPostCode('shipping');
            }

        });
    }



    function checkPostCode(type)
    {

        result = jQuery(".form-row#" + type + "_postcode_field").length > 0 && jQuery("#" + type + "_postcode").val() != false
                && jQuery("#" + type + "_country").length > 0 && jQuery("#" + type + "_country").val() != false;

        if (result) {

            var data = {
                action: 'valid_post_code',
                country: jQuery("#" + type + "_country").val(),
                postCode: jQuery("#" + type + "_postcode").val()
            };

            $("#wizard").block({
                message: null,
                overlayCSS: {
                    background: '#fff',
                    opacity: 0.6
                }
            });

            jQuery.post(wmc_wizard.ajaxurl, data, function (response) {
                $("#wizard").unblock();
                if (response == false) {
                    jQuery("#" + type + "_postcode").parent().removeClass("woocommerce-validated").addClass("woocommerce-invalid woocommerce-invalid-required-field");
                    return false;
                } else {
                    return true;
                }



            });
        }
    }

    //validate checkout form
    function validate_checkoutform() {
        //       
        var form_valid = false;
        //jQuery("#wizard").validate().settings.ignore = ":disabled,:hidden";

        if (jQuery('form.checkout').valid()) {
            form_valid = true;
        }

        if (wmc_wizard.isAuthorizedUser == false) {
            if ($("#shipping_state_field").is(":visible")) {
                if ($("#shipping_state").is(['required'])) {
                    if (!$("#shipping_state_field").hasClass("woocommerce-validated")) {
                        if (!$('#shipping_state_field').has('label.error-class').length) {
                            $("#s2id_shipping_state").addClass("invalid-state");
                            $('#shipping_state_field').append('<label class="error-class">' + wmc_wizard.error_msg + '</label>');
                        }
                        form_valid = false
                    } else {
                        $('#shipping_state_field').find('label.error-class').remove();
                        $("#s2id_shipping_state").removeClass("invalid-state");
                    }
                }

            }

            if ($("#billing_state_field").is(":visible")) {
                if ($("#billing_state").is(['required'])) {
                    if (!$("#billing_state_field").hasClass("woocommerce-validated")) {
                        if (!$('#billing_state_field').has('label.error-class').length) {
                            $("#s2id_billing_state").addClass("invalid-state");
                            $('#billing_state_field').append('<label class="error-class">' + wmc_wizard.error_msg + '</label>');
                        }
                        form_valid = false
                    } else {
                        $('#billing_state_field').find('label.error-class').remove();
                        $("#s2id_billing_state").removeClass("invalid-state");
                    }
                }

            }
        }

        if (wmc_wizard.isAuthorizedUser) {
            if ($("#billing_state_field").is(":visible")) {
                if ($("#billing_state").is(['required'])) {
                    if ($.trim($("#billing_state").val()) == "") {
                        $("#s2id_billing_state").addClass("invalid-state");
                        if (!$("#billing_state_field").has(".error-class").length) {
                            if (!$("#billing_state_field").has("label.error").length && !$("#billing_state_field label.error").is(":visible")) {
                                $('#billing_state_field').append('<label class="error-class">' + wmc_wizard.error_msg + '</label>');
                            }
                        }
                        form_valid = false
                    } else {
                        $('#billing_state_field').find('label.error-class').remove();
                        $("#s2id_billing_state").removeClass("invalid-state");
                    }
                }

            }

            if ($("#shipping_state_field").is(":visible")) {
                if ($("#shipping_state").is(['required'])) {
                    if ($.trim($("#shipping_state").val()) == "") {
                        $("#s2id_shipping_state").addClass("invalid-state");
                        if (!$("#shipping_state_field").has("label.error").length && !$("#shipping_state_field label.error").is(":visible")) {
                            $('#shipping_state_field').append('<label class="error-class">' + wmc_wizard.error_msg + '</label>');
                        }
                        form_valid = false
                    }
                } else {
                    $('#shipping_state_field').find('label.error-class').remove();
                    $("#s2id_shipping_state").removeClass("invalid-state");
                }
            }

        }


        if (wmc_wizard.zipcode_validation == 'true') {
            if (jQuery("#billing_postcode").closest("#billing_postcode_field").hasClass("woocommerce-invalid")) {

                form_valid = false;
            }
        }

        //validating billing phone
        if ($("#billing_phone").length) {
            var phone = jQuery('#billing_phone').val();
            phone = phone.replace(/[\s\#0-9_\-\+\(\)]/g, '');
            phone = jQuery.trim(phone);

            if (phone.length > 0) {
                form_valid = false;
                jQuery("#billing_phone_field").removeClass("woocommerce-validated").addClass("woocommerce-invalid woocommerce-invalid-required-field");
                if (!$('#billing_phone_field').has('label.error-class').length) {
                    $('#billing_phone_field').append('<label class="error-class">invalid phone number</label>');
                }
            }
        }

        if (wmc_wizard.zipcode_validation == 'true') {
            if (jQuery("#ship-to-different-address-checkbox").is(":checked") && jQuery("#ship-to-different-address-checkbox").is(":visible")) {
                if (!jQuery("#shipping_postcode").closest("#shipping_postcode_field").hasClass("woocommerce-validated")) {

                    form_valid = false;
                }
            }

        }
        //Valite terms and conditions
        if (!validate_terms()) {
            form_valid = false;
        }
        ;

        return form_valid;

    }

    /*** 
     * When Login form is submitted
     */
    jQuery(document).on('click', '#wizard form.login .button, #wizard .woocommerce-form-login .button', function (evt)
    {
        if (wmc_wizard.include_login != "false") {

            evt.preventDefault();
            var form = 'form.login';
            var error = false;

            if (jQuery(form + ' input#username').val() == false) {
                error = true;
                addRequiredClasses('username');
            }

            if (jQuery(form + ' input#password').val() == false) {
                error = true;
                addRequiredClasses('password');
            }

            if (error != false)
            {
                return false;
            }

            var formSelector = this;

            if (jQuery(form + ' input#rememberme').is(':checked') == false) {
                rememberme = false;
            } else {
                rememberme = true;
            }

            $("#wizard").block({
                message: null,
                overlayCSS: {
                    background: '#fff',
                    opacity: 0.6
                }
            });

            var data = {
                action: 'wmc_check_user_login',
                username: jQuery(form + ' input#username').val(),
                password: jQuery(form + ' input#password').val(),
                rememberme: rememberme,
                _ajax_nonce: wmc_wizard.login_nonce
            };

            jQuery.post(wmc_wizard.ajaxurl, data, function (response) {
                $("#wizard").unblock();
                if (response == 'successfully') {
                    location.reload();
                } else {
                    if (!$("form.login > .error-msg").length) {
                        jQuery('form.login').prepend(response);
                    }
                }
            })
        }



    });

    /***
     * User Registeration On Checkout
     */
    jQuery(document).on('click', '#wizard form.register .button', function (evt) {
        evt.preventDefault();

        $("#wizard").block({
            message: null,
            overlayCSS: {
                background: '#fff',
                opacity: 0.6
            }
        });

        var data = {
            action: 'wmc_user_registration',
            username: jQuery.trim(jQuery("#reg_username").val()),
            email: jQuery.trim(jQuery("#reg_email").val()),
            password: jQuery.trim(jQuery("#reg_password").val()),
            _ajax_nonce: wmc_wizard.register_nonce

        };

        jQuery.post(wmc_wizard.ajaxurl, data, function (response) {
            $("#wizard").unblock();
            if (response == 'success') {
                location.reload();
            } else {
                jQuery(".register_form_error").remove();
                jQuery("form.register").prepend(response);
            }


        })

    });

    function addRequiredClasses(selector)
    {
        jQuery('form.login input#' + selector).parent().removeClass("woocommerce-validated");
        jQuery('form.login input#' + selector).parent().addClass("woocommerce-invalid woocommerce-invalid-required-field");
        jQuery('form.login input#' + selector).parent().addClass("validate-required");
    }

    $("#billing_phone").on('blur input change', function () {
        if ($("#billing_phone").length) {
            if ($(this).prop('required')) {
                var phone = jQuery('#billing_phone').val();
                phone = phone.replace(/[\s\#0-9_\-\+\(\)]/g, '');
                phone = jQuery.trim(phone);

                if ($(this).val() != "") {
                    $("#billing_phone").next("label.error").remove();
                }
                if (phone.length > 0) {
                    jQuery("#billing_phone_field").removeClass("woocommerce-validated").addClass("woocommerce-invalid woocommerce-invalid-required-field");
                    if (!$('#billing_phone_field').has('label.error-class').length) {
                        $('#billing_phone_field').append('<label class="error-class">' + wmc_wizard.phone_error_msg + '</label>');
                    }
                } else {

                    if ($('#billing_phone_field').has('label.error-class').length) {
                        $('#billing_phone').next().remove();
                    }

                }
            }
        }

    });

    function isCouponForm() {
        validate = false;
        if ($("#wizard div.current").find("form.checkout_coupon").length) {
            validate = true;
        }

        return validate;
    }

    /**Disable form submission through Keyboard enter **/
    $(window).keydown(function (event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });

    $("form.checkout").submit(function (evt) {
        if ($(".terms-error").is(":visible")) {
            evt.preventDefault();
            evt.stopImmediatePropagation();
        }

    });

    /**
     * Manipulate couopon form for Validatation purposes. Just because we don't need nested forms
     * @returns 
     */
    function manipulate_coupon_form() {
        if (jQuery(".coupon-step").hasClass("current")) {
            if (wmc_wizard.transitionEffect === 'fade') {
                jQuery("form.checkout_coupon").appendTo('.coupon-step').fadeIn(100);
            } else {
                jQuery("form.checkout_coupon").appendTo('.coupon-step').slideDown(100);
            }

        } else {
            //move coupon form to some temp location...Just form validation
            if (jQuery(".coupon-step").length) {
                $("form.checkout_coupon").hide().appendTo(".container-coupon-login-form");
            }
        }
    }

    /**
     * Manipulate login form for Validatation purposes. Just because we don't need nested forms
     * @returns 
     */

    function manipulate_login_form() {
        //if register form is included
        if (jQuery(wmc_wizard.include_register_form == 'true')) {
            target_form = "#customer_login";
        } else {
            target_form = "form.woocommerce-form-login";
        }

        if (jQuery(".login-step").hasClass("current")) {
            if (wmc_wizard.transitionEffect == 'fade') {
                jQuery(target_form).appendTo('.login-step').fadeIn(100);
            } else {
                jQuery(target_form).appendTo('.login-step').slideDown(100);
            }

        } else {
            //Move login form to temp location....Just for validation
            if (jQuery(".login-step").length) {
                jQuery(target_form).hide().appendTo('.container-coupon-login-form');
            }
        }


    }



    function validate_terms() {
        var validate_form = true;
        if (jQuery('input[name="legal"]').length && jQuery('input[name="legal"]').is(":visible")) {
            if (jQuery('input[name="legal"]').is(":checked")) {
                jQuery('input[name="legal"]').parent().removeAttr("style");
                jQuery(".terms-error").remove();
                validate_form = true;
            } else {
                jQuery('input[name="legal"]').attr("required", "required");
                jQuery('.terms').css('border', '1px solid #8a1f11');
                if (!$(".terms-error").length) {
                    jQuery('<p class="terms-error">' + wmc_wizard.terms_error + '</p>').insertAfter(".wc-terms-and-conditions");
                }
                validate_form = false;
            }
        }
        if (jQuery('input[name="terms"]').length && jQuery('input[name="terms"]').is(":visible")) {
            if (jQuery('input[name="terms"]').is(":checked")) {
                jQuery('input[name="terms"]').parent().removeAttr("style");
                jQuery(".terms-error").remove();
                validate_form = true;
            } else {
                jQuery('input[name="terms"]').attr("required", "required");
                jQuery('input[name="terms"]').parent().css('border', '1px solid #8a1f11');
                if (!$(".terms-error").length) {
                    jQuery('<p class="terms-error">' + wmc_wizard.terms_error + '</p>').insertAfter(".wc-terms-and-conditions");
                }
                validate_form = false;
            }
        }
        return validate_form;

    }

    /*** Manipulation of Coupon and login form, just becuase validaiton don't work on nested forms**/
    jQuery("#wizard").on('onStepChanged', function (event, currentIndex, priorIndex) {
        manipulate_coupon_form();
        manipulate_login_form();
    });

    /***
     * Handling terms and contions on the final step
     */
    jQuery("#wizard").on('onFinishing', function () {
        validate_terms();
    });



});