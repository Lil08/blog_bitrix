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
?>
<? $LINE_ELEMENT_COUNT = 2; ?>

<div class="row fh5co-post-entry">
    <?php
    foreach ($arResult["IBLOCKS"] as $arIBlock) {
        foreach (array_chunk($arIBlock["ITEMS"], 4, true) as $items) {
            foreach (array_chunk($items, 2, true) as $item) {
                foreach ($item as $i) {
                    //echo '<pre>'; var_dump($i["PREVIEW_PICTURE"]["SRC"]); echo '</pre>';die;
                    ?>
                    <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
                        <figure>
                            <a href="single.html"><img src="<?= $i["PREVIEW_PICTURE"]["SRC"] ?>" alt="Image" class="img-responsive"></a>
                        </figure>
<!--                        <span class="fh5co-meta"><a href="single.html">Food &amp; Drink</a></span>-->
                        <h2 class="fh5co-article-title"><a href="<?= $i['DETAIL_PAGE_URL'] ?>"><?= $i["NAME"] ?></a></h2>
                        <span class="fh5co-meta fh5co-date"><?= $i["DISPLAY_ACTIVE_FROM"] ?></span>
                    </article>
                <? } ?>
                <div class="clearfix visible-xs-block"></div>
            <? } ?>
            <div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>
        <?php }
    } ?>

</div>


<!--<div class="news-index">-->
<!--    <table cellpadding="10" cellspacing="0" border="0" width="100%">-->
<!--        <tr>-->
<!--            --><?//
//            $cell = 0;
//
//            foreach ($arResult["IBLOCKS"] as $arIBlock): ?>
<!--            <td valign="top" width="--><?//= round(100 / $LINE_ELEMENT_COUNT) ?><!--%">-->
<!--                <table class="data-table" cellpadding="0" cellspacing="0" border="0" width="100%">-->
<!--                    <thead>-->
<!--                    --><?//
//                    $this->AddEditAction('iblock_' . $arIBlock['ID'], $arIBlock['ADD_ELEMENT_LINK'], CIBlock::GetArrayByID($arIBlock["ID"], "ELEMENT_ADD"));
//                    ?>
<!--                    <tr valign="top" id="--><?//= $this->GetEditAreaId('iblock_' . $arIBlock['ID']); ?><!--">-->
<!--                        <td colspan="2"><a href="--><?//= $arIBlock["LIST_PAGE_URL"] ?><!--">--><?//= $arIBlock["NAME"] ?><!--</a></td>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    --><?//
//                    foreach ($arIBlock["ITEMS"] as $arItem):?>
<!--                        --><?//
//                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
//                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNI_ELEMENT_DELETE_CONFIRM')));
//                        ?>
<!--                        <tr valign="top" id="--><?//= $this->GetEditAreaId($arItem['ID']); ?><!--">-->
<!--                            <td class="news-date-time" style="border:0" nowrap-->
<!--                                id="--><?//= $this->GetEditAreaId($arItem['ID']); ?><!--">-->
<!--                                --><?//= $arItem["DISPLAY_ACTIVE_FROM"] ?><!--&nbsp;-->
<!--                            </td>-->
<!--                            <td style="border:0">-->
<!--                                <a href="--><?//= $arItem["DETAIL_PAGE_URL"] ?><!--">--><?//= $arItem["NAME"] ?><!--</a>&nbsp;-->
<!--                            </td>-->
<!--                        </tr>-->
<!--                    --><?// endforeach; ?>
<!--                </table>-->
<!--            </td>-->
<!--            --><?//
//            if ((++$cell) >= $LINE_ELEMENT_COUNT):
//            $cell = 0;
//            ?><!--</tr>-->
<!--        <tr>--><?//
//            endif; // if($n%$LINE_ELEMENT_COUNT == 0):
//            endforeach;
//            while ($cell < $LINE_ELEMENT_COUNT):
//                $cell++;
//                ?>
<!--                <td>&nbsp;</td>--><?//
//            endwhile;
//            ?>
<!--        </tr>-->
<!--    </table>-->
<!--</div>-->