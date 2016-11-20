$(document).ready(function () {
    // обработка форм
    $(document).on('click', '.js-forma__send', function (e) {
        e.preventDefault();
        var errorFields = 0;
        var $btn = $(this);
        var $form = $btn.closest('form');
        var $order = $form.find('.js-order-list');

        $.each($form.find('[required]'), function (value) {
            if (!this.validity.valid) {
                $(this).addClass('field field_error');
                $(this).next('.field_error_mess').remove();
                console.log(this.validationMessage);
                $(this).after( "<p class='field_error_mess'>" + this.validationMessage + "</p>" );
                errorFields++;
            }
            else {
                $(this).removeClass('field_error');
                $(this).next('.field_error_mess').remove();
            }
        });

        if (!errorFields) {

            if($order.length) { // присутствует поле заказ
                if(!$order.val()) {
                    alert('не выбран не один товар');
                    return false;
                }
            }

            $.ajax({
                url: '/ajax/mail.php',
                type: 'post',
                data: $btn.closest('form').serializeArray(),
                dataType: 'JSON',
                success: function (response) {
                    if (response.SUCCESS) {
                        $.fancybox('#spasib');
                        $btn.closest('form').trigger('reset');
                    }
                    else if (response.ERROR && response.ERROR_FIELDS.length) {
                        $.each(response.ERROR_FIELDS, function (index, NAME) {
                            $btn.closest('form').find('[name=' + NAME + ']').addClass('field field_error');
                        });
                    }

                },
                error: function (response) {

                }
            });
        }
    });


    function updateOrder() {

        var orderList = new Array();
        var orderExist = false;
        $.each($(".js-order-product-container"), function () {
            var name = $(this).find(".js-order-product-name").text();
            var count = $(this).find(".js-order-product-count").val();
            if(count > 0) {
                orderExist = true;
            }
            orderList.push({
                NAME: name,
                COUNT: count
            });

        });
        orderListJSon = JSON.stringify(orderList);
        if(orderExist) {
            $(".js-order-list").val(orderListJSon);
        }
        else {
            $(".js-order-list").val('');
        }
    }

    $(document).on('change', '.js-order-product-count', function (e) {
        var value = $(this).val();

        updateOrder();
    });

    //маска на телефон
    try {
        $('input[type="tel"]').mask(
            "+7 (999) 999-99-99"
        );
    }
    catch (e) {
        console.log(e);
    }


    /**
     * Предзагрузчик изображений с поддержкой jQuery deferred
     * Пример:
     * $.when(
     *     site.utils.preloadImage(src1),
     *     site.utils.preloadImage([src2, src3])
     * ).done(function()
     * {
	 *     //Images are preloaded
	 * });
     *
     * @param string|array|jQuery sources Адрес(а) изображений
     * @return object
     */
    function preloadImage(sources) {
        if (sources instanceof jQuery) {
            var urls = [];
            sources.each(function () {
                if ($(this).is('img')) {
                    urls.push($(this).attr('src'));
                } else if ($(this).is('a')) {
                    urls.push($(this).attr('href'));
                }
            });
            return this.preloadImage(urls);
        }

        if (!(sources instanceof Array)) {
            sources = [sources];
        }

        var defer = $.Deferred();
        var images = {};
        var totalCount = 0;
        for (var i = 0; i < sources.length; i++) {
            var url = sources[i];
            var id = 'id' + url.replace(/[^A-z0-9]/g, '');
            if (images[id] === undefined) {
                images[id] = {
                    image: new Image(),
                    url: url
                };
                totalCount++;
            }
        }
        var loadedCount = 0;
        for (var id in images) {
            images[id].image.onload = function () {
                if (++loadedCount >= totalCount) {
                    defer.resolve();
                }
            };
            images[id].image.src = images[id].url;
        }

        return defer.promise();
    }

    function addclasstoFunsy() {
        $('.capabilities-windows').parent().addClass("ovh");
    }


    $(document).on('click', '.advantage__item a', function () {
        var $this = $(this);
        var elId = $this.data('id');
        var ib = $this.data('iblock');

        $.ajax({
            type: "POST",
            data: {'ID': elId, 'IBLOCK': ib},
            cache: false,
            url: '/ajax/detail.php',
            success: function (data) {
                $.fancybox(data, {
                    'padding': 0,
                    'beforeShow': function () {
                        var imgArr = [];
                        var $img = $(data).find('img');
                        $img.each(function () {
                            imgArr.push($(this).attr('src'));
                        });
                        $.when(
                            preloadImage(imgArr)
                        ).done(function () {
                            //Images are preloaded
                        });
                    },
                    'afterShow': function () {
                        addclasstoFunsy();

                        $('.image-popup-no-margins').magnificPopup({
                            type: 'image',
                            closeOnContentClick: true,
                            closeBtnInside: false,
                            fixedContentPos: true,
                            mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
                            image: {
                                verticalFit: true
                            },
                            zoom: {
                                enabled: true,
                                duration: 300 // don't foget to change the duration also in CSS
                            }
                        });
                    },
                });
            }
        });
    });

    $(document).on('click', '.footer__proezd-list a', function () {
        var $this = $(this);
        var elId = $this.data('id');
        var ib = $this.data('iblock');

        $.ajax({
            type: "POST",
            data: {'ID': elId, 'IBLOCK': ib},
            cache: false,
            url: '/ajax/office-detail.php',
            success: function (data) {
                $.fancybox(data, {
                    'padding': 0,
                });
            }
        });
    });

    $(document).on('click', '.capabilities__item a', function () {
        setTimeout(addclasstoFunsy, 1000);
    });

    $('.fancybox').not('.fancybox-ajax').fancybox(
        {
            padding: 0
        }
    );

});