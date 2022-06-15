<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?><div class="container-fluid">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.index",
	"news_list",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "#SITE_DIR#news.php?ID=#ID#",
		"FIELD_CODE" => array("PREVIEW_TEXT","PREVIEW_PICTURE",""),
		"FILTER_NAME" => "arrFilter",
		"IBLOCKS" => array("1"),
		"IBLOCK_SORT_BY" => "SORT",
		"IBLOCK_SORT_ORDER" => "ASC",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_URL" => "",
		"NEWS_COUNT" => "10",
		"PROPERTY_CODE" => array("",""),
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>