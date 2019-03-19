<?php
/**
 * Created by PhpStorm.
 * User: artsemmiklashevich
 * Date: 2019-02-19
 * Time: 11:51
 */

namespace MagentoPlus\PluginInvestigation\Model;


class VirtualClass implements VirtualClassInterface
{

    /**
     * @var string
     */
    private $name;

    public function getName()
    {
        return $this->name;
    }

    /**
     * VirtualClass constructor.
     * @param string $name
     */
    public function __construct($name = 'realClass')
    {

        $this->name = $name;
    }
}