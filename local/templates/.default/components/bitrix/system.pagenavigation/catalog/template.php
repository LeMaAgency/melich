<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

$this->setFrameMode(true);

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>

<div class="pagination">
    <ul class="pagination__list">
        <? if ($arResult["bDescPageNumbering"] === true): ?>

            <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
                <? if ($arResult["bSavePage"]): ?>
                    <li class="pagination__item">
                        <a class="pagination__link"
                           href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>">
                            1
                        </a>
                    </li>
                <? else: ?>
                    <li class="pagination__item">
                        <a class="pagination__link"
                           href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>">
                            1
                        </a>
                    </li>
                <? endif ?>
            <? else: ?>
                <li class="pagination__item">
                    <span class="pagination__link is-active">
                        1
                    </span>
                </li>
            <? endif ?>

            <?
            $arResult["nStartPage"]--;
            while ($arResult["nStartPage"] >= $arResult["nEndPage"] + 1):
                ?>
                <? $NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1; ?>

                <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
                <li class="pagination__item">
                    <span class="pagination__link is-active">
                        <?= $NavRecordGroupPrint ?>
                    </span>
                </li>
            <? else: ?>
                <li class="pagination__item">
                    <a class="pagination__link"
                       href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>">
                        <?= $NavRecordGroupPrint ?>
                    </a>
                </li>
            <? endif ?>

                <? $arResult["nStartPage"]-- ?>
            <? endwhile ?>

            <? if ($arResult["NavPageNomer"] > 1): ?>
                <? if ($arResult["NavPageCount"] > 1): ?>
                    <li class="pagination__item">
                        <a class="pagination__link"
                           href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=1">
                            <?= $arResult["NavPageCount"] ?>
                        </a>
                    </li>
                <? endif ?>
            <? else: ?>
                <? if ($arResult["NavPageCount"] > 1): ?>
                    <li class="pagination__item">
                        <span class="pagination__link is-active">
                            <?= $arResult["NavPageCount"] ?>
                        </span>
                    </li>
                <? endif ?>
            <? endif ?>

        <? else: ?>

            <? if ($arResult["NavPageNomer"] > 1): ?>
                <? if ($arResult["bSavePage"]): ?>
                    <li class="pagination__item">
                        <a class="pagination__link"
                           href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=1">
                            1
                        </a>
                    </li>
                <? else: ?>
                    <li class="pagination__item">
                        <a class="pagination__link"
                           href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>">
                            1
                        </a>
                    </li>
                <? endif ?>
            <? else: ?>
                <li class="pagination__item">
                    <span class="pagination__link is-active">1</span>
                </li>
            <? endif ?>

            <?
            $arResult["nStartPage"]++;
            while ($arResult["nStartPage"] <= $arResult["nEndPage"] - 1):
                ?>
                <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
                <li class="pagination__item">
                    <span class="pagination__link is-active"><?= $arResult["nStartPage"] ?></span>
                </li>
            <? else: ?>
                <li class="pagination__item">
                    <a class="pagination__link"
                       href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>">
                        <?= $arResult["nStartPage"] ?>
                    </a>
                </li>
            <? endif ?>
                <? $arResult["nStartPage"]++ ?>
            <? endwhile ?>

            <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
                <? if ($arResult["NavPageCount"] > 1): ?>
                    <li class="pagination__item">
                        <a class="pagination__link"
                           href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageCount"] ?>">
                            <?= $arResult["NavPageCount"] ?>
                        </a>
                    </li>
                <? endif ?>
            <? else: ?>
                <? if ($arResult["NavPageCount"] > 1): ?>
                    <li class="pagination__item">
                        <span class="pagination__link is-active"><?= $arResult["NavPageCount"] ?></span>
                    </li>
                <? endif ?>
            <? endif ?>
        <? endif ?>

        <? if ($arResult["bShowAll"]): ?>
            <? if ($arResult["NavShowAll"]): ?>
                <li class="bx-pag-all">
                    <a class="pagination__link"
                       href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>SHOWALL_<?= $arResult["NavNum"] ?>=0"
                       rel="nofollow"><? echo GetMessage("round_nav_pages") ?>
                    </a>
                </li>
            <? else: ?>
                <li class="bx-pag-all">
                    <a class="pagination__link"
                       href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>SHOWALL_<?= $arResult["NavNum"] ?>=1"
                       rel="nofollow"><? echo GetMessage("round_nav_all") ?>
                    </a>
                </li>
            <? endif ?>
        <? endif ?>
    </ul>
</div>
