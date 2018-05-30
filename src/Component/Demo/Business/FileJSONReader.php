<?php


namespace App\Component\Demo\Business;


class FileJSONReader
{
    public function read(string $filePath): array
    {
        $fileContent = file_get_contents($filePath);
        $data = json_decode($fileContent, true);
        if ($data === null){
            throw new \Exception();
        }

        return $data;
    }
}