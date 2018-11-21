<?php
namespace Psr\SimpleCache;

use Provider;

/*
 * Делаю вызов на получение значения ключа используя внутри
 * цепочку поставщиков данных
 */

echo (new Provider())->get('ТанукиОффер');

?>