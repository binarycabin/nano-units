<?php

class NanoUnitsTest extends \Tests\AppTestCase
{

    public function test_convert()
    {
       	$response = \BinaryCabin\NanoUnits\NanoUnits::convert('raw','knano',1);
        $this->assertEquals(0.000000000000000000000000001,$response);
        
        $response = \BinaryCabin\NanoUnits\NanoUnits::convert('knano','raw',0.000000000000000000000000001);
        $this->assertEquals(1,$response);
        
        $response = \BinaryCabin\NanoUnits\NanoUnits::convert('ticker','knano',1);
        $this->assertEquals(1000,$response);

        $response = \BinaryCabin\NanoUnits\NanoUnits::convert('knano','ticker',1000);
        $this->assertEquals(1,$response);

        $response = \BinaryCabin\NanoUnits\NanoUnits::convert('ticker','nano',99);
        $this->assertEquals(99000000,$response);

        $response = \BinaryCabin\NanoUnits\NanoUnits::convert('ticker','Mnano',87);
        $this->assertEquals(87,$response);
    }

}