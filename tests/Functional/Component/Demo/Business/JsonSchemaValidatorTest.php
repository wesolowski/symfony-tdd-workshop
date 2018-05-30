<?php


namespace App\Tests\Functional\Component\Demo\Business;


use App\Component\Demo\Business\FileJSONReader;
use App\Component\Demo\Business\JsonSchemaValidator;
use PHPUnit\Framework\TestCase;

class JsonSchemaValidatorTest extends TestCase
{
    public function testJsonSchemaValidatorCanCheckJson() {
        $validator = new JsonSchemaValidator(__DIR__ . '/files/schema.json');
        $jsonFile = (new FileJSONReader())->read(__DIR__ . '/files/test3.json');
        $this->assertTrue($validator->validate($jsonFile));
    }

}