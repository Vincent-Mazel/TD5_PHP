<?php

    require 'classes/Cache.php';

    $cache = new Cache('index');
    $cache->cacheView();

    $cache->startBuffer();
    echo 'Le corps de ma page';
    $cache->endBuffer();

    echo 'Version sans cache !';

    $cache->cacheView();
?>