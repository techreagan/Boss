<?php 

function url_for($script) {
  if($script[0] != '/') {
    $script = '/' . $script;
  }

  return URLROOT . $script;
}

function h($string) {
  return htmlspecialchars($string);
}

function u($url) {
  return urlencode($url);
}

function raw_u($url) {
  return rawurlencode($url);
}

function redirect($url) {
  header('Location: ' . url_for($url));
  exit;
}

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] === 'GET';
}

function get_and_clear_message() {
  if((isset($_SESSION['message'])) && ($_SESSION['message'] !== '')) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
    return $message;
  }
}

function get_random_string() {
  return bin2hex(openssl_random_pseudo_bytes(32));
}