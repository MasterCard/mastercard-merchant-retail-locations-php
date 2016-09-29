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

namespace MasterCard\Api\RetailLocationInsights;

use MasterCard\Core\Model\RequestMap;
use MasterCard\Core\ApiConfig;
use MasterCard\Core\Security\OAuth\OAuthAuthentication;
use Test\BaseTest;



class RetailUnitMerchantsTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
    
    
    
    
    
                

        public function test_example_retail_unit_merchants()
        {
            

            

            $map = new RequestMap();
            $map->set("PageOffset", "1");
            $map->set("PageLength", "100");
            $map->set("RetailUnitType", "State");
            $map->set("RetailUnitId", "4");
            
            
            $response = RetailUnitMerchants::query($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.PageOffset", "1");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.TotalCount", "12");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Period", "2016/03");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].RetailUnit.CountryCode", "AUS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.Id", "74");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.Name", "PROFIX SERVICE CTR");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.ChannelOfDistribution", "B");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.Industry", "MRS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.IndustryName", "Maintenance and Repair Se");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.StreetAddress", "96 THE PARADE");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.City", "NORWOOD");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.PostalCode", "5067");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.CountrySubdivision", "SA");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.CountryCode", "AUS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.Latitude", "-34.921538");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[0].Merchant.Longitude", "138.631115");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Period", "2016/03");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].RetailUnit.CountryCode", "AUS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.Id", "75");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.Name", "DR DAVID CARMAN");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.ChannelOfDistribution", "B");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.Industry", "HCS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.IndustryName", "Health Care and Social As");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.StreetAddress", "48 KING WILLIAM ROAD");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.City", "GOODWOOD");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.PostalCode", "5034");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.CountrySubdivision", "SA");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.CountryCode", "AUS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.Latitude", "-34.948616");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[1].Merchant.Longitude", "138.599496");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Period", "2016/03");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].RetailUnit.CountryCode", "AUS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.Id", "76");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.Name", "SUNRISE CHILDREN ASSO");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.ChannelOfDistribution", "C");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.Industry", "RCP");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.IndustryName", "Religious");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.StreetAddress", "46 A ST ANNS PLACE");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.City", "PARKSIDE");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.PostalCode", "5063");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.CountrySubdivision", "SA");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.CountryCode", "AUS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.Latitude", "-34.942697");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[2].Merchant.Longitude", "138.615377");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Period", "2016/03");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].RetailUnit.CountryCode", "AUS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.Id", "77");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.Name", "BEST BUY MOTORS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.ChannelOfDistribution", "B");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.Industry", "AUC");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.IndustryName", "Automotive Used Only Car ");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.StreetAddress", "232 HAMPSTEAD ROAD");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.City", "CLEARVIEW");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.PostalCode", "5085");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.CountrySubdivision", "SA");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.CountryCode", "AUS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.Latitude", "-34.860851");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMerchantResponse.RetailUnitMerchants.RetailUnitMerchant[3].Merchant.Longitude", "138.618136");
            

            self::putResponse("example_retail_unit_merchants", $response);
            
        }
        
    
    
}



