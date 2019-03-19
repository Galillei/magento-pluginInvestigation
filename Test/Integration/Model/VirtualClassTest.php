<?php
/**
 * Created by PhpStorm.
 * User: artsemmiklashevich
 * Date: 2019-02-19
 * Time: 11:54
 */

namespace MagentoPlus\PluginInvestigation\Test\Integration\Model;

use MagentoPlus\PluginInvestigation\Model\OriginalModel;

class VirtualClassTest extends \PHPUnit\Framework\TestCase
{
    protected $objectManager;

    protected function setUp()
    {
        /**
         * @var \Magento\TestFramework\ObjectManager
         **/
        $this->objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
    }

    public function testOriginalModel()
    {
        /**
         * @var OriginalModel $model
         */
        $model = $this->objectManager->get(\MagentoPlus\PluginInvestigation\Model\OriginalModel::class);
        $this->assertEquals('realClass', $model->getName());
        $this->assertEquals('realClass', $model->getFactoryName());
        $this->assertEquals('realClass', $model->getProxyName());
    }
    public function testVirtualModel()
    {
        /**
         * @var OriginalModel $model
         */
        $model = $this->objectManager->get(\Test\VirtualType::class);
        $this->assertEquals('virtual-class', $model->getName());
    }

    public function testVirtualFactoryModel()
    {
        /**
         * @var OriginalModel $model
         */
        self::expectException(\RuntimeException::class);
        $model = $this->objectManager->get(\Test\VirtualClassFactory::class);
    }

    public function testVirtualProxyModel()
    {
        /**
         * @var OriginalModel $model
         */
        self::expectException(\RuntimeException::class);
        $model = $this->objectManager->get(\Test\VirtualClassProxy::class);
    }
}
