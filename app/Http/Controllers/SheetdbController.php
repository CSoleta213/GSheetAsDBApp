<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SheetDB\SheetDB;

class SheetdbController extends Controller
{
    public function get() {
        $sheetdb = new SheetDB('htyfo96wxnuia', 'Sheet1');
        dd($sheetdb->get());
    }

    public function create() {
        $sheetdb = new SheetDB('htyfo96wxnuia', 'Sheet1');
        dd($sheetdb->create(['name' => 'test name']));
    }
}
