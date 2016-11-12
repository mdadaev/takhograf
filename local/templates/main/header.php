<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;


Loc::loadMessages(__FILE__);

$obAsset = Asset::getInstance();

$obAsset->addString("<link rel='apple-touch-icon' href='apple-touch-icon.png'>");
/*CSS*/
$obAsset->addString("<link href='//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700' rel='stylesheet'>");
$obAsset->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
$obAsset->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
$obAsset->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.min.css');
$obAsset->addCss(SITE_TEMPLATE_PATH . '/css/owl.theme.default.css');
$obAsset->addCss(SITE_TEMPLATE_PATH . '/css/animations.css');
$obAsset->addCss(SITE_TEMPLATE_PATH . '/css/responsive.css');
$obAsset->addCss(SITE_TEMPLATE_PATH . '/css/new-css.css');
$obAsset->addCss(SITE_TEMPLATE_PATH . '/css/magnific-popup.css');

/*JS*/
$obAsset->addString("<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>");
$obAsset->addString("<script src=\"//api-maps.yandex.ru/2.1/?lang=ru_RU\" type=\"text/javascript\"></script>");
$obAsset->addString("<script>window.jQuery || document.write('<script src=\"js/vendor/jquery-1.11.2.min.js\"><\/script>')</script>");
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js');
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/jquery.fancybox.pack.js');
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.maskedinput.min.js');
//$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/easeljs-0.6.0.min.js');
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/owl.carousel.js');
//$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/3dvr/view3d.js');
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/css3-animate-it.js');
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.fs.stepper.js');
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.magnific-popup.min.js');
//$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/vendor/zoomify.min.js');

$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/main.js');
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/template.js');
?>
    <!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?$APPLICATION->ShowTitle()?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?$APPLICATION->ShowHead();?>
    </head>

    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF" class="<?$APPLICATION->ShowProperty('pageClass')?>"><?
    $APPLICATION->ShowPanel();
    ?><!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <header class="header">
        <div class="container">
            <div class="row animatedParent">
                <div class="col-md-2 animated bounceInDown">
                    <div class="logo"><?
                        if( !\Main\IS_INDEX ){
                            ?><a href="/" class="logo__link"><?
                        }
                            ?><svg class="logo__img" width="170px" height="71px">
                                <use xlink:href="#logo"></use>
                            </svg><?
                        if( !\Main\IS_INDEX ){
                            ?></a><?
                        }
                    ?></div>
                </div> <!-- class="col-md-2"> -->
                <div class="col-md-6 animated bounceInDown hidden-sm hidden-xs">
                    <h2 class="header__title">научно-производственное предприятие элкар</h2>
                    <p class="header__mintext">
                        <?$APPLICATION->IncludeFile('/includes/header__main-text.php', array(), array('NAME' => 'Главный текст в шапке', 'MODE' => 'text'));?>
                    </p>
                </div>
                <div class="col-md-4 animated bounceInDown hidden-sm hidden-xs">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#zvon" class="btn fancybox header__btn">Обратный звонок</a>
                        </div>
                        <div class="col-md-6 header__contaks">
                            <p class="header__wraplink">
                                <a class="header__link" href="tel: <?=tplvar('phone_num_call', true);?>">
                                    <i class="header__round header__round_btext">&#xe800;</i> <?= tplvar('phone_num_formated', true);?>
                                </a>
                            </p>
                            <p class="header__wraplink">
                                <a class="header__link" href="mailto: <?= tplvar('header_email', true);?>">
                                    <i class="header__round">&#xf0e0;</i> <?= tplvar('header_email', true);?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div> <!-- class="col-md-4"> -->
            </div> <!-- class="row"> -->
        </div><!--  class="container"> -->
        <div class="nav-t">
            <div class="container nav-t__container animatedParent">
                <div class="nav-t__hide-btn hiden-mob">&#xf0c9;</div>

                <nav class="nav-t__menu hiden-mob delay-250  animated fadeInDownShort">
                    <?$APPLICATION->IncludeComponent("bitrix:menu",".default",Array(
                            "ROOT_MENU_TYPE" => "top",
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_TIME" => "86400",
                            "MENU_CACHE_USE_GROUPS" => "N",
                            "MENU_CACHE_GET_VARS" => "",
                            "LINK_CLASS" => "nav-t__link"
                        )
                    );?>
                    <div class="nav-t__contakt2 container hiden-mob">
                        <div class="nav-t__wrap">
                            <a class="nav-t__clink col-xs-6" href="tel:84957777777">
                                8-495-777-77-77
                            </a>
                            <a class="nav-t__clink col-xs-6" href="mailto:zapros@email.com">
                                zapros@email.com
                            </a>
                            <div class="nav-t__centr">
                                <a href="#zvon" class="btn  header__btn fancybox nav-t__btn">Обратный звонок</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <a href="#kontakt-f"  class="header__connekt fancybox btn animated fadeInRight">Свяжитесь с нами</a>
            </div>
        </div>
    </header>
