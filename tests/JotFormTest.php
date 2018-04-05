<?php

namespace TedbreeDigital\JotForm\Tests;

class JotFormTest extends TestCase
{
	public function testPopulateExpectedServices() {
		$this->assertObjectHasAttribute('apiVersion', $this->app->make('jotform'));
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
	
	
	public function getForms($offset = 0, $limit = 0, $filter = null, $orderby = null) {

	}
	
	public function getSubmissions($offset = 0, $limit = 0, $filter = null, $orderby = null) {

	}	
	
    public function updateSettings($settings) {

	}

	public function getHistory($action = null, $date = null, $sortBy = null, $startDate = null, $endDate = null) {

	}
	
	public function getForm($formID) {

	}
	
	public function getFormQuestions($formID) {

	}
	
	public function getFormQuestion($formID, $qid) {

	}
	
	
	public function getFormSubmissions($formID, $offset = 0, $limit = 0, $filter = null, $orderby = null) {
		
	}
	
	public function createFormSubmission($formID, $submission) {
		
	}
	
	public function createFormSubmissions($formID, $submissions) {
		
	}
	
	public function getFormFiles($formID) {
		
	}
	
	
	public function getFormWebhooks($formID) {
		
	}
	
	public function createFormWebhook($formID, $webhookURL) {
		
	}
	
	public function deleteFormWebhook($formID, $webhookID) {
		
	}
	
	
	public function getSubmission($sid) {
		
	}
	
	
	public function getReport($reportID) {
		
	}
	
	
	public function getFolder($folderID) {
		
	}
	
	public function getFormProperties($formID) {
		
	}
	
	public function getFormProperty($formID, $propertyKey) {
		
	}
	
	public function getFormReports($formID) {
		
	}
	
	public function createReport($formID, $report) {
		
	}
	
	public function deleteSubmission($sid) {
		
	}
	
	public function editSubmission($sid, $submission) {
		
	}
	
	public function cloneForm($formID) {
		
	}
	
	public function deleteFormQuestion($formID, $qid) {
		
	}
	
	public function createFormQuestion($formID, $question) {
		
	}
	
	public function createFormQuestions($formID, $questions) {
		
	}
	
	public function editFormQuestion($formID, $qid, $questionProperties) {
		
	}
	
	
	public function setFormProperties($formID, $formProperties) {
		
	}
	
	
	public function setMultipleFormProperties($formID, $formProperties) {
		
	}
	
	
	public function createForm($form) {
		
	}
	
	public function createForms($forms) {
		
	}
	
	
	public function deleteForm($formID) {
		
	}
	
	public function registerUser($userDetails) {
		
	}
	
	public function loginUser($credentials) {
		
	}
	
	public function logoutUser() {
		
	}
	
	
	public function getPlan($planName) {
		
	}
	
	
	public function deleteReport($reportID) {
		
	}
}
