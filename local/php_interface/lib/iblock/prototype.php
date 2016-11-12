<?
namespace Main\Iblock;
use \Bitrix\Iblock\IblockTable;

/**
 * Класс по работе с инфоблоками
 * Class Prototype
 * @package Main\Iblock
 */
class Prototype{
    function __constructor(){
        $rsIblocks = IblockTable::getList(
            array(
                'select' => array('CODE', 'ID')
            )
        );

        while($arIblock = $rsIblocks->fetch()){
            ?><pre><?print_r($arIblock)?></pre><?
            define(__NAMESPACE__ . '\ID_' . $arIblock['CODE'], $arIblock['ID']);
        }
    }
}


