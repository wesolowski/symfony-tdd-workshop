<?php


namespace App\Component\Demo\Business;


class FakeInfo implements FakeInfoInterface
{
    /**
     * @var string
     */
    private $infoFromConfig;

    /**
     * @param $infoFromConfig
     */
    public function __construct(string $infoFromConfig)
    {
        $this->infoFromConfig = $infoFromConfig;
    }

    /**
     * @return string
     */
    public function getInfo() : string
    {
        return 'Info: ' . $this->infoFromConfig;
    }
}