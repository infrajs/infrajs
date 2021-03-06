<?php
namespace infrajs\controller;
use infrajs\ans\Ans;
use infrajs\path\Path;
use infrajs\view\View;
use infrajs\load\Load;
use infrajs\router\Router;

if (!is_file('vendor/autoload.php')) {
	chdir('../../../../');	
	require_once('vendor/autoload.php');
	Router::init();
}
$query = Crumb::$href;

$ans = array('title' => 'Проверки контроллера');

$composer=Load::loadJSON('-infrajs/composer.json');
$require=$composer['require'];

foreach($require as $path=>$ver){
	$p = explode('/',$path);
	$r = Path::reqif('-'.$p[1].'/infra.php');
}

$layer = array(
	'data' => 1,
	'tpl' => array('qewr{data}')
);

Crumb::change('');

$html = Controller::check($layer);

if ($html != 'qewr1') return Ans::err($ans,'Результат неожиданный '.$html);

Crumb::change($query);
View::html('', true);

return Ans::ret($ans);
