<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<form method="post" <?=$component->getFormClass();?> <?=$component->getFormAction();?> enctype="multipart/form-data">
	<div class="form-wrap">
		<?foreach($component->getFields() as $field):?>
			<div class="it-block form-input">
				<?=$component->getInput($field, array('class' => 'form-input-control'));?>
				<div class="it-error"></div>
			</div>
		<?endforeach;?>
		<div class="it-block">
			<label class="form-checkbox">
				<input class="checkbox-152-fz form-checkbox-control" type="checkbox" name="personal">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 200 25" class="form-checkbox-svg">
					<use xlink:href="#form-checkbox-svg-line" class="form-checkbox-svg-line"></use>
					<use xlink:href="#form-checkbox-svg-box" class="form-checkbox-svg-box"></use>
					<use xlink:href="#form-checkbox-svg-check" class="form-checkbox-svg-check"></use>
					<use xlink:href="#form-checkbox-svg-circle" class="form-checkbox-svg-circle"></use>
				</svg>
				<span class="form-checkbox-text">
					<?=$component->get152FZ();?>
				</span>
			</label>
		</div>
		
		<div class="it-block ">
			<input type="submit" value="<?=$component->getBtnTitle()?>" class="btn btn-control">
		</div>
    </div>
</form>

<script type="text/javascript">
    $(function() {
        formAjax.init(<?=\CUtil::PhpToJSObject($arParams);?>)
    })
</script>