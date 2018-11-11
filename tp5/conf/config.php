<?php
use think\Env;

return [
    'app_status'		=> Env::get('app_status','dev'),
    'auto_bind_module'	=> true
];