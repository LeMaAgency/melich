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
$data = new \Lema\Template\TemplateHelper($this);
$item = $data->item();
?>
<section class="card" <?= $item->editId(); ?>>
    <div class="flex-container flex-direction-tablet">
        <div class="card-slider">

            <div class="hamburger-btn hamburger-btn--darken">
                <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>

            <? if ($item->get("ARRAY_CHECK")): ?>
                <div class="card-slider__for slider-for">
                    <? foreach ($item->get("MORE_IMAGE") as $srcImage): ?>

                        <div class="card-slider__for-item">
                            <img src="<?= $srcImage; ?>" alt="<?= $item->getName(); ?>">
                        </div>
                    <? endforeach; ?>
                </div>
                <div class="card-slider__nav">
                    <card-slider__nav-list class="slider-nav">
                        <? foreach ($item->get("MORE_IMAGE") as $srcImage): ?>
                            <div class="card-slider__nav-item">
                                <img src="<?= $srcImage; ?>" alt="<?= $item->getName(); ?>">
                            </div>
                        <? endforeach; ?>
                    </card-slider__nav-list>
                </div>
            <? else: ?>
                <div class="card-slider__for slider-for">
                    <div class="card-slider__for-item height-auto">
                        <img class="width-inherit" src="<?= $item->get("MORE_IMAGE"); ?>"
                             alt="<?= $item->getName(); ?>">
                    </div>
                </div>
            <? endif; ?>
        </div>

        <div class="card-description">
            <? $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "breadcrumb_inner",
                Array(
                    "PATH" => "",
                    "SITE_ID" => "s1",
                    "START_FROM" => "0",
                ),
                false
            ); ?>
            <div class="heading">
                <h2 class="heading__title">
                    <?= $item->getName(); ?>
                </h2>
            </div>
            <div class="card-description__info">
                <h3 class="card-description__article">
                    <?= $item->prop("ARTICUL", NAME), ' ', $item->propVal("ARTICUL"); ?>
                </h3>
                <div class="card-description__text">
                    <p>
                        <?= $item->detailText(); ?>
                    </p>
                </div>
                <? if (!empty($item->propVal("COLOR"))): ?>
                    <div class="card-description__color block-color">
                        <? foreach ($item->prop("COLOR", VALUE_XML_ID) as $color): ?>
                            <div class="block-color__item">
                                <span class="color-<?= $color; ?>">
                                </span>
                            </div>
                        <? endforeach; ?>
                    </div>
                <? endif; ?>

                <? if (!empty($item->propVal("SIZE"))): ?>
                    <div class="card-description__size size">
                        <? foreach ($item->propVal("SIZE") as $size): ?>
                            <div class="size__item">
                                <span><?= $size; ?></span>
                            </div>
                        <? endforeach; ?>
                    </div>
                <? endif; ?>
                <div class="card-accordion">
                    <ul class="card-accordion__list">
                        <? if (!empty($item->propText("TYPE_FUR_AND_CARE"))): ?>
                            <li class="card-accordion__item">
                                <div class="card-accordion__title card-accordion__btn">
                                    <?= $item->prop("TYPE_FUR_AND_CARE", NAME); ?>
                                    <span class="icon-plus"></span>
                                </div>
                                <div class="card-accordion__content">
                                    <? if ($item->propTextType('TYPE_FUR_AND_CARE') == "HTML") {
                                        echo htmlspecialcharsBack($item->propText("TYPE_FUR_AND_CARE"));
                                    } else {
                                        echo $item->propText("TYPE_FUR_AND_CARE");
                                    }
                                    ?>
                                </div>
                            </li>
                        <? endif; ?>
                        <? if (!empty($item->propText("DELIVERY"))): ?>
                            <li class="card-accordion__item">
                                <div class="card-accordion__title card-accordion__btn">
                                    <?= $item->prop("DELIVERY", NAME); ?>
                                    <span class="icon-plus"></span>
                                </div>
                                <div class="card-accordion__content">
                                    <? if ($item->propTextType('DELIVERY') == "HTML") {
                                        echo htmlspecialcharsBack($item->propText("DELIVERY"));
                                    } else {
                                        echo $item->propText("DELIVERY");
                                    }
                                    ?>
                                </div>
                            </li>
                        <? endif; ?>
                        <? if (!empty($item->propText("PAYMENT"))): ?>
                            <li class="card-accordion__item">
                                <div class="card-accordion__title card-accordion__btn">
                                    <?= $item->prop("PAYMENT", NAME); ?>
                                    <span class="icon-plus"></span>
                                </div>
                                <div class="card-accordion__content">
                                    <? if ($item->propTextType('PAYMENT') == "HTML") {
                                        echo htmlspecialcharsBack($item->propText("PAYMENT"));
                                    } else {
                                        echo $item->propText("PAYMENT");
                                    }
                                    ?>
                                </div>
                            </li>
                        <? endif; ?>
                        <? if (!empty($item->propText("RETURN"))): ?>
                            <li class="card-accordion__item">
                                <div class="card-accordion__title card-accordion__btn">
                                    <?= $item->prop("RETURN", NAME); ?>
                                    <span class="icon-plus"></span>
                                </div>
                                <div class="card-accordion__content">
                                    <? if ($item->propTextType('RETURN') == "HTML") {
                                        echo htmlspecialcharsBack($item->propText("RETURN"));
                                    } else {
                                        echo $item->propText("RETURN");
                                    }
                                    ?>
                                </div>
                            </li>
                        <? endif; ?>
                        <? if (!empty($item->propText("AVAILABILITY_IN_SHOPS"))): ?>
                            <li class="card-accordion__item">
                                <div class="card-accordion__title card-accordion__btn">
                                    <?= $item->prop("AVAILABILITY_IN_SHOPS", NAME); ?>
                                    <span class="icon-plus"></span>
                                </div>
                                <div class="card-accordion__content">
                                    <? if ($item->propTextType('AVAILABILITY_IN_SHOPS') == "HTML") {
                                        echo htmlspecialcharsBack($item->propText("AVAILABILITY_IN_SHOPS"));
                                    } else {
                                        echo $item->propText("AVAILABILITY_IN_SHOPS");
                                    }
                                    ?>
                                </div>
                            </li>
                        <? endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>