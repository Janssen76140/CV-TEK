<?php

function debug($tableau)
{
    echo '<pre>';
    print_r($tableau);
    echo '</pre>';
}

function clean ($string)
{
    return trim(strip_tags($string));
}

function isLogged()
{
    $roles = array('rechercheur', 'admin', 'recruteur');
    if (!empty ($_SESSION['login'])) {
        if (!empty($_SESSION['login']['id']) && filter_var($_SESSION['login']['id'], FILTER_VALIDATE_INT)) {
            if (!empty($_SESSION['login']['pseudo']) && is_string($_SESSION['login']['pseudo'])) {
                if (!empty($_SESSION['login']['role']) && is_string($_SESSION['login']['role'])) {
                    if (in_array($_SESSION['login']['role'], $roles)) {
                        if (!empty($_SESSION['login']['ip']) && $_SERVER['REMOTE_ADDR'] == $_SESSION['login']['ip']) {
                            return true;
                        }
                    }
                }
            }
        }
    }
    return false;
}

function isAdmin()
{
    if (isLogged()) {
        if (!empty($_SESSION['login']['role'] === 'admin')) {
            return true;
        }
    }
    return false;
}
