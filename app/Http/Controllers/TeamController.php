<?php

namespace App\Http\Controllers;

use App\Services\Facades\TeamFacade;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = TeamFacade::get()['teams'];
        return view("pages.teams.teams", compact("teams"));
    }
}
