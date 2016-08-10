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



class MerchantIndustriesTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        $privateKey = file_get_contents(getcwd()."/mcapi_sandbox_key.p12");
        ApiConfig::setAuthentication(new OAuthAuthentication("L5BsiPgaF-O3qA36znUATgQXwJB6MRoMSdhjd7wt50c97279!50596e52466e3966546d434b7354584c4975693238513d3d", $privateKey, "alias", "password"));
    }

    
    
    
    
    
    
    
                

        public function test_example_merchant_industries()
        {

            $map = new RequestMap();
            

            $response = MerchantIndustries::query($map);

            $this->customAssertValue("AAC", $response->get("MerchantIndustries.MerchantIndustry[0].Industry"));
            $this->customAssertValue("Children's Apparel", $response->get("MerchantIndustries.MerchantIndustry[0].IndustryName"));
            $this->customAssertValue("AAF", $response->get("MerchantIndustries.MerchantIndustry[1].Industry"));
            $this->customAssertValue("Family Apparel", $response->get("MerchantIndustries.MerchantIndustry[1].IndustryName"));
            $this->customAssertValue("AAM", $response->get("MerchantIndustries.MerchantIndustry[2].Industry"));
            $this->customAssertValue("Men's Apparel", $response->get("MerchantIndustries.MerchantIndustry[2].IndustryName"));
            $this->customAssertValue("AAW", $response->get("MerchantIndustries.MerchantIndustry[3].Industry"));
            $this->customAssertValue("Women's Apparel", $response->get("MerchantIndustries.MerchantIndustry[3].IndustryName"));
            $this->customAssertValue("AAX", $response->get("MerchantIndustries.MerchantIndustry[4].Industry"));
            $this->customAssertValue("Miscellaneous Apparel", $response->get("MerchantIndustries.MerchantIndustry[4].IndustryName"));
            $this->customAssertValue("ACC", $response->get("MerchantIndustries.MerchantIndustry[5].Industry"));
            $this->customAssertValue("Accommodations", $response->get("MerchantIndustries.MerchantIndustry[5].IndustryName"));
            

        }
        
    
    

    protected function customAssertValue($expected, $actual) {
        if (is_bool($actual)) {
            $this->assertEquals(boolval($expected), $actual);
        } else if (is_int($actual)) {
            $this->assertEquals(intval($expected), $actual);
        } else if (is_float($actual)) {
            $this->assertEquals(floatval($expected), $actual);
        } else {
            $this->assertEquals(strtolower($expected), strtolower($actual));
        }
    }
}



