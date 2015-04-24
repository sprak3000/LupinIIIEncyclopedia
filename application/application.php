<?php
use Slim\Slim;
use sprak3000\lupinencyclopedia\Slim\Page;
use sprak3000\lupinencyclopedia\Slim\Middleware\KnownRedirects;

$config = array ();
$config['templates.path'] = '../template';
$config['view'] = new Page\View();

/** Create the application */
$app = new Slim($config);

/** Redirect middleware */
$app->add(new KnownRedirects());

/** Iterate over the available routes */
$dirIterator = new RecursiveDirectoryIterator("../route");
$iterator = new RecursiveIteratorIterator($dirIterator, RecursiveIteratorIterator::SELF_FIRST);
foreach ($iterator as $file) {
  if($file->isFile() && 'php' === $file->getExtension()) {
    require_once $file->getPathname();
  }
}