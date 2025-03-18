<?php
function adminer_object() {
    include_once "./plugins/plugin.php";

    foreach (glob("plugins/*.php") as $filename) {
        include_once "./$filename";
    }

    $plugins = array(
        new AdminerCodemirror(),
    );


    return new AdminerPlugin($plugins);
}

include "./adminer-test.php";
