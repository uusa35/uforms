<?php
/**
 * Created by PhpStorm.
 * User: usamaahmed
 * Date: 10/17/16
 * Time: 1:21 PM
 */

namespace Usama\Uforms;


use App\Http\Controllers\Controller;

class UformsController extends Controller
{

    public function index()
    {
        $header = 'test from the package usama/uforms';
        return view('uforms::index', compact('header'));
    }
}