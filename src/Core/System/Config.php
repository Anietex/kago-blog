<?php


namespace Kago\Core\System;


class Config
{

    public function getConfig(string $configKey){

        $configFile = dirname($_SERVER['DOCUMENT_ROOT'],1).'/config.json';

        if(file_exists($configFile)){
            $config = json_decode(file_get_contents($configFile));

            if(property_exists($config,$configKey)){
               return $config->$configKey;
            }

        }

        return null;
    }

}