<?php

#server
echo 'server';
foreach ($_SERVER as $key => $info) {
    echo $key.'--' . $info.'<br>';
}
echo '<hr>';
echo 'env';
foreach ($_POST as $key => $info) {
    echo $key.'--' . $info.'<br>';
}
echo '<hr>';
