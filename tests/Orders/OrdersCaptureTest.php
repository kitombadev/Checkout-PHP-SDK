<?php



namespace Test\Orders;

use PayPalCheckoutSdk\Requests\Orders\OrdersCaptureRequest;
use PHPUnit\Framework\TestCase;

use Test\TestHarness;


class OrdersCaptureTest extends TestCase
{

    public function testOrdersCaptureRequest()
    {
        $this->markTestSkipped("Need an approved Order ID to execute this test.");
        $request = new OrdersCaptureRequest('ORDER-ID');

        $client = TestHarness::client();
        $response = $client->execute($request);
        $this->assertEquals(201, $response->statusCode);
        $this->assertNotNull($response->result);
    }
}
