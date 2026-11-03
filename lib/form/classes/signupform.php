<?php
http_response_code(410);
header('Content-Type: text/plain; charset=UTF-8');
echo 'The legacy PHP form handler has been retired. This static GitHub Pages site requires a separately hosted form service.';
