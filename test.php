<?php

include "vendor/autoload.php";
include "GPBMetadata/Demonstration.php";
include "Oneoferror/Demonstration.php";
include "Oneoferror/Demonstration/SubMessage.php";

$d = new Oneoferror\Demonstration([
    'sub_message' => new Oneoferror\Demonstration\SubMessage
]);