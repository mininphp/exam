<?php

include '../DTO/DTOLead.php';
include '../util/XDef.php';

use DTO\DTOLead;

echo "Post Page";

$postArray = $_POST;

$dtoLead = new DTOLead($postArray['first_name'],
                       $postArray['last_name'],
                       $postArray['phone'],
                       $postArray['email'],
                       $postArray['content'],
                       $postArray['department_id']);

echo $dtoLead;