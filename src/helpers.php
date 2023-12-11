<?php

require __DIR__ . '/Sanitize.php';

if ( !function_exists('sanitizeText') ) {
    function sanitize($text)
    {
        $sanitizedText = strip_tags($text); // SQL injection protection
        $sanitizedText = trim($sanitizedText); // Remove spaces from beginning and end of string
        return $sanitizedText;
    }
}