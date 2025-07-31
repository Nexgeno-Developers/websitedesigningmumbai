<?php
function get_seo_data($page) {
    $jsonPath = __DIR__ . '/seo.json';
    if (!file_exists($jsonPath)) return null;

    $json = file_get_contents($jsonPath);
    $data = json_decode($json, true);

    return $data[$page] ?? [
        'title' => ' Website Design Mumbai',
        'description' => 'Default description for our web design services in Mumbai.'
    ];
}
?>