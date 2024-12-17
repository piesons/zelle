<?php
header('HTTP/1.0 500 Internal Server Error');
http_response_code(500);
die("<h1>500 Internal Server Error</h1>Additionally, a 500 Internal Server Error was encountered while trying to use an ErrorDocument to handle the request.");
