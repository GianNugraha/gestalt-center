<?php

$selfdata = array(
    "Bimo Nasuti" => array(
        "mob" => "654544455",
        "email" => "bimonasuti@gmail.com",
        "hp" => "08123456787",
    ),
    "Bom Bomi" => array(
        "mob" => "1231354897",
        "email" => "bombomi@gmail.com",
    ),
    "Yuni Salam" => array(
        "mob" => "512512662",
        "email" => "yunisalam@gmail.com",
        "hp" => "08123456787",
    )
);

foreach ($selfdata as $name => $data) {
    if (!isset($data['hp'])) {
        $data["hp"] = "Tidak Memiliki No Handphone";
    }
    print_r($data);
    echo "<br/>";
}
?>