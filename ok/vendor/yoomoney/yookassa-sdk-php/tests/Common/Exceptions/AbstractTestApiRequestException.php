<?php

namespace Tests\YooKassa\Common\Exceptions;

abstract class AbstractTestApiRequestException extends ApiExceptionTest
{
    /**
     * @dataProvider descriptionDataProvider
     */
    public function testDescription(string $body): void
    {
        $instance = $this->getTestInstance('', 0, [], $body);
        $tmp = json_decode($body, true);
        if (empty($tmp['description'])) {
            self::assertEquals('', $instance->getMessage());
        } else {
            self::assertEquals($tmp['description'] . '.', $instance->getMessage());
        }
    }

    public static function descriptionDataProvider()
    {
        return [
            ['{}'],
            ['{"description":"test"}'],
            ['{"description":"У попа была собака"}'],
        ];
    }

    /**
     * @dataProvider codeDataProvider
     */
    public function testCode(string $body): void
    {
        $instance = $this->getTestInstance('', 0, [], $body);
        $tmp = json_decode($body, true);
        if (empty($tmp['code'])) {
            self::assertEquals('', $instance->getMessage());
        } else {
            self::assertEquals('Error code: ' . $tmp['code'] . '.', $instance->getMessage());
        }
    }

    public static function codeDataProvider()
    {
        return [
            ['{}'],
            ['{"code":"123"}'],
            ['{"code":"server_error"}'],
        ];
    }

    /**
     * @dataProvider parameterDataProvider
     */
    public function testParameter(string $body): void
    {
        $instance = $this->getTestInstance('', 0, [], $body);
        $tmp = json_decode($body, true);
        if (empty($tmp['parameter'])) {
            self::assertEquals('', $instance->getMessage());
        } else {
            self::assertEquals('Parameter name: ' . $tmp['parameter'] . '.', $instance->getMessage());
        }
    }

    public static function parameterDataProvider()
    {
        return [
            ['{}'],
            ['{"parameter":"parameter_name"}'],
            ['{"parameter":null}'],
        ];
    }

    /**
     * @dataProvider retryAfterDataProvider
     */
    public function testRetryAfter(string $body): void
    {
        $instance = $this->getTestInstance('', 0, [], $body);
        $tmp = json_decode($body, true);
        if (empty($tmp['retry_after'])) {
            self::assertNull($instance->retryAfter);
        } else {
            self::assertEquals($tmp['retry_after'], $instance->retryAfter);
        }
    }

    public static function retryAfterDataProvider()
    {
        return [
            ['{}'],
            ['{"retry_after":-20}'],
            ['{"retry_after":123}'],
        ];
    }

    /**
     * @dataProvider typeDataProvider
     */
    public function testType(string $body): void
    {
        $instance = $this->getTestInstance('', 0, [], $body);
        $tmp = json_decode($body, true);
        if (empty($tmp['type'])) {
            self::assertNull($instance->type);
        } else {
            self::assertEquals($tmp['type'], $instance->type);
        }
    }

    public static function typeDataProvider()
    {
        return [
            ['{}'],
            ['{"type":"server_error"}'],
            ['{"type":"error"}'],
        ];
    }

    /**
     * @dataProvider messageDataProvider
     *
     * @param mixed $body
     */
    public function testMessage($body): void
    {
        $instance = $this->getTestInstance('', 0, [], $body);

        $tmp = json_decode($body, true);
        $message = '';
        if (!empty($tmp['description'])) {
            $message = $tmp['description'] . '. ';
        }
        if (!empty($tmp['code'])) {
            $message .= 'Error code: ' . $tmp['code'] . '. ';
        }
        if (!empty($tmp['parameter'])) {
            $message .= 'Parameter name: ' . $tmp['parameter'] . '. ';
        }
        self::assertEquals(trim($message), $instance->getMessage());

        if (empty($tmp['retry_after'])) {
            self::assertNull($instance->retryAfter);
        } else {
            self::assertEquals($tmp['retry_after'], $instance->retryAfter);
        }
        if (empty($tmp['type'])) {
            self::assertNull($instance->type);
        } else {
            self::assertEquals($tmp['type'], $instance->type);
        }
    }

    public static function messageDataProvider()
    {
        return [
            ['{}'],
            ['{"code":"server_error","description":"Internal server error"}'],
            ['{"code":"server_error","description":"Invalid parameter value","parameter":"shop_id"}'],
            ['{"code":"server_error","description":"Invalid parameter value","parameter":"shop_id","type":"test"}'],
            ['{"code":"server_error","description":"Invalid parameter value","parameter":"shop_id","retry_after":333}'],
        ];
    }

    abstract public function expectedHttpCode();

    public function testExceptionCode(): void
    {
        $instance = $this->getTestInstance();
        self::assertEquals($this->expectedHttpCode(), $instance->getCode());
    }

    public function testConstruct(): void
    {
        $message = 'Test message';
        $code = $this->expectedHttpCode();
        $responseHeaders = ['Content-Type' => 'application/json'];
        $responseBody = '{"type": "error", "id": "test_id", "code": "test_code", "description": "Test description", "parameter": "test_parameter"}';

        $exception = $this->getTestInstance($message, $code, $responseHeaders, $responseBody);

        $this->assertEquals($code, $exception->getCode());
        $this->assertEquals($responseHeaders, $exception->getResponseHeaders());
        $this->assertEquals($responseBody, $exception->getResponseBody());

        $this->assertEquals('test_id', $exception->getErrorId());
        $this->assertEquals('Test description. Error code: test_code. Parameter name: test_parameter.', $exception->getMessage());
        $this->assertEquals('test_code', $exception->getErrorCode());
        $this->assertEquals('Test description', $exception->getErrorDescription());
        $this->assertEquals('test_parameter', $exception->getErrorParameter());
    }
}
