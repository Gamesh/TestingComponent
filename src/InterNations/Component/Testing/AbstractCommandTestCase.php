<?php
namespace InterNations\Component\Testing;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\KernelInterface;

abstract class AbstractCommandTestCase extends AbstractTestCase
{
    /** @var CommandTester */
    protected $commandTester;

    /** @var ContainerInterface */
    protected $container;

    /** @var KernelInterface */
    protected $kernel;

    /** @var Application */
    protected $application;

    public function setUp(): void
    {
        parent::setUp();

        $this->container = $this->createMock(ContainerInterface::class);
        $this->kernel = $this->createConfiguredMock(
            KernelInterface::class,
            ['getContainer' => $this->container, 'getBundles' => []]
        );

        $this->application = new Application($this->kernel);
    }
}
