<?php
function unsetSession()
{        
    
        $_SESSION = array();
        if (ini_get("session.use_cookies"))
        {
            $params = session_get_cookie_params();
            setcookie
            (
                session_name(), '', time() - 1000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );    
        }
    session_unset(); 
    session_destroy();
} 
