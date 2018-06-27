<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<form method="post" <?=$component->getFormClass();?> <?=$component->getFormAction();?> enctype="multipart/form-data">
    <?foreach($component->getFields() as $field):?>
        <div class="it-block find_price__block">
            <?=$component->getInput($field, array('class' => 'form-call'));?>
            <div class="it-error"></div>
        </div>
    <?endforeach;?>
    <div class="it-block it-buttons find_price__btn">
        <input type="submit" value="<?=$component->getBtnTitle()?>" class="">
    </div>
    <div class="it-block checkbox find_price__label" style="border:1px solid transparent">
        <label style="margin:5px 10px;">
            <input type="checkbox" value="1" class="checkbox-152-fz">
            <?=$component->get152FZ();?>
        </label>
    </div>
</form>

<script type="text/javascript">
    $(function() {
        formAjax.init(<?=\CUtil::PhpToJSObject($arParams);?>)
    })
</script>