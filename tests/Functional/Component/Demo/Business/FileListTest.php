<?php

namespace App\Tests\Functional\Component\Demo\Business;

use App\Component\Demo\Business\FileList;
use PHPUnit\Framework\TestCase;

class FileListTest extends TestCase
{
    private $dest;

    protected function setUp()
    {
        parent::setUp();
        $this->dest = __DIR__ . '/files/tmp/';
    }

    protected function tearDown()
    {
        parent::tearDown();
        exec('rm -f ' . $this->dest . '*');
    }


    public function testOneFileList()
    {
        copy(__DIR__ . '/files/test.json', __DIR__ . '/files/tmp/test.json');
        $fileList = new FileList($this->dest, 'json');
        $files = $fileList->getList();

        $this->assertCount(1, $files);
        foreach ($files as $file) {
            $this->assertSame($this->dest . '/test.json', $file);
        }

    }

    public function testFileListEmpty()
    {
        $fileList = new FileList($this->dest, 'json');
        $files = $fileList->getList();

        $this->assertCount(0, $files);
    }

    public function testMultipleFileListAsArray()
    {
        copy(__DIR__ . '/files/test.json', __DIR__ . '/files/tmp/test.json');
        copy(__DIR__ . '/files/test.json', __DIR__ . '/files/tmp/test2.json');

        $fileList = new FileList($this->dest, 'json');
        $files = $fileList->getList();

        $this->assertCount(2, $files);
        $this->assertSame($this->dest . '/test.json', $files[0]);
        $this->assertSame($this->dest . '/test2.json', $files[1]);


    }

    public function testInvalidFileExtension(): void
    {
        copy(__DIR__ . '/files/test.json', __DIR__ . '/files/tmp/test.txt');
        $fileList = new FileList($this->dest, 'json');
        $files = $fileList->getList();

        $this->assertCount(0, $files);
    }
}