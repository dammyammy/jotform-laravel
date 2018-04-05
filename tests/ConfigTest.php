<?php

namespace TedbreeDigital\JotForm\Tests;

class ConfigTest extends TestCase
{	
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
