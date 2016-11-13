<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

use \Bitrix\Main\Page\Asset;

$APPLICATION->SetTitle('НАУЧНО-ПРОИЗВОДСТВЕННОЕ ПРЕДПРИЯТИЕ ЭЛКАР');
$obAsset = Asset::getInstance();
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/index.js');
?>

    <section class="tahio">
        <div class="container tahio__container animatedParent" data-sequence='200'>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="tahio__title animated fadeInDownShort" data-id='1'>Тахограф МИКАС</h1>

                    <h3 class="tahio__title-min animated fadeInDownShort" data-id='2'>Современные технологии для <br>
                        контроля и безопасности
                    </h3>

                    <div class="wrap animated fadeInDownShort" data-id='3'>
                        <a href="#order" class="btn fancybox btn-lblue tahio_btn-lblue">Заказать тахограф</a>
                        <a href="#kontakt-f" class="btn fancybox btn-lblue tahio_btn-lblue">Заказать консультацию</a>
                    </div>
                </div>
                <div class="col-md-6 tahio__rel">
                    <img class="big-tagograf  animated fadeInDownShort" data-id='4' src="<?=SITE_TEMPLATE_PATH?>/images/new/tahograf.png" alt="">
                    <div class="wrap animated fadeInDownShort"  data-id='5'>
                        <a href="#view3d-view"  class="btn  btn-trans tahio_btn-trans tahio_btn-margr">Посмотреть 3D</a>
                        <a href="/"  class="btn  btn-trans tahio_btn-trans">Посмотреть эмулятор</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about sect-pad" id="about">
        <div class="container">
            <div class="row animatedParent">
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "about",
                    array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "N",
                        "IBLOCK_TYPE" => "Content",
                        "IBLOCK_ID" => "9",
                        "NEWS_COUNT" => "4",
                        "SORT_BY1" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "SORT_BY2" => "ID",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array(
                            0 => "ID",
                            1 => "NAME",
                            2 => "PREVIEW_PICTURE",
                            3 => "DETAIL_PICTURE"
                        ),
                        "PROPERTY_CODE" => array(
                            0 => "",
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "COMPONENT_TEMPLATE" => ".default",
                        "IMAGE_WIDTH" => "263",
                        "IMAGE_HEIGHT" => "185"
                    ),
                    false
                );?>

                <div class="col-md-5 animated bounceInRight delay-750 col-md-offset-1">
                    <h2 class="regtitle regtitle_blu regtitle_about "><? $APPLICATION->IncludeFile('/includes/main/about-header.php', array(), array('NAME' => 'Заголовок блока ПРОИЗВОДСТВО', 'MODE' => 'text')); ?></h2>
                    <? $APPLICATION->IncludeFile('/includes/main/about-text.php', array(), array('NAME' => 'Текст блока ПРОИЗВОДСТВО', 'MODE' => 'html')); ?>
                </div>

            </div>
        </div>
    </section>
    <section class="advantage sect-pad" id="advantage">
        <div class="container" >
            <div class="animatedParent"><h2 class="regtitle animated bounceInDown">особенности и преимущества тахографа</h2></div>

                <?
                //$GLOBALS["arBenefitsFilter"] = array("PROPERTY_SHOW_ON_MAIN_VALUE" => "Y");
                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "benefits-preview",
                    array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "N",
                        "IBLOCK_TYPE" => "Content",
                        "IBLOCK_ID" => "11",
                        "NEWS_COUNT" => "9999",
                        "SORT_BY1" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "SORT_BY2" => "ID",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array(
                            0 => "ID",
                            1 => "NAME",
                            2 => "PREVIEW_TEXT",
                        ),
                        "PROPERTY_CODE" => array(
                            0 => "TEXT_ON_MAIN",
                            1 => "ICON_PATH",
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                );?>

        </div> <!-- class="container"> -->
    </section>
    <section class="capabilities sect-pad" id="capabilities"  >
        <div class="container">
                <?
                $GLOBALS["arBenefitsFilter"] = array("!PROPERTY_SHOW_ON_MAIN_VALUE" => "Y");
                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "capabilities",
                    array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "N",
                        "IBLOCK_TYPE" => "Content",
                        "IBLOCK_ID" => "7",
                        "NEWS_COUNT" => "9999",
                        "SORT_BY1" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "SORT_BY2" => "ID",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "arBenefitsFilter",
                        "FIELD_CODE" => array(
                            0 => "ID",
                            1 => "NAME",
                            2 => "DETAIL_PICTURE",
                            2 => "PREVIEW_TEXT",
                        ),
                        "PROPERTY_CODE" => array(
                            0 => "TEXT_ON_MAIN",
                            1 => "ICON_PATH",
                            2 => "PHOTO",
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "COMPONENT_TEMPLATE" => ".default",
                        "IMAGE_WIDTH" => "100",
                        "IMAGE_HEIGHT" => "100"
                    ),
                    false
                );?>

            <!-- class="row advantage_row"> -->
        </div>
        <!-- class="container"> -->
    </section>


