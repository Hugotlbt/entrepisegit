<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

const BASE_PROJET = __DIR__;
?>