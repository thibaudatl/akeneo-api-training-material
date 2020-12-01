<?php

require_once __DIR__ . '/vendor/autoload.php';

$clientBuilder = new \Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientBuilder('https://HOSTNAME_SERVER.com');
$client = $clientBuilder->buildAuthenticatedByPassword(
    'API_CLIENT_ID',
    'API_CLIENT_SECRET',
    'USERNAME',
    'PASSWORD'
);

# link to the API documentation on Assets: https://api.akeneo.com/api-reference-index.html#AssetManager



# this method returns a string containing the header "Asset-media-file-code"
$uRI_LOCATION = $client->getAssetMediaFileApi()->create("IMG pATH"); # to send the image to Akeneo

# $uRI_LOCATION is important, see doc

# Use Upsert method to update/create the asset



