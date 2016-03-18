<?php
namespace Craft;

class IncrementerPlugin extends BasePlugin
{
    function getName()
    {
        return Craft::t('Incrementer');
    }

    function getVersion()
    {
        return '0.0';
    }

    function getDeveloper()
    {
        return 'Craig Wann';
    }

    function getDeveloperUrl()
    {
        return 'http://craigwann.com';
    }
}