<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "support",
    array(
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "Content",
        "IBLOCK_ID" => "5",
        "NEWS_COUNT" => "",
        "SORT_BY1" => "ID",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "FILE",
            2 => "",
        ),
        "CHECK_DATES" => "N",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "86400",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "COMPONENT_TEMPLATE" => "support",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "undefined",
        "SECTION_HEADER" => "Техподдержка",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N"
    ),
    false
);?>

    <section class="view3d sect-pad" id="view3d">
        <div class="container center view3d__font animatedParent">
            <? $APPLICATION->IncludeFile('/includes/main/software.php', array(), array('NAME' => 'ПО ДЛЯ РАБОТЫ С ТАХОГРАФОМ', 'MODE' => 'html')); ?>
        </div>
        <!-- class="container center view3d__font"> -->
        <div class="view3d__wrap0">
            <div class="view3d__wrap100">
                <div class="view3d__absolblu"></div>
                <div class="view3d__container3d container">
                    <div class="view3d__dd3" id="view3d-view">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                                    <div class="rotation" style="position: relative; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00041.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00043.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00044.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00046.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00047.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00048.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00049.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00050.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00051.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00052.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00053.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00054.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00055.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00056.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00057.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00058.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00059.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00060.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00061.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00062.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00063.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00064.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00065.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00066.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00067.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00068.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00069.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00070.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00071.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00072.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00073.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00074.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00075.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00076.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00077.jpg"
                                             style="display: none; width: 100%;">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/js/3dvr/DSC00078.jpg"
                                             style="display: none; width: 100%;">

                                    </div>

                                    <div class="view3d__hide">
                                        <button class="btn btn-default btn-cycle active">Cycle</button>
                                        <button class="btn btn-default btn-reverse">Reverse</button>

                                        <button class="btn btn-default btn-prev"></button>
                                        <button class="btn btn-default btn-next"></button>

                                        <!--                                        <button class="btn btn-default btn-play">Stop</button>-->
                                        <button class="btn btn-default btn-play-to">Play to 0</button>
                                        <div class="view3d__button-wrap">
                                            <button class="btn-play view3d__play js-view3d__play"></button>

                                        </div>
                                        <!--                                        <img src="-->
                                        <? //=SITE_TEMPLATE_PATH?><!--/images/360-degrees.svg" alt="" class="view3d__360img">-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- class="view3d__dd3"> -->
                </div>
                <!--  class="view3d__container3d container"> -->
            </div>
            <!-- class="view3d__wrap100"> -->
        </div>
        <!-- class="view3d__wrap0"> -->
    </section>
    <section class="about-ko sect-pad" id="about-ko">
        <div class="container animatedParent">
            <h2 class="regtitle regtitle_blu animated fadeInDown">о компании</h2>

            <div class="row about-ko__row ">
                <div class="col-sm-6 animated bounceInLeft">
                    <div class="about-ko__video" id="play-button">
                        <img class="about-ko__pic" src="<?= SITE_TEMPLATE_PATH ?>/images/video.jpg" alt="видео">

                        <iframe id="video" class="about-ko__frame"
                                src="//www.youtube.com/embed/8bYokWOCH14?enablejsapi=1&html5=1" frameborder="0"
                                allowfullscreen>
                        </iframe>
                        <svg class="about-ko__play" width="30px" height="45px">
                            <use xlink:href="#video_play"></use>
                        </svg>
                    </div>
                </div>
                <div class="col-sm-6 about-ko__text animated bounceInRight">
                    <? $APPLICATION->IncludeFile('/includes/main/about.php', array(), array('NAME' => 'О компании', 'MODE' => 'html')); ?>
                </div>
            </div>
            <!-- class="row about-ko__row"> -->
        </div>
        <!-- class="container"> -->
    </section>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "serts", array(
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "Content",
        "IBLOCK_ID" => "3",
        "NEWS_COUNT" => "",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array("PREVIEW_PICTURE", "DETAIL_PICTURE"),
        "PROPERTY_CODE" => array('ADDITIONAL_PHOTO'),
        "CHECK_DATES" => "N",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "86400",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "SECTION_HEADER" => "Лицензии и сертификаты"
    )
);?>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "feedbacks",
    array(
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "Content",
        "IBLOCK_ID" => "4",
        "NEWS_COUNT" => "6",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "PREVIEW_TEXT",
            2 => "PREVIEW_PICTURE",
            3 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "POST",
            1 => "",
        ),
        "CHECK_DATES" => "N",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "86400",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "COMPONENT_TEMPLATE" => "feedbacks",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "undefined",
        "SECTION_HEADER" => "Отзывы",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N"
    ),
    false
);?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");