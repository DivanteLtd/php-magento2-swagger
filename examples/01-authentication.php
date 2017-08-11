<?php


require_once __DIR__ . '/../vendor/autoload.php';


$configuration = new \Swagger\Magento2Client\Configuration();
$configuration->setHost('http://magento2.ibood.dev/rest');

$client = new \Swagger\Magento2Client\ApiClient($configuration);
$api = new Swagger\Magento2Client\Api\IntegrationAdminTokenServiceV1Api($client);
$body = new \Swagger\Magento2Client\Model\Body123();

try {
    $result = $api->integrationAdminTokenServiceV1CreateAdminAccessTokenPost(json_encode(
        ['username' => 'restadmin', 'password' => 'Test123']
    ));
    print_r($result);
} catch (Exception $e) {
    print_r($e);
    echo 'Exception: ', $e->getMessage(), PHP_EOL;
}
