<?php
	require_once('../include/class.debug.php');
	require_once('../include/global.php');
	require_once('simpletest/autorun.php');

	class AllTests extends TestSuite {
		function AllTests() {
			$this->TestSuite('All Tests');
			$this->addFile('debug.php');
			$this->addFile('hooks.php');
			$this->addFile('templates.php');
		}
	}