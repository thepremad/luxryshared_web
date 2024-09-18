<?php
$env = env('APP_ENV');

$offer = [
    '' => "Choose",
    1 => "Fix Amount",
    2 => "Percent",
];

return [
    "OFFER" => $offer,
];