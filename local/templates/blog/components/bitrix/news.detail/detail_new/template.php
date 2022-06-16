<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-' . $arParams['TEMPLATE_THEME'] : '';
CUtil::InitJSCore(array('fx'));
//echo '<pre>';
//var_dump($arResult);
//echo '</pre>';
//die;
//КОСТЫЛЬ
$numb = (int)$arResult['ID'];
$prev = $numb - 1;
$next = $numb + 1;
?>

<a href="<?= '/news.php?ID=' . $prev ?>" class="fh5co-post-prev"><span><i class="icon-chevron-left"></i> Prev</span></a>
<a href="<?= '/news.php?ID=' . $next ?>" class="fh5co-post-next"><span>Next <i
                class="icon-chevron-right"></i></span></a>
<!-- END #fh5co-header -->
<div class="container-fluid">
    <div class="row fh5co-post-entry single-entry">
        <article
                class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
            <figure class="animate-box">
                <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                     alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                     title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>" class="img-responsive">
            </figure>
            <!--            <span class="fh5co-meta animate-box"><a href="single.html">Travel</a></span>-->
            <? if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]): ?>
                <h2 class="fh5co-article-title animate-box"><?= $arResult["NAME"] ?></h2>
            <? endif; ?>
            <span class="fh5co-meta fh5co-date animate-box"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></span>

            <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
                <? if ($arResult["NAV_RESULT"]): ?>
                    <? if ($arParams["DISPLAY_TOP_PAGER"]): ?><?= $arResult["NAV_STRING"] ?><br/><? endif; ?>
                    <? echo $arResult["NAV_TEXT"]; ?>
                    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?><br/><?= $arResult["NAV_STRING"] ?><? endif; ?>
                <? elseif ($arResult["DETAIL_TEXT"] <> ''): ?>
                    <? echo $arResult["DETAIL_TEXT"]; ?>
                <? else: ?>
                    <? echo $arResult["PREVIEW_TEXT"]; ?>
                <? endif ?>


            </div>
        </article>
    </div>
</div>


<script type="text/javascript">
    BX.ready(function () {
        var slider = new JCNewsSlider('<?=CUtil::JSEscape($this->GetEditAreaId($arResult['ID']));?>', {
            imagesContainerClassName: 'news-detail-slider-container',
            leftArrowClassName: 'news-detail-slider-arrow-container-left',
            rightArrowClassName: 'news-detail-slider-arrow-container-right',
            controlContainerClassName: 'news-detail-slider-control'
        });
    });
</script>
