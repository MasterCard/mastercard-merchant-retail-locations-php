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



class RetailUnitMerchantsTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        $privateKey = file_get_contents(getcwd()."/mcapi_sandbox_key.p12");
        ApiConfig::setAuthentication(new OAuthAuthentication("L5BsiPgaF-O3qA36znUATgQXwJB6MRoMSdhjd7wt50c97279!50596e52466e3966546d434b7354584c4975693238513d3d", $privateKey, "alias", "password"));
    }

    
    
    
    
    
    
    
                

        public function test_example_retail_unit_merchants()
        {

            $map = new RequestMap();
            
            $map->set("PageOffset", "1");
            $map->set("PageLength", "100");
            $map->set("RetailUnitType", "State");
            $map->set("RetailUnitId", "4");
            
            

            $response = RetailUnitMerchants::query($map);

            $this->customAssertValue("1", $response->get("RetailUnitMerchantResponse.PageOffset"));
            $this->customAssertValue("12", $response->get("RetailUnitMerchantResponse.TotalCount"));
            $this->customAssertValue("2016/03", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Period"));
            $this->customAssertValue("AUS", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].RetailUnit.CountryCode"));
            $this->customAssertValue("4", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].RetailUnit.STATE"));
            $this->customAssertValue("401", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].RetailUnit.STATAREA4"));
            $this->customAssertValue("40105", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].RetailUnit.STATAREA3"));
            $this->customAssertValue("41017", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].RetailUnit.STATAREA2"));
            $this->customAssertValue("4101711", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].RetailUnit.STATAREA1"));
            $this->customAssertValue("40108111000", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].RetailUnit.MESHBLOCK"));
            $this->customAssertValue("74", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.Id"));
            $this->customAssertValue("PROFIX SERVICE CTR", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.Name"));
            $this->customAssertValue("B", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.ChannelOfDistribution"));
            $this->customAssertValue("MRS", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.Industry"));
            $this->customAssertValue("Maintenance and Repair Se", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.IndustryName"));
            $this->customAssertValue("96 THE PARADE", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.StreetAddress"));
            $this->customAssertValue("NORWOOD", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.City"));
            $this->customAssertValue("5067", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.PostalCode"));
            $this->customAssertValue("SA", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.CountrySubdivision"));
            $this->customAssertValue("AUS", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.CountryCode"));
            $this->customAssertValue("-34.921538", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.Latitude"));
            $this->customAssertValue("138.631115", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.Longitude"));
            $this->customAssertValue("2016/03", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Period"));
            $this->customAssertValue("AUS", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].RetailUnit.CountryCode"));
            $this->customAssertValue("4", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].RetailUnit.STATE"));
            $this->customAssertValue("401", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].RetailUnit.STATAREA4"));
            $this->customAssertValue("40107", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].RetailUnit.STATAREA3"));
            $this->customAssertValue("41023", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].RetailUnit.STATAREA2"));
            $this->customAssertValue("4102324", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].RetailUnit.STATAREA1"));
            $this->customAssertValue("40199100000", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].RetailUnit.MESHBLOCK"));
            $this->customAssertValue("75", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.Id"));
            $this->customAssertValue("DR DAVID CARMAN", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.Name"));
            $this->customAssertValue("B", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.ChannelOfDistribution"));
            $this->customAssertValue("HCS", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.Industry"));
            $this->customAssertValue("Health Care and Social As", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.IndustryName"));
            $this->customAssertValue("48 KING WILLIAM ROAD", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.StreetAddress"));
            $this->customAssertValue("GOODWOOD", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.City"));
            $this->customAssertValue("5034", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.PostalCode"));
            $this->customAssertValue("SA", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.CountrySubdivision"));
            $this->customAssertValue("AUS", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.CountryCode"));
            $this->customAssertValue("-34.948616", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.Latitude"));
            $this->customAssertValue("138.599496", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.Longitude"));
            $this->customAssertValue("2016/03", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Period"));
            $this->customAssertValue("AUS", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].RetailUnit.CountryCode"));
            $this->customAssertValue("4", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].RetailUnit.STATE"));
            $this->customAssertValue("401", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].RetailUnit.STATAREA4"));
            $this->customAssertValue("40107", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].RetailUnit.STATAREA3"));
            $this->customAssertValue("41024", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].RetailUnit.STATAREA2"));
            $this->customAssertValue("4102410", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].RetailUnit.STATAREA1"));
            $this->customAssertValue("40195940000", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].RetailUnit.MESHBLOCK"));
            $this->customAssertValue("76", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.Id"));
            $this->customAssertValue("SUNRISE CHILDREN ASSO", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.Name"));
            $this->customAssertValue("C", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.ChannelOfDistribution"));
            $this->customAssertValue("RCP", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.Industry"));
            $this->customAssertValue("Religious", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.IndustryName"));
            $this->customAssertValue("46 A ST ANNS PLACE", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.StreetAddress"));
            $this->customAssertValue("PARKSIDE", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.City"));
            $this->customAssertValue("5063", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.PostalCode"));
            $this->customAssertValue("SA", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.CountrySubdivision"));
            $this->customAssertValue("AUS", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.CountryCode"));
            $this->customAssertValue("-34.942697", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.Latitude"));
            $this->customAssertValue("138.615377", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.Longitude"));
            $this->customAssertValue("2016/03", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Period"));
            $this->customAssertValue("AUS", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].RetailUnit.CountryCode"));
            $this->customAssertValue("4", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].RetailUnit.STATE"));
            $this->customAssertValue("402", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].RetailUnit.STATAREA4"));
            $this->customAssertValue("40203", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].RetailUnit.STATAREA3"));
            $this->customAssertValue("41036", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].RetailUnit.STATAREA2"));
            $this->customAssertValue("4103632", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].RetailUnit.STATAREA1"));
            $this->customAssertValue("40143600000", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].RetailUnit.MESHBLOCK"));
            $this->customAssertValue("77", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.Id"));
            $this->customAssertValue("BEST BUY MOTORS", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.Name"));
            $this->customAssertValue("B", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.ChannelOfDistribution"));
            $this->customAssertValue("AUC", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.Industry"));
            $this->customAssertValue("Automotive Used Only Car ", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.IndustryName"));
            $this->customAssertValue("232 HAMPSTEAD ROAD", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.StreetAddress"));
            $this->customAssertValue("CLEARVIEW", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.City"));
            $this->customAssertValue("5085", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.PostalCode"));
            $this->customAssertValue("SA", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.CountrySubdivision"));
            $this->customAssertValue("AUS", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.CountryCode"));
            $this->customAssertValue("-34.860851", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.Latitude"));
            $this->customAssertValue("138.618136", $response->get("RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.Longitude"));
            

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



