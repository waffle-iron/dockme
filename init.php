<?php

require_once "config/Config.php";

$config = $di['config'];
foreach ($config->availableServiceList as $serviceName => $serviceOptionHash) {
    shell_exec('sudo docker rm -f ' . $config->projectName . '-' . $serviceName);
}