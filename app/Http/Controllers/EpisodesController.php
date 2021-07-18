<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Episode;

class EpisodesController extends BaseController
{
    public function __construct()
    {
        $this->class = Episode::class;
    }
}
