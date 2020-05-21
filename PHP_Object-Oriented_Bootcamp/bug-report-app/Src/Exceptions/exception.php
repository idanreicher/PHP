<?php
set_error_handler([new \App\Exceptions\ExceptionHandler() , 'warningsNoticesToException']);
set_exception_handler([new \App\Exceptions\ExceptionHandler() , 'handle']);
