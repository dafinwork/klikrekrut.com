<?php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$app->make('Illuminate\Contracts\Http\Kernel')->handle(Illuminate\Http\Request::capture());

$packages = collect([]);
$html = view('home', compact('packages'))->render();
file_put_contents(__DIR__.'/output_empty.html', $html);
echo "HTML written to output_empty.html\n";
