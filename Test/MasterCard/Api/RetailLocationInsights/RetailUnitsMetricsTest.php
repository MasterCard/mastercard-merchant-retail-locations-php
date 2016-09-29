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



class RetailUnitsMetricsTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
    
    
    
    
    
                

        public function test_example_retail_unit_metrics()
        {
            

            

            $map = new RequestMap();
            $map->set("PageOffset", "1");
            $map->set("PageLength", "10");
            $map->set("RetailUnitType", "State");
            $map->set("RetailUnitId", "4");
            
            
            $response = RetailUnitsMetrics::query($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.PageOffset", "1");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.TotalCount", "4");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RetailUnitId", "4");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RetailUnitType", "STATE");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].Period", "2016/03");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.CompositeIndustry", "100");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.CompositeIndustryName", "All Retail");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.Sales", "500");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.Transactions", "500");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.TicketSize", "300");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.Growth", "700");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.Stability", "600");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.Composite", "400");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RetailUnitId", "4");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RetailUnitType", "STATE");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].Period", "2016/03");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.CompositeIndustry", "102");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.CompositeIndustryName", "Eating Places");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.Sales", "445");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.Transactions", "445");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.TicketSize", "334");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.Growth", "556");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.Stability", "556");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.Composite", "445");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RetailUnitId", "4");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RetailUnitType", "STATE");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].Period", "2016/03");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.CompositeIndustry", "103");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.CompositeIndustryName", "Exclude Eating");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.Sales", "500");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.Transactions", "500");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.TicketSize", "300");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.Growth", "700");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.Stability", "600");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.Composite", "400");
            

            self::putResponse("example_retail_unit_metrics", $response);
            
        }
        
    
    
}



