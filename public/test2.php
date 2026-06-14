<?php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$app->make('Illuminate\Contracts\Http\Kernel')->handle(Illuminate\Http\Request::capture());

$packages = App\Models\Package::all();
$html = view('home', compact('packages'))->render();
if (strpos($html, 'Bedah CV bersama kak andi') !== false) {
    echo "PACKAGE IS IN HTML\n";
} else {
    echo "PACKAGE NOT FOUND IN HTML\n";
}
