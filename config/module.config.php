<?php

return array(
    'view_helpers' => array(
        'factories' => array(
            'headLinkCdn' => 'CdnLight\View\Helper\Service\HeadLinkCdnFactory',
            'headScriptCdn' => 'CdnLight\View\Helper\Service\HeadScriptCdnFactory',
        ),
    ),
    'cdn_light' => array(
        'servers' => array(
            'static_1' => array(
                'scheme' => 'http',
                'host' => 'server1.com',
                'port' => 80,
            ),
            'static_2' => array(
                'scheme' => 'http',
                'host' => 'server2.com',
                'port' => 80,
            ),
            'static_3' => array(
                'scheme' => 'http',
                'host' => 'server3.com',
                'port' => 80,
            ),
        ),
    ),
);
