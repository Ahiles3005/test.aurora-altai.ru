<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("Detail Page");

if (CModule::IncludeModule("iblock")) {
    $iblockId = 13; // Replace with your IBLOCK_ID
    $elementId = $_REQUEST["ELEMENT_ID"];

    $APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "how-to-detail", // Replace with your custom detail template
        array(
            "IBLOCK_ID" => $iblockId,
            "ELEMENT_ID" => $elementId,
            "SEF_MODE" => "Y",
        "SEF_FOLDER" => "/how_to_get/",
        "SEF_URL_TEMPLATES" => array(
            "detail" => "#ELEMENT_CODE#/",
            "news" => "",
            "section" => "",
        ),
        ),
        false
    );
}

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>
