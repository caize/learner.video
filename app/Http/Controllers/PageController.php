<?php

namespace Learner\Http\Controllers;

use Learner\Http\Controllers\BaseController;

class PageController extends BaseController
{
    public function index()
    {
        return view('pages.index');
    }
}
