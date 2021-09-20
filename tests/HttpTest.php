<?php


use Kodkraft\Http\Http;
use PHPUnit\Framework\TestCase;

class HttpTest extends TestCase
{
    public function test_it_should_test_code_100()
    {
        $this->assertEquals('Continue', Http::status(100));
    }

    public function test_it_should_test_code_101()
    {
        $this->assertEquals('Switching protocols', Http::status(101));
    }

    public function test_it_should_test_code_102()
    {
        $this->assertEquals('Processing', Http::status(102));
    }

    public function test_it_should_test_code_103()
    {
        $this->assertEquals('Early Hints', Http::status(103));
    }

    public function test_it_should_test_code_200()
    {
        $this->assertEquals('OK', Http::status(200));
    }

    public function test_it_should_test_code_201()
    {
        $this->assertEquals('Created', Http::status(201));
    }

    public function test_it_should_test_code_202()
    {
        $this->assertEquals('Accepted', Http::status(202));
    }

    public function test_it_should_test_code_203()
    {
        $this->assertEquals('Non-Authoritative Information', Http::status(203));
    }

    public function test_it_should_test_code_204()
    {
        $this->assertEquals('No Content', Http::status(204));
    }

    public function test_it_should_test_code_205()
    {
        $this->assertEquals('Reset Content', Http::status(205));
    }

    public function test_it_should_test_code_206()
    {
        $this->assertEquals('Partial Content', Http::status(206));
    }

    public function test_it_should_test_code_207()
    {
        $this->assertEquals('Multi-Status', Http::status(207));
    }

    public function test_it_should_test_code_208()
    {
        $this->assertEquals('Already Reported', Http::status(208));
    }

    public function test_it_should_test_code_226()
    {
        $this->assertEquals('IM Used', Http::status(226));
    }

    public function test_it_should_test_code_300()
    {
        $this->assertEquals('Multiple Choices', Http::status(300));
    }

    public function test_it_should_test_code_301()
    {
        $this->assertEquals('Moved Permanently', Http::status(301));
    }

    public function test_it_should_test_code_302()
    {
        $this->assertEquals('Found (Previously "Moved Temporarily")', Http::status(302));
    }

    public function test_it_should_test_code_303()
    {
        $this->assertEquals('See Other', Http::status(303));
    }

    public function test_it_should_test_code_304()
    {
        $this->assertEquals('Not Modified', Http::status(304));
    }

    public function test_it_should_test_code_305()
    {
        $this->assertEquals('Use Proxy', Http::status(305));
    }

    public function test_it_should_test_code_306()
    {
        $this->assertEquals('Switch Proxy', Http::status(306));
    }

    public function test_it_should_test_code_307()
    {
        $this->assertEquals('Temporary Redirect', Http::status(307));
    }

    public function test_it_should_test_code_308()
    {
        $this->assertEquals('Permanent Redirect', Http::status(308));
    }

    public function test_it_should_test_code_400()
    {
        $this->assertEquals('Bad Request', Http::status(400));
    }

    public function test_it_should_test_code_401()
    {
        $this->assertEquals('Unauthorized', Http::status(401));
    }

    public function test_it_should_test_code_402()
    {
        $this->assertEquals('Payment Required', Http::status(402));
    }

    public function test_it_should_test_code_403()
    {
        $this->assertEquals('Forbidden', Http::status(403));
    }

    public function test_it_should_test_code_404()
    {
        $this->assertEquals('Not Found', Http::status(404));
    }

    public function test_it_should_test_code_405()
    {
        $this->assertEquals('Method Not Allowed', Http::status(405));
    }

    public function test_it_should_test_code_406()
    {
        $this->assertEquals('Not Acceptable', Http::status(406));
    }

    public function test_it_should_test_code_407()
    {
        $this->assertEquals('Proxy Authentication Required', Http::status(407));
    }

    public function test_it_should_test_code_408()
    {
        $this->assertEquals('Request Timeout', Http::status(408));
    }

    public function test_it_should_test_code_409()
    {
        $this->assertEquals('Conflict', Http::status(409));
    }

    public function test_it_should_test_code_410()
    {
        $this->assertEquals('Gone', Http::status(410));
    }

    public function test_it_should_test_code_411()
    {
        $this->assertEquals('Length Required', Http::status(411));
    }

    public function test_it_should_test_code_412()
    {
        $this->assertEquals('Precondition Failed', Http::status(412));
    }

    public function test_it_should_test_code_413()
    {
        $this->assertEquals('Payload Too Large', Http::status(413));
    }

    public function test_it_should_test_code_414()
    {
        $this->assertEquals('URI Too Long', Http::status(414));
    }

    public function test_it_should_test_code_415()
    {
        $this->assertEquals('Unsupported Media Type', Http::status(415));
    }

    public function test_it_should_test_code_416()
    {
        $this->assertEquals('Range Not Satisfiable', Http::status(416));
    }

    public function test_it_should_test_code_417()
    {
        $this->assertEquals('Expectation Failed', Http::status(417));
    }

    public function test_it_should_test_code_418()
    {
        $this->assertEquals('I\'m a Teapot', Http::status(418));
    }

    public function test_it_should_test_code_421()
    {
        $this->assertEquals('Misdirected Request', Http::status(421));
    }

    public function test_it_should_test_code_422()
    {
        $this->assertEquals('Unprocessable Entity', Http::status(422));
    }

    public function test_it_should_test_code_423()
    {
        $this->assertEquals('Locked', Http::status(423));
    }

    public function test_it_should_test_code_424()
    {
        $this->assertEquals('Failed Dependency', Http::status(424));
    }

    public function test_it_should_test_code_425()
    {
        $this->assertEquals('Too Early', Http::status(425));
    }

    public function test_it_should_test_code_426()
    {
        $this->assertEquals('Upgrade Required', Http::status(426));
    }

    public function test_it_should_test_code_428()
    {
        $this->assertEquals('Precondition Required', Http::status(428));
    }

    public function test_it_should_test_code_429()
    {
        $this->assertEquals('Too Many Requests', Http::status(429));
    }

    public function test_it_should_test_code_431()
    {
        $this->assertEquals('Request Header Fields Too Large', Http::status(431));
    }

    public function test_it_should_test_code_451()
    {
        $this->assertEquals('Unavailable For Legal Reasons', Http::status(451));
    }

    public function test_it_should_test_code_500()
    {
        $this->assertEquals('Internal Server Error', Http::status(500));
    }

    public function test_it_should_test_code_501()
    {
        $this->assertEquals('Not Implemented', Http::status(501));
    }

    public function test_it_should_test_code_502()
    {
        $this->assertEquals('Bad Gateway', Http::status(502));
    }

    public function test_it_should_test_code_503()
    {
        $this->assertEquals('Service Unavailable', Http::status(503));
    }

    public function test_it_should_test_code_504()
    {
        $this->assertEquals('Gateway Timeout', Http::status(504));
    }

    public function test_it_should_test_code_505()
    {
        $this->assertEquals('HTTP Version Not Supported', Http::status(505));
    }

    public function test_it_should_test_code_506()
    {
        $this->assertEquals('Variant Also Negotiates', Http::status(506));
    }

    public function test_it_should_test_code_507()
    {
        $this->assertEquals('Insufficient Storage', Http::status(507));
    }

    public function test_it_should_test_code_508()
    {
        $this->assertEquals('Loop Detected', Http::status(508));
    }

    public function test_it_should_test_code_510()
    {
        $this->assertEquals('Not Extended', Http::status(510));
    }

    public function test_it_should_test_code_511()
    {
        $this->assertEquals('Network Authentication Required', Http::status(511));
    }
}
