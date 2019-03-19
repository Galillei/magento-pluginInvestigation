<?php
/**
 * Created by PhpStorm.
 * User: artsemmiklashevich
 * Date: 2019-02-18
 * Time: 11:03
 */

namespace MagentoPlus\PluginInvestigation\Plugin;


class AddressDefenderPlugin
{
    public function beforeGet($subject, $name)
    {
        return ['AddressDefenderPlugin::before/'.$name];
    }

    public function aroundGet($subject, $proceed, $name)
    {
        $name = 'AddressDefenderPlugin::aroundBeforeProceed/'.$name;
        $name = $proceed($name);
        return $name.'/AddressDefenderPlugin::aroundAfterProceed/';
    }


    public function beforeGetP( \MagentoPlus\PluginInvestigation\Model\OriginalModel $subject, $name)
    {
        return ['beforeP/'.$name];
    }
}