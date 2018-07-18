<?php

function base_url($file) {
    return "http://localhost/project/".$file;
}
function compressCSS($css)
{
    return str_replace('; ',';',str_replace(' }','}',str_replace('{ ','{',str_replace(array("\r\n","\r","\n","\t",'  ','    ','    '),"",preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!','',$css)))));
}
function compressJs($javascript)
{
    $blocks = array('for', 'while', 'if', 'else');
    $javascript = preg_replace('/([-\+])\s+\+([^\s;]*)/', '$1 (+$2)', $javascript);
    // remove new line in statements
    $javascript = preg_replace('/\s+\|\|\s+/', ' || ', $javascript);
    $javascript = preg_replace('/\s+\&\&\s+/', ' && ', $javascript);
    $javascript = preg_replace('/\s*([=+-\/\*:?])\s*/', '$1 ', $javascript);
    // handle missing brackets {}
    foreach ($blocks as $block) {
        $javascript = preg_replace(
        '/(\s*\b' . $block . '\b[^{\n]*)\n([^{\n]+)\n/i',
    '$1{$2}',
        $javascript
    );
    }
    // handle spaces
    $javascript = preg_replace(
        array("/\s*\n\s*/", "/\h+/"),
        array("\n", " "),
    $javascript
    ); // \h+ horizontal white space
    $javascript = preg_replace(
        array('/([^a-z0-9\_])\h+/i', '/\h+([^a-z0-9\$\_])/i'),
    '$1',
        $javascript
    );
    $javascript = preg_replace('/\n?([[;{(\.+-\/\*:?&|])\n?/', '$1', $javascript);
    $javascript = preg_replace('/\n?([})\]])/', '$1', $javascript);
    $javascript = str_replace("\nelse", "else", $javascript);
    $javascript = preg_replace("/([^}])\n/", "$1;", $javascript);
    $javascript = preg_replace("/;?\n/", ";", $javascript);
    return $javascript;
}