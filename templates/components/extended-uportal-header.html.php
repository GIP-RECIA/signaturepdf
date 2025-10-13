<?php
$dom = array(
    'pdf-online.recia.fr' => 'ent.recia.fr',
    'pdf-online.netocentre.fr' => 'lycees.netocentre.fr',
    'pdf-online.chercan.fr' => 'www.chercan.fr',
    'pdf-online.colleges-eureliens.fr' => 'www.colleges-eureliens.fr',
    'pdf-online.e-college.indre.fr' => 'e-college.indre.fr',
    'pdf-online.touraine-eschool.fr' => 'www.touraine-eschool.fr',
    'pdf-online.colleges41.fr' => 'ent.colleges41.fr',
    'pdf-online.mon-e-college.loiret.fr' => 'mon-e-college.loiret.fr',
    'pdf-online.lycees.test.recia.dev' => 'lycees.test.recia.dev',
    'pdf-online.clg18.test.recia.dev' => 'clg18.test.recia.dev',
    'pdf-online.clg28.test.recia.dev' => 'clg28.test.recia.dev',
    'pdf-online.clg36.test.recia.dev' => 'clg36.test.recia.dev',
    'pdf-online.clg37.test.recia.dev' => 'clg37.test.recia.dev',
    'pdf-online.clg41.test.recia.dev' => 'clg41.test.recia.dev',
    'pdf-online.clg45.test.recia.dev' => 'clg45.test.recia.dev',
);
?>

<extended-uportal-header
    fname="PDFOnline"
    domain="<?php echo $dom[$_SERVER['HTTP_HOST']]; ?>"
    template-api-path="/commun/portal_template_api.tpl.json"
>
</extended-uportal-header>
<script type="text/javascript" src="/resource-server/webjars/gip-recia__ui-webcomponents/dist/r-header.js"></script>
