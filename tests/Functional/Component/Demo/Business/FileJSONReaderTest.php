<?php


namespace App\Tests\Functional\Component\Demo\Business;


use App\Component\Demo\Business\FileJSONReader;
use PHPUnit\Framework\TestCase;

class FileJSONReaderTest extends TestCase
{
    private $validFile;
    private $invalidFile;

    protected function setUp()
    {
        parent::setUp();

        $this->validFile = __DIR__ . '/files/test.json';
        $this->invalidFile = __DIR__ . '/files/test2.json';
    }

    public function testReadJSONValid() {
        $fileReader = new FileJSONReader();

        $jsonArray = $fileReader->read($this->validFile);
        $this->assertSame(['artnum' => 13245], $jsonArray);
    }

    /**
     * @expectedException \Exception
     */
    public function testReadJSONInvalid() {
        $fileReader = new FileJSONReader();
        $jsonArray = $fileReader->read($this->invalidFile);
    }
}