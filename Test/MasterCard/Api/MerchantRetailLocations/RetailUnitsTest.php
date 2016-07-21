<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are 
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of 
 * conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its 
 * contributors may be used to endorse or promote products derived from this software 
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES 
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT 
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, 
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; 
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER 
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING 
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF 
 * SUCH DAMAGE.
 *
 */

namespace MasterCard\Api\MerchantRetailLocations;

use MasterCard\Core\Model\RequestMap;
use MasterCard\Core\ApiConfig;
use MasterCard\Core\Security\OAuth\OAuthAuthentication;



class RetailUnitsTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        $privateKey = file_get_contents(getcwd()."/mcapi_sandbox_key.p12");
        ApiConfig::setAuthentication(new OAuthAuthentication("L5BsiPgaF-O3qA36znUATgQXwJB6MRoMSdhjd7wt50c97279!50596e52466e3966546d434b7354584c4975693238513d3d", $privateKey, "alias", "password"));
    }

    
    
    
    
    
    
    
                

        public function test_example_retail_units()
        {

            $map = new RequestMap();
            
            $map->set("PageOffset", "1");
            $map->set("PageLength", "10");
            $map->set("StateId", "4");
            
            

            $response = RetailUnits::query($map);

            $this->customAssertValue("1", $response->get("RetailUnitResponse.PageOffset"));
            $this->customAssertValue("12", $response->get("RetailUnitResponse.TotalCount"));
            $this->customAssertValue("AUS", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[0].CountryCode"));
            $this->customAssertValue("AUSTRALIA", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[0].CountryName"));
            $this->customAssertValue("40194150000", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[0].MESHBLOCK"));
            $this->customAssertValue("4116903", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[0].STATAREA1"));
            $this->customAssertValue("41169", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[0].STATAREA2"));
            $this->customAssertValue("40703", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[0].STATAREA3"));
            $this->customAssertValue("407", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[0].STATAREA4"));
            $this->customAssertValue("4", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[0].STATE"));
            $this->customAssertValue("AUS", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[1].CountryCode"));
            $this->customAssertValue("AUSTRALIA", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[1].CountryName"));
            $this->customAssertValue("40037030000", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[1].MESHBLOCK"));
            $this->customAssertValue("4109126", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[1].STATAREA1"));
            $this->customAssertValue("41091", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[1].STATAREA2"));
            $this->customAssertValue("40401", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[1].STATAREA3"));
            $this->customAssertValue("404", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[1].STATAREA4"));
            $this->customAssertValue("4", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[1].STATE"));
            $this->customAssertValue("AUS", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[2].CountryCode"));
            $this->customAssertValue("AUSTRALIA", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[2].CountryName"));
            $this->customAssertValue("40113902000", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[2].MESHBLOCK"));
            $this->customAssertValue("4108404", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[2].STATAREA1"));
            $this->customAssertValue("41084", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[2].STATAREA2"));
            $this->customAssertValue("40304", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[2].STATAREA3"));
            $this->customAssertValue("403", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[2].STATAREA4"));
            $this->customAssertValue("4", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[2].STATE"));
            $this->customAssertValue("AUS", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[3].CountryCode"));
            $this->customAssertValue("AUSTRALIA", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[3].CountryName"));
            $this->customAssertValue("40115414000", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[3].MESHBLOCK"));
            $this->customAssertValue("4107315", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[3].STATAREA1"));
            $this->customAssertValue("41073", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[3].STATAREA2"));
            $this->customAssertValue("40304", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[3].STATAREA3"));
            $this->customAssertValue("403", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[3].STATAREA4"));
            $this->customAssertValue("4", $response->get("RetailUnitResponse.RetailUnits.RetailUnit[3].STATE"));
            

        }
        
    
    

    protected function customAssertValue($expected, $actual) {
        if (is_bool($actual)) {
            $this->assertEquals(boolval($expected), $actual);
        } else if (is_float($actual)) {
            $this->assertEquals(floatval($expected), $actual);
        } else {
            $this->assertEquals(strtolower($expected), strtolower($actual));
        }
    }
}



