<?php

return [
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=',
            'username' => '',
            'password' => '',
            'tablePrefix' => ''
        ],
        'mailer' => [
			'useFileTransport' => true,
			'transport' => [
				'class' => 'Swift_SmtpTransport',
				'host' => 'smtp.yandex.ru',
				'username' => 'test-user',
				'password' => 'test-user-password',
				'port' => '465',
				'encryption' => 'ssl',
			],
		],
    ],
];