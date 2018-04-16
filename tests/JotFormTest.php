<?php

namespace TedbreeDigital\JotForm\Tests;

class JotFormTest extends TestCase
{
	public function testPopulateExpectedServices() {
		$this->assertObjectHasAttribute('apiVersion', $this->app->make('jotform'));
	}
	
	public function testLoadsConfig() {
		$this->assertEquals('v1', \Config::get('jotform.version'));
		$this->assertEquals('v1', config('jotform.version'));
		$this->assertArrayHasKey('region', $this->app['config']['jotform']);
	}
	
	
	public function testGetsUser() {
		$this->assertArrayHasKey('username', \JotForm::getUser());
	}
	
	public function testGetSubusers() {
		$this->assertInternalType('array', \JotForm::getSubusers());
	}
	
	public function testGetFolders() {
		$this->assertEquals('You do not have any folders', \JotForm::getFolders());
	}
	
	public function testGetReports() {
		$this->assertInternalType('array', \JotForm::getReports());
	}
	
	public function testGetSettings() {
		$this->assertArrayHasKey('username', \JotForm::getSettings());
	}
	
	public function testGetUsage() {
		$this->assertInternalType('array', \JotForm::getUsage());
	}
	
	public function testGetForms() {
		$this->assertInternalType('array', \JotForm::getForms());
	}
}
