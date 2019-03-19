<?php
/**
 * Created by PhpStorm.
 * User: artsemmiklashevich
 * Date: 2019-02-18
 * Time: 11:07
 */

namespace MagentoPlus\PluginInvestigation\Test\Integration\Plugin;

class AddressDefenderPluginTest extends \PHPUnit\Framework\TestCase
{
    protected $objectManager;

    protected function setUp()
    {
        /**
         * @var \Magento\TestFramework\ObjectManager
         **/
        $this->objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
    }

    /**
     * @magentoCache all disabled
     */
    public function testExists()
    {
        $pluginList = $this->objectManager->create(\Magento\TestFramework\Interception\PluginList::class);
        $pluginInfo = $pluginList->get(\Magento\Customer\Api\AddressRepositoryInterface::class);
        $this->assertEquals(\MagentoPlus\PluginInvestigation\Plugin\AddressDefenderPlugin::class, $pluginInfo['deprecated_delete_address']['instance']);
    }


    public function testBeforeAroundGetPlugin()
    {

        $model = $this->objectManager->create(\MagentoPlus\PluginInvestigation\Model\OriginalModel::class);
        $this->assertEquals('AddressDefenderPlugin::aroundBeforeProceed/AddressDefenderPlugin::before/test/AddressDefenderPlugin::aroundAfterProceed/', $model->get('test'));
    }

    public function testP()
    {

        $model = $this->objectManager->create(\MagentoPlus\PluginInvestigation\Model\OriginalModel::class);
        $this->assertEquals('beforeP/beforeBeforeP/P', $model->getP('P'));
    }
}
