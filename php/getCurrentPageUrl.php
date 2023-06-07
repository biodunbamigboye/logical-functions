<?php
function getCurrentPageUrl(): string
{
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

/*

Author : Biodun Bamigboye(biodunbamigboye@eportalnet.com)
Lead Developer at Eportal Net(eportalnet.com)
This function can easily retrieve browser the url of the current page.
Majorly useful in traditional websites.
Error log in api.
and any other relevant use cases

*/
