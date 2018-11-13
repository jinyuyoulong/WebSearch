<?php
use think\Env;

return [
    'app_status'		=> Env::get('app_status','dev'),
    'app_debug'			=> true,
    'auto_bind_module'	=> true,
    'url_route_on'		=> true,
    'url_route_must'	=> false,
    'template'          => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'         => 'Think',
        // 默认模板渲染规则 1 解析为小写+下划线 2 全部转换小写
        'auto_rule'    => 1,
        // 模板路径
        'view_path'    => '',
        // 模板后缀
        'view_suffix'  => 'html',
        // 模板文件名分隔符
        'view_depr'    => DS,
        // 模板引擎普通标签开始标记
        'tpl_begin'    => '{',
        // 模板引擎普通标签结束标记
        'tpl_end'      => '}',
        // 标签库标签开始标记
        'taglib_begin' => '{',
        // 标签库标签结束标记
        'taglib_end'   => '}',
        'layout_on'     => true,
        'layout_name'   => 'layout'
    ],
    'db_config_01'  => [
        'type'            => 'mysql',
        'hostname'        => '127.0.0.1',
        'database'        => 'course_db_config_01',
        'username'        => 'root',
        'password'        => '333',
        'hostport'        => '3306',
        'charset'         => 'utf8',
    ],
];