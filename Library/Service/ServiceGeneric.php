<?php
/**
 * User: cjimenez
 * Date: 21/11/16 11:03
 */

namespace Service;


use Pimple\Container;

class ServiceGeneric {

    /**
     * @var Container
     */
    public $di;

    public function getName() {
        return __CLASS__;
    }

    public function __construct(Container $di)
    {
        $this->di = $di;
    }
}