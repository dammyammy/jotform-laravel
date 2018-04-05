<?php

namespace TedbreeDigital\JotForm\Tests;

use Orchestra\Testbench\TestCase;

class ConfigTest extends TestCase
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
	
	
	public function testPopulateExpectedServices() {
		$this->assertObjectHasAttribute('apiVersion', $this->app->make('jotform'));
	}
	
	public function testLoadsConfigFacade() {
		$this->assertEquals('v1', \Config::get('jotform.api_version'));
	}
	
	public function testLoadsConfigHelper() {
		$this->assertEquals('v1', config('jotform.api_version'));
	}
	
	public function testPopulateExpectedJotFormDefaults() {
		
		$this->assertArrayHasKey('api_version', $this->app['config']['jotform']);
	}
}
