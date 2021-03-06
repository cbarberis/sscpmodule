<?php
class CPEnvironmentTest extends SapphireTest {
	
	function testGetLatLon() {
		$result = CPEnvironment::getLatLon('kyoto');
		$expected = array('lat' => 35.1061038125824, 'lon' => 135.727367242386);
		
		$this->assertEquals($expected, $result);
	}
	
	function testGetNearestLocation() {
		$cpenvironment = CPEnvironmentStub::getCPEnvironment();
		$result = $cpenvironment->getNearestLocation();
		$expected = 'osaka';
		
		$this->assertEquals($expected, $result);
	}
	
}