<?php

namespace App\Component\Demo\Communication\Controller;

use App\Component\Demo\Business\FakeInfoInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Data extends Controller
{
    /**
     * @var FakeInfoInterface
     */
    private $fakeInfo;

    /**
     * @param FakeInfoInterface $fakeInfo
     */
    public function __construct(FakeInfoInterface $fakeInfo)
    {
        $this->fakeInfo = $fakeInfo;
    }

    /**
     * @Route("/data", name="component_demo_communication_controller_data")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Component/Demo/Communication/Controller/Data.php',
            'info' => $this->fakeInfo->getInfo()
        ]);
    }
}
