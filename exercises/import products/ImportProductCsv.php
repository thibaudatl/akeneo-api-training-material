<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$clientBuilder = new \Akeneo\PimEnterprise\ApiClient\AkeneoPimEnterpriseClientBuilder('http://localhost:8080');
$client = $clientBuilder->buildAuthenticatedByPassword(
    '1_2k5qe1n6rwmc4kk84wcwso4okogw4k88kg08c8k4ows0ows8s0',
    '42gbibx481mowwwwwc84c4gkosog8okws8gk88s4oc0w8cw08k',
    'leo_9943',
    'bb46cee75'
);

$productProperties = ["sku", "family", "categories"];

$handle = fopen("exercises/import products/product.csv", "r");

$lineNumber = 0;

while ($modelLine = fgetcsv($handle, 0, ";")) {
    if($lineNumber === 0){
        // process for the header
        foreach($modelLine as $index => $attr){
            // With the 1st line of the CSV, we are building the template of a product
        }
        continue;
    }

    foreach($modelLine as $index => $value){
        // Process for the data
    }
    file_put_contents("productToSave.json", json_encode("MY JSON HERE"));  # save in JSON in a file
    fputcsv($handle, "my data here", ";");
    sendDataToAPI($client, "my json here");
}



function sendDataToAPI($client, $product){
    try {
        # Use upsert method on getProductApi() to patchthe product
    } catch (\Akeneo\Pim\ApiClient\Exception\UnprocessableEntityHttpException $e) {
        echo "Unprocessable\n";
        echo $e->getMessage();
        foreach ($e->getResponseErrors() as $error) {
            echo $error['property'] ."\n";
            echo $error['message']."\n";
        }
    } catch (\Akeneo\Pim\ApiClient\Exception\UnauthorizedHttpException $e) {
        echo "Unauthorized\n";
    } catch (\Akeneo\Pim\ApiClient\Exception\NotFoundHttpException $e) {
        echo "Not Found\n";
    } catch (Akeneo\Pim\ApiClient\Exception\ServerErrorHttpException $e) {
        if (is_iterable($e->getMessage())) {
            foreach($e->getMessage() as $error) {
                var_dump($error);
            }
        } else {
            var_dump($e->getMessage());
        }
    }
}
