<?php

namespace TedbreeDigital\JotForm\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
	protected function setUp() {
		parent::setUp();
	}
	
	protected function getPackageProviders($app) {
		return [ \TedbreeDigital\JotForm\ServiceProvider::class ];
	}
	
	protected function getPackageAliases($app) {
		return [ "JotForm" => \TedbreeDigital\JotForm\Facade::class ];
	}
}
