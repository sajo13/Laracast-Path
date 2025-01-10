<?php

use Core\Authenticator;
(new Authenticator)->logout();

header('Location: /laracast-path/Day7/');
exit();