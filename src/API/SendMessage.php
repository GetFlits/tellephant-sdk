<?php

namespace Flits\Tellephant\API;

use Flits\Tellephant\TellephantProvider;

class SendMessage extends TellephantProvider {

    public $METHOD = "POST";
    public $URL = "send-message";

    function __construct($config) {
        parent::__construct($config);
    }
}
