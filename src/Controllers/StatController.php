<?php

namespace Max\SecurityAuditBot\Controllers;


use Illuminate\Support\Facades\View;

class StatController
{
    public function index(){
        $test = 'test string';
        return View::make('views::stat', compact('test'));
    }
}
