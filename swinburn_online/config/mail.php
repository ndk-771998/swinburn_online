<?php
return [
    "driver"   => "smtp",
    "host"     => "smtp.mailtrap.io",
    "port"     => 2525,
    "from"     => array(
        "address" => "from@example.com",
        "name"    => "Example",
    ),
    "username" => "024a6df787a0b7",
    "password" => "6065cb8489e801",
    "sendmail" => "/usr/sbin/sendmail -bs",
];
