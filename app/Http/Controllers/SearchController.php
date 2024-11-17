<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $jobs = Jobs::where('title', 'LIKE', '%' . request('q') . '%')->get();

        return view('results', ['jobs' => $jobs]);
    }
}
