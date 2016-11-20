<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
        <section class="quest sect-pad2" id="questions">
            <div class="container">
                <h2 class="regtitle center ">Остались вопросы? напишите нам!</h2>
                <div class="quest__fwrap">
                    <form action="#" class="quest__form row">
                        <input type="hidden" name="SECTION_CODE" value="consult">
                        <input type="hidden" name="FORM_NAME" value="Консультация">
                        <div class="col-sm-6">
                            <input type="text" class="quest__inpt " name="NAME" required placeholder="ФИО*" id="fi" >
                            <input type="text" class="quest__inpt " placeholder="Email*" required id="em" name="CODE">
                        </div>
                        <div class="col-sm-6">
                            <textarea name="PREVIEW_TEXT" id="" class="quest__inpt quest__area " required placeholder="Сообщение*"  rows="3"></textarea>
                        </div>
                        <div class="center quest__center">
<!--                            <button type="submit" class="btn quest__submit btn-trans ">Отправить сообщение</button>-->
                            <a href="javascript:;" class="btn js-forma__send quest__submit btn-trans">Отправить сообщение</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <footer class="footer sect-pad2" id="kontakts">
            <div class="container ">
                <div class=""><h2 class="regtitle center wow fadeInUpShort">Контакты</h2></div>
                <div class="row">
                    <div class="col-sm-4  footer__col-sm-4" data-sequence='300'>
                        <h3 class="footer__tconta wow wow fadeInLeft" data-id='1'>
                            менеджер проекта
                        </h3>
                        <p class="footer__text wow fadeInLeft"  data-id='2'><?=tplvar('manager_name', true)?> <br>
                            <?=tplvar('manager_organization', true)?> <br>
                            <?=tplvar('manager_address', true)?>
                        </p>
                        <p class="footer__wraplink wow fadeInLeft" data-id='3'>
                            <a class="footer__link" href="tel:<?=tplvar('manager_phone_call', true)?>">
                                <i class="footer__round footer__round_btext"></i> <?=tplvar('manager_phone', true)?>
                            </a>
                        </p>
                        <p class="footer__wraplink wow fadeInLeft" data-id='4'>
                            <a class="footer__link" href="tel:<?=tplvar('manager_fax_call', true)?>">
                                <i class="footer__round footer__round_btext">&#xe802;</i> <?=tplvar('manager_fax', true)?>
                            </a>
                        </p>
                        <p class="footer__wraplink wow fadeInLeft" data-id='5'>
                            <a class="footer__link" href="tel:<?=tplvar('manager_mobile_call', true)?>">
                                <i class="footer__round footer__round_btext">&#xf10b;</i> <?=tplvar('manager_mobile', true)?>
                            </a>
                        </p>
                        <p class="footer__wraplink wow fadeInLeft" data-id='6'>
                            <a class="footer__link" href="mailto:<?=tplvar('manager_email', true)?>">
                                <i class="footer__round footer__round_btext">&#xf0e0;</i> <?=tplvar('manager_email', true)?>
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-4 footer__col-sm-4 " data-sequence='300' >
                        <h3 class="footer__tconta wow fadeInLeft delay-750" data-id='1'>
                            руководитель проекта
                        </h3>
                        <p class="footer__text wow fadeInLeft delay-750" data-id='2'><?=tplvar('project_manager_name', true)?> <br>
                            <?=tplvar('project_manager_organization', true)?><br>
                            <?=tplvar('project_manager_address', true)?>
                        </p>

                        <p class="footer__wraplink wow fadeInLeft delay-750" data-id='3'>
                            <a class="footer__link" href="tel:<?=tplvar('project_manager_phone_call', true)?>">
                                <i class="footer__round footer__round_btext"></i> <?=tplvar('project_manager_phone', true)?>
                            </a>
                        </p>
                        <p class="footer__wraplink wow fadeInLeft delay-750">
                            <a class="footer__link" href="tel:<?=tplvar('project_manager_fax_call', true)?>">
                                <i class="footer__round footer__round_btext">&#xe802;</i> <?=tplvar('project_manager_fax', true)?>
                            </a>
                        </p>
                        <p class="footer__wraplink wow fadeInLeft delay-750">
                            <a class="footer__link" href="mailto:<?=tplvar('project_manager_email', true)?>">
                                <i class="footer__round footer__round_btext">&#xf0e0;</i> <?=tplvar('project_manager_email', true)?>
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-4 footer__col-sm-4 footer__col-sm-4_last animatedParent" data-sequence='300'>
                        <h3 class="footer__tconta animated fadeInLeftShort delay-750" data-id='1'>Головной офис</h3>
                        <p class="footer__text animated fadeInLeftShort delay-750" data-id='2'><?=tplvar('main_office_address', true)?></p>

                        <p class="footer__wraplink animated fadeInLeftShort delay-750" data-id='3'>
                            <a class="footer__link" href="tel:<?=tplvar('main_office_phone_call', true)?> ">
                                <i class="footer__round footer__round_btext"></i> <?=tplvar('main_office_phone', true)?>
                            </a>
                        </p>
                        <p class="footer__wraplink animated fadeInLeftShort delay-750" data-id='4'>
                            <a class="footer__link" href="tel:<?=tplvar('main_office_fax_call', true)?>">
                                <i class="footer__round footer__round_btext">&#xe802;</i> <?=tplvar('main_office_fax', true)?>
                            </a>
                        </p>
                        <p class="footer__wraplink animated fadeInLeftShort delay-750" data-id='5'>
                            <a class="footer__link" href="mailto:<?=tplvar('main_office_email', true)?>">
                                <i class="footer__round footer__round_btext">&#xf0e0;</i> <?=tplvar('main_office_email', true)?>
                            </a>
                        </p>
                        <div class="footer__map-wrap animated fadeInLeftShort delay-750" data-id='6'>

                            <div class="footer__maping">
                                <div id="map-1"></div>
                            </div>
                        </div>
                        <div class="footer__proezd-w animated fadeInLeftShort delay-750" data-id='7'>
                            <b class="footer__proezd-name">Проезд:</b>
                            <ul class="footer__proezd-list">
                                <li class="footer__proezd-itm">
                                    <a class="footer__proezd-link fancybox" href="#map1"> К офису</a></li>
                                <li class="footer__proezd-itm">
                                    <a class="footer__proezd-link fancybox" href="#map2"> К складу</a></li>
                                <li class="footer__proezd-itm">
                                    <a class="footer__proezd-link fancybox" href="#map3"> К пункту выдачи</a>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- class="col-sm-4"> -->


                    <div class="animatedParent clearfix">
                        <div class="footer__copy  animated fadeInUpShort">
                            <nav class="footer__dmenu">
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
                                        "LINK_CLASS" => "footer__dmenu-itm"
                                    )
                                );?>
                            </nav>
                            <p class="footer__ctext"><?$APPLICATION->IncludeFile('/includes/copyright.php', array(), array('NAME' => 'Копирайт', 'MODE' => 'html'));?></p>
                        </div>
                    </div>

                </div> <!-- class="row"> -->
            </div> <!-- /container -->
        </footer>

        <div  id="kontakt-f" class="js-fan-zvonok">
            <form action="#" class="forma">
                <input type="hidden" name="SECTION_CODE" value="consult">
                <input type="hidden" name="FORM_NAME" value="Консультация">
                <input class="forma__inpt" type="text" required name="NAME" placeholder="ФИО *" id="1">
                <input class="forma__inpt" type="text" required name="CODE" placeholder="Email *" id="21">
                <input class="forma__inpt" type="tel" required name="PHONE_NUMBER" placeholder="Телефон *" id="3">
                <textarea class="forma__inpt" name="PREVIEW_TEXT"  placeholder="Комментарий" id="5"  rows="4"></textarea>
                <button class="forma__send js-forma__send btn">Отправить</button>
            </form>
        </div>

        <div  id="order" class="js-fan-bigforma">
            <form action="#" class="forma">
                <input type="hidden" name="SECTION_CODE" value="order">
                <input type="hidden" name="FORM_NAME" value="Заказ">

                <input class="forma__inpt" type="text" name="NAME" required placeholder="ФИО *" id="1">
                <div class="row">
                    <div class="col-sm-6">
                        <input class="forma__inpt" type="email" name="CODE" required placeholder="Email *" id="21">
                    </div>
                    <div class="col-sm-6">
                        <input class="forma__inpt" type="tel" name="PHONE_NUMBER" required placeholder="Телефон *" id="3">
                    </div>
                </div>

                <div class="forma__coutn-wrap ">
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "order", array(
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "AJAX_MODE" => "N",
                            "IBLOCK_TYPE" => "Content",
                            "IBLOCK_ID" => "10",
                            "NEWS_COUNT" => "",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "SORT_BY2" => "ID",
                            "SORT_ORDER2" => "ASC",
                            "FILTER_NAME" => "",
                            "FIELD_CODE" => array("NAME","PREVIEW_PICTURE"),
                            "PROPERTY_CODE" => array(''),
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
                            "IMAGE_WIDTH" => "100",
                            "IMAGE_HEIGHT" => "100"
                        )
                    );?>

                </div> <!-- class="forma__coutn-wrap row"> -->
                <input type="hidden" class="js-order-list" name="ORDER_LIST" required />
                <textarea class="forma__inpt" name="PREVIEW_TEXT"  placeholder="Комментарий" id="5"  rows="4"></textarea>
                <button class="forma__send js-forma__send btn">Отправить</button>
            </form>
        </div>
        <div  id="zvon" class="js-fan-zvonok">
            <form action="#" class="forma">
                <input type="hidden" name="SECTION_CODE" value="callback">
                <input type="hidden" name="FORM_NAME" value="Обратный звонок">
                <input class="forma__inpt" type="text" required name="NAME" placeholder="Имя *" id="1р">
                <input class="forma__inpt" type="tel" required name="PHONE_NUMBER" placeholder="Телефон *" id="3y">
                <button class="forma__send js-forma__send btn">Отправить</button>
            </form>
        </div>

        <?$APPLICATION->IncludeFile('/includes/footer__main-office-info.php', array(), array('NAME' => 'Головной офис', 'MODE' => 'html'));?>
        <?$APPLICATION->IncludeFile('/includes/footer__stock.php', array(), array('NAME' => 'Склад', 'MODE' => 'html'));?>
        <?$APPLICATION->IncludeFile('/includes/footer__delivery-point.php', array(), array('NAME' => 'Пункт выдачи заказов', 'MODE' => 'html'));?>


        <div  id="spasib" class="js-fan-zvonok center">
            <div class="spacib-pad">
                <svg  width="111px" height="56px">
                    <use  xlink:href="#mail"></use>
                </svg>
            </div>

            <h2 class="regtitle regtitle_blu spacib_title">Ваша заявка успешно отправлена!</h2>

            <p>Наши менеджеры свяжутся с Вами  <br>
                в ближайшее время.
            </p>
            <p>Спасибо за обращение.</p>
        </div>

        <div id="script_place"></div>

    </body>
</html>