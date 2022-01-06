<?php

/**
 * This file is part of the facebook-php-sdk
 * Copyright (c) 2022 Stanislav Janů (https://janu.software)
 */

declare(strict_types=1);

namespace JanuSoftware\FacebookSDK;


use GuzzleHttp\ClientInterface;


class Client
{
	public const GraphUrl = 'https://graph.facebook.com/';


	public function __construct(
		/** @phpstan-ignore-next-line */
		private ClientInterface $client,
	) {
	}
}
