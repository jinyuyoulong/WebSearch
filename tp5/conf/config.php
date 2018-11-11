<?php
use think\Env;

return [
    'app_status'		=> Env::get('app_status','dev'),
    'app_debug'			=> true,
    'auto_bind_module'	=> true,
    'url_route_on'		=> true,
    'url_route_must'	=> false,
    
];