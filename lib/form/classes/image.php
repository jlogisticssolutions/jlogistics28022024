<?php
http_response_code(410);
header('Content-Type: text/plain; charset=UTF-8');
echo 'The legacy PHP CAPTCHA endpoint has been retired.';
