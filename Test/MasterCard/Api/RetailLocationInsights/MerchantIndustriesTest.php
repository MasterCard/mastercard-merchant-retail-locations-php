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



class MerchantIndustriesTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
    
    
    
    
    
                

        public function test_example_merchant_industries()
        {
            

            

            $map = new RequestMap();
            
            
            $response = MerchantIndustries::query($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIndustries.MerchantIndustry[0].Industry", "AAC");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIndustries.MerchantIndustry[0].IndustryName", "Children's Apparel");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIndustries.MerchantIndustry[1].Industry", "AAF");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIndustries.MerchantIndustry[1].IndustryName", "Family Apparel");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIndustries.MerchantIndustry[2].Industry", "AAM");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIndustries.MerchantIndustry[2].IndustryName", "Men's Apparel");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIndustries.MerchantIndustry[3].Industry", "AAW");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIndustries.MerchantIndustry[3].IndustryName", "Women's Apparel");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIndustries.MerchantIndustry[4].Industry", "AAX");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIndustries.MerchantIndustry[4].IndustryName", "Miscellaneous Apparel");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIndustries.MerchantIndustry[5].Industry", "ACC");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIndustries.MerchantIndustry[5].IndustryName", "Accommodations");
            

            self::putResponse("example_merchant_industries", $response);
            
        }
        
    
    
}



