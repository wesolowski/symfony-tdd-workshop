<?php
# https://symfony.com/doc/current/testing/doctrine.html#functional-testing

namespace App\Tests\Functional\Component\Demo\Persistence;


use App\Component\Demo\Persistence\DataInfo;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DataInfoRepositoryTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();

        $this->createTestData();
    }

    public function testCreateRecord()
    {
        /** @var DataInfo[] $products */
        $products = $this->entityManager
            ->getRepository(DataInfo::class)
            ->findAll();

        $this->assertCount(1, $products);
        $this->assertSame(['unit-test'], $products[0]->getData());
    }

    protected function tearDown()
    {
        parent::tearDown();

        $sql = 'DELETE FROM data_info';
        $this->entityManager->getConnection()->prepare($sql)->execute();

        $this->entityManager->close();
        $this->entityManager = null; // avoid memory leaks
    }

    protected function createTestData(): void
    {
        $dataInfo = new DataInfo();
        $dataInfo->setData(['unit-test']);

        $this->entityManager->persist($dataInfo);
        $this->entityManager->flush();
    }
}