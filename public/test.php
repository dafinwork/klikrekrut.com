<?php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$app->make('Illuminate\Contracts\Http\Kernel')->handle(Illuminate\Http\Request::capture());

$packages = App\Models\Package::all();
echo count($packages) . " packages found.";
foreach($packages as $p) {
    echo $p->title . " (" . $p->type . ")<br>";
}
