<? php
namespace think;
require __DIR__ . '/../thinkphp/base.php';
Container::get('route')->run()->send();
