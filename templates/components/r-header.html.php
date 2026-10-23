<?php require_once('r-common.php'); ?>

<r-header
    fname="PDFOnline"
    <?php if ($domain !== null): ?>
        domain="<?= htmlspecialchars($domain, ENT_QUOTES, 'UTF-8') ?>"
    <?php endif; ?>
    template-api-url="/commun/portal_template_api.tpl.json"
>
</r-header>
<script type="text/javascript" src="/resource-server/webjars/gip-recia__ui-webcomponents/dist/r-header.js"></script>
