<?php return array(
    'root' => array(
        'name' => 'myvendor/myproject',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '7ec47e6dd2f99fa76388f4b33b4d09cfd8256618',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'monolog/monolog' => array(
            'pretty_version' => '3.8.1',
            'version' => '3.8.1.0',
            'reference' => 'aef6ee73a77a66e404dd6540934a9ef1b3c855b4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../monolog/monolog',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'myvendor/myproject' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '7ec47e6dd2f99fa76388f4b33b4d09cfd8256618',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/log' => array(
            'pretty_version' => '3.0.2',
            'version' => '3.0.2.0',
            'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '3.0.0',
            ),
        ),
    ),
);
