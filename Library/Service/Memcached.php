<?php
/**
 * User: cjimenez
 * Date: 21/11/16 11:06
 */

namespace Service;

class Memcached extends ServiceGeneric {

    public function getYml()
    {
        $config = $this->di['config'];

        return $config->projectName . '-'. $this->getName() . ':
  image: phpdockerio/memcached:latest
  container_name: ' . $config->projectName . '-'. $this->getName() . ''
            . "\n";
    }

}