<?php

$vendorDir = dirname(__DIR__);

return array (
  'yiisoft/yii2-swiftmailer' => 
  array (
    'name' => 'yiisoft/yii2-swiftmailer',
    'version' => '2.1.1.0',
    'alias' => 
    array (
      '@yii/swiftmailer' => $vendorDir . '/yiisoft/yii2-swiftmailer/src',
    ),
  ),
  'yiisoft/yii2-bootstrap' => 
  array (
    'name' => 'yiisoft/yii2-bootstrap',
    'version' => '2.0.8.0',
    'alias' => 
    array (
      '@yii/bootstrap' => $vendorDir . '/yiisoft/yii2-bootstrap/src',
    ),
  ),
  'yiisoft/yii2-debug' => 
  array (
    'name' => 'yiisoft/yii2-debug',
    'version' => '2.0.13.0',
    'alias' => 
    array (
      '@yii/debug' => $vendorDir . '/yiisoft/yii2-debug',
    ),
  ),
  'yiisoft/yii2-gii' => 
  array (
    'name' => 'yiisoft/yii2-gii',
    'version' => '2.0.7.0',
    'alias' => 
    array (
      '@yii/gii' => $vendorDir . '/yiisoft/yii2-gii/src',
    ),
  ),
  'yiisoft/yii2-faker' => 
  array (
    'name' => 'yiisoft/yii2-faker',
    'version' => '2.0.4.0',
    'alias' => 
    array (
      '@yii/faker' => $vendorDir . '/yiisoft/yii2-faker',
    ),
  ),
  '2amigos/qrcode-library' => 
  array (
    'name' => '2amigos/qrcode-library',
    'version' => '1.1.2.0',
    'alias' => 
    array (
      '@Da/QrCode' => $vendorDir . '/2amigos/qrcode-library/src',
    ),
  ),
  'yiisoft/yii2-httpclient' => 
  array (
    'name' => 'yiisoft/yii2-httpclient',
    'version' => '2.0.6.0',
    'alias' => 
    array (
      '@yii/httpclient' => $vendorDir . '/yiisoft/yii2-httpclient/src',
    ),
  ),
  'yiisoft/yii2-authclient' => 
  array (
    'name' => 'yiisoft/yii2-authclient',
    'version' => '2.1.5.0',
    'alias' => 
    array (
      '@yii/authclient' => $vendorDir . '/yiisoft/yii2-authclient/src',
    ),
  ),
  '2amigos/yii2-selectize-widget' => 
  array (
    'name' => '2amigos/yii2-selectize-widget',
    'version' => '1.1.0.0',
    'alias' => 
    array (
      '@dosamigos/selectize' => $vendorDir . '/2amigos/yii2-selectize-widget/src',
    ),
  ),
  '2amigos/yii2-usuario' => 
  array (
    'name' => '2amigos/yii2-usuario',
    'version' => '1.1.4.0',
    'alias' => 
    array (
      '@Da/User' => $vendorDir . '/2amigos/yii2-usuario/src/User',
    ),
    'bootstrap' => 'Da\\User\\Bootstrap',
  ),
);
