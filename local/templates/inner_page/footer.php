<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<footer class="page-footer">
    <p class="page-footer__company">
        <? $APPLICATION->IncludeFile(SITE_DIR . 'include/footer/copyright.php'); ?>
    </p>
    <? $APPLICATION->IncludeFile(SITE_DIR . 'include/inner_page/footer/developer.php'); ?>
</footer>
</main>
</div>
</body>

</html>