<?
include_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php';

$sapi_type = php_sapi_name();
if ($sapi_type == 'cgi') {
    header('Status: 404');
}
else {
    header('HTTP/1.0 404 Not Found');
}

@define('ERROR_404', 'Y');
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';

$title = LANG == 'en' ? 'Page\'s not found' : 'Страница не найдена';
$APPLICATION->SetTitle($title);
$APPLICATION->AddChainItem($title);

?>
    <br>
    <br>
    <div class="container center">
        <h2 class="regtitle">Ошибка 404</h2>
        <p>Страница не найдена. Скорее всего вы попали сюда по ошибке.
        </p>
        <p>Воспользуйтесь навигацией сайта или перейдите на
            <a href="/">главную страницу</a>.</p>
    </div>
<?

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';