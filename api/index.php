<?php

header('Access-Control-Allow-Origin: https://wedding-fitria-jaelani.vercel.app');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

/**
 * Redirect request to public
 * 
 * Vercel + PHP
 */

require_once __DIR__ . '/../public/index.php';
