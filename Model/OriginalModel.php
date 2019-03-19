<?php
/**
 * Created by PhpStorm.
 * User: artsemmiklashevich
 * Date: 2019-02-19
 * Time: 11:50
 */

namespace MagentoPlus\PluginInvestigation\Model;

class OriginalModel
{
    /**
     * @var VirtualClassInterface
     */
    private $virtualClass;
    /**
     * @var VirtualClassInterfaceFactory
     */
    private $virtualClassFactory;
    /**
     * @var VirtualClassInterface\Proxy
     */
    private $proxy;

    /**
     * OriginalModel constructor.
     * @param VirtualClassInterface $virtualClass
     * @param VirtualClassInterfaceFactory $virtualClassFactory
     */
    public function __construct(
        VirtualClassInterface $virtualClass,
                                VirtualClassInterfaceFactory $virtualClassFactory,
                                VirtualClassInterface\Proxy $proxy
    ) {
        $this->virtualClass = $virtualClass;
        $this->virtualClassFactory = $virtualClassFactory;
        $this->proxy = $proxy;
    }

    public function getName()
    {
        return $this->virtualClass->getName();
    }

    public function getFactoryName()
    {
        return $this->virtualClassFactory->create()->getName();
    }

    public function getProxyName()
    {
        return $this->proxy->getName();
    }

    public function get($name)
    {
        return $name;
    }


    public function getP($name)
    {
        return $name;
    }
}
