<?php
namespace App\Services\Services;

use App\Models\Team;
use App\Services\Constructor\TeamConstructor;

class TeamService implements TeamConstructor
{
    public function get()
    {
        $teams = Team::all();
        return [
            "teams" => $teams
        ];
    }
}