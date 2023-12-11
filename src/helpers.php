<?php

if ( !function_exists('sanitizeText') ) {
    function sanitizeText($text)
    {
        $sanitizedText = strip_tags($text); // SQL injection protection
        $sanitizedText = trim($sanitizedText); // Remove spaces from beginning and end of string
        return $sanitizedText;
    }
}