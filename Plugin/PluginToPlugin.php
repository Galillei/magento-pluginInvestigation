<?php
/**
 * Created by PhpStorm.
 * User: artsemmiklashevich
 * Date: 2019-03-12
 * Time: 10:50
 */

namespace MagentoPlus\PluginInvestigation\Plugin;

class PluginToPlugin
{
    public function beforeBeforeGetP(
        \MagentoPlus\PluginInvestigation\Plugin\AddressDefenderPlugin $subject,
                                     \MagentoPlus\PluginInvestigation\Model\OriginalModel $subject1,
                                     $name
    ) {
        return [$subject1, 'beforeBeforeP/' . $name];
    }
}
