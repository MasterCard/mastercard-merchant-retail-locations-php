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
        ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        $privateKey = file_get_contents(getcwd()."/mcapi_sandbox_key.p12");
        ApiConfig::setAuthentication(new OAuthAuthentication("L5BsiPgaF-O3qA36znUATgQXwJB6MRoMSdhjd7wt50c97279!50596e52466e3966546d434b7354584c4975693238513d3d", $privateKey, "alias", "password"));
    }

    
    
    
    
    
    
    
                

        public function test_example_retail_unit_metrics()
        {

            $map = new RequestMap();
            $map->set("PageOffset", "1");
            $map->set("PageLength", "10");
            $map->set("RetailUnitType", "State");
            $map->set("RetailUnitId", "4");
            

            

            $response = RetailUnitsMetrics::query($map);

            $this->customAssertValue("1", $response->get("RetailUnitMetricResponse.PageOffset"));
            $this->customAssertValue("4", $response->get("RetailUnitMetricResponse.TotalCount"));
            $this->customAssertValue("4", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RetailUnitId"));
            $this->customAssertValue("STATE", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RetailUnitType"));
            $this->customAssertValue("2016/03", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].Period"));
            $this->customAssertValue("100", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.CompositeIndustry"));
            $this->customAssertValue("All Retail", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.CompositeIndustryName"));
            $this->customAssertValue("500", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.Sales"));
            $this->customAssertValue("500", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.Transactions"));
            $this->customAssertValue("300", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.TicketSize"));
            $this->customAssertValue("700", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.Growth"));
            $this->customAssertValue("600", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.Stability"));
            $this->customAssertValue("400", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[0].RLIScores.Composite"));
            $this->customAssertValue("4", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RetailUnitId"));
            $this->customAssertValue("STATE", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RetailUnitType"));
            $this->customAssertValue("2016/03", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].Period"));
            $this->customAssertValue("102", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.CompositeIndustry"));
            $this->customAssertValue("Eating Places", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.CompositeIndustryName"));
            $this->customAssertValue("445", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.Sales"));
            $this->customAssertValue("445", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.Transactions"));
            $this->customAssertValue("334", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.TicketSize"));
            $this->customAssertValue("556", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.Growth"));
            $this->customAssertValue("556", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.Stability"));
            $this->customAssertValue("445", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[1].RLIScores.Composite"));
            $this->customAssertValue("4", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RetailUnitId"));
            $this->customAssertValue("STATE", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RetailUnitType"));
            $this->customAssertValue("2016/03", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].Period"));
            $this->customAssertValue("103", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.CompositeIndustry"));
            $this->customAssertValue("Exclude Eating", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.CompositeIndustryName"));
            $this->customAssertValue("500", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.Sales"));
            $this->customAssertValue("500", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.Transactions"));
            $this->customAssertValue("300", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.TicketSize"));
            $this->customAssertValue("700", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.Growth"));
            $this->customAssertValue("600", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.Stability"));
            $this->customAssertValue("400", $response->get("RetailUnitMetricResponse.RetailUnitMetrics.RetailUnitMetric[2].RLIScores.Composite"));
            

            self::putResponse("example_retail_unit_metrics", $response);

        }
        
    
    
}



