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
		"COMPONENT_TEMPLATE" => "news_list",
		"DETAIL_URL" => "#SITE_DIR#news.php?ID=#ID#",
		"FIELD_CODE" => array(0=>"PREVIEW_TEXT",1=>"PREVIEW_PICTURE",2=>"",),
		"FILTER_NAME" => "arrFilter",
		"IBLOCKS" => array(0=>"5",),
		"IBLOCK_SORT_BY" => "SORT",
		"IBLOCK_SORT_ORDER" => "ASC",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_URL" => "",
		"NEWS_COUNT" => "10",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
</div><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>