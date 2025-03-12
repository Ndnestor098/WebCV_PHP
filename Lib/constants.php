<?php

function render(string $file, array $data = []) {
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $data[$key] = json_decode(json_encode($value));
        }
    }

    extract($data);

    require_once "../Resource/View/" . $file . ".php";
}
