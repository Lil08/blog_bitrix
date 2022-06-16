<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'catalog-section-list-list',
	),
	'LINE' => array(
		'TITLE' => 'catalog-section-list-item-title',
		'LIST' =>  'catalog-section-list-line-list mb-4',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'TITLE' => 'catalog-section-list-item-title',
		'LIST' =>  'catalog-section-list-text-list row mb-4'
	),
	'TILE' => array(
		'TITLE' => 'catalog-section-list-item-title',
		'LIST' =>  'catalog-section-list-tile-list row mb-4',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

switch ($arParams['LIST_COLUMNS_COUNT'])
{
	case "1":
		$listColumsClass = "col-12";
		break;
	case "2":
		$listColumsClass = "col-6";
		break;
	case "3":
		$listColumsClass = "col-sm-4 col-6";
		break;
	case "4":
		$listColumsClass = "col-md-3 col-sm-4 col-6";
		break;
	case "6":
		$listColumsClass = "col-lg-2 col-md-3 col-sm-4 col-6";
		break;
	case "12":
		$listColumsClass = "col-lg-1 col-md-3 col-sm-4 col-6";
		break;
}

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>

<div class="fh5co-menu">
    <div class="fh5co-box">
        <h3 class="heading">Categories</h3>
        <ul>
            <?php foreach ($arResult['SECTIONS'] as $section){?>
            <li><a href="<?= $section["LIST_PAGE_URL"] ?>"><?= $section["NAME"] ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="fh5co-box">
        <h3 class="heading">Search</h3>
        <form action="#">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Type a keyword">
            </div>
        </form>
    </div>
</div>
