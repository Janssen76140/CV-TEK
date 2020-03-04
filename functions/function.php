<?php
function isLogged()
{
    $roles = array('utilisateur', 'admin', 'recruteur');
    if (!empty ($_SESSION['login'])) {
        if (!empty($_SESSION['login']['id']) && filter_var($_SESSION['login']['id'], FILTER_VALIDATE_INT)) {
            if (!empty($_SESSION['login']['nom']) && is_string($_SESSION['login']['nom'])) {
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
