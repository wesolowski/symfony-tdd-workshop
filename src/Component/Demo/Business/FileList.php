<?php


namespace App\Component\Demo\Business;


class FileList
{

    private $path = NULL;

    private $ext = '';

    /**
     */
    public function __construct(string $path, string $extension)
    {
        $this->path = $path;
        $this->ext = $extension;
    }

    public function getList() : array
    {
        $list = [];
        foreach (glob($this->path . '/*.' . $this->ext) as $filename) {
            $list[] = $filename;
        }

        return $list;

    }
}