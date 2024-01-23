<?php

use includes\session;


if (isset($Sign_out) && $Sign_out == 'out') {session::destroy();}