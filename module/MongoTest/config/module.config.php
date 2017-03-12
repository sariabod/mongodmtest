<?php


namespace MongoTest;

return [
		'service_manager' => [
				'aliases' => [
						Service\MongoServiceInterface::class => Service\MongoService::class,


				],
				'factories' => [
						Service\MongoService::class => Factory\MongoServiceFactory::class,
				],
		],
];

