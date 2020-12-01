<?php

    session_start();
    session_unset();            // The session_unset() function frees all session variables currently registered.
    session_destroy();          // session_destroy() destroys all of the data associated with the current session. It does not unset any of the global variables associated with the session, or unset the session cookie. To use the session variables again, session_start() has to be called.

    header("location: ../index.php");
    exit();