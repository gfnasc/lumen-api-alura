<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Serie;

class SeriesController extends BaseController
{
    public function __construct()
    {
        $this->class = Serie::class;
    }
}
