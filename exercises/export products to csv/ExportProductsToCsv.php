<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$clientBuilder = new \Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientBuilder('http://localhost:8080');
$client = $clientBuilder->buildAuthenticatedByPassword(
    '1_2k5qe1n6rwmc4kk84wcwso4okogw4k88kg08c8k4ows0ows8s0',
    '42gbibx481mowwwwwc84c4gkosog8okws8gk88s4oc0w8cw08k',
    'leo_9943',
    'bb46cee75'
);


$searchBuilder = new \Akeneo\Pim\ApiClient\Search\SearchBuilder();

$searchBuilder->addFilter("SOME PARAMETERS HERE", "");
$searchFilters = $searchBuilder->getFilters();

# Here call the API to retrieve products

$handle = fopen("file.csv");

foreach ($products as $product) {

    echo $product['identifier'];
    fputcsv($handle, ["data"], ";");
}

fclose($handle);