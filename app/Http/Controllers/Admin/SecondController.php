<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/*
class SecondController extends Controller
{
    public function showString() {
        return 'static controller';
    }
}
*/

class SecondController extends Controller 
{
    public function __construct() {
        $this -> middleware ( 'auth')->except ( 'showString2') ;
    }
    public function showString0() {
        return 'staticString0';
    }
    public function showString1() {
        return 'staticString1';
    }
    public function showString2() {
        return 'staticString2';
    }
    public function showString3() {
        return 'staticString3';
    }
}
