<?php

if (isset($dataToView["data"]["mechanic_firstname"])) {
    echo $dataToView["data"]["mechanic_firstname"] . " " . $dataToView["data"]["mechanic_lastname"];
} else {
    echo "La herramienta esta libre";
}
