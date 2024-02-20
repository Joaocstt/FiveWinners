<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class getStudent
{
    public function getBestScoresSebastiaoPedrosa(): LengthAwarePaginator
    {
        return User::query()->whereHas('score', function ($query) {
            $query->whereHas('school', function ($query) {
                $query->where('name', 'Sebastião Pedrosa');
            });
        })
            ->with(['score' => function ($query) {
                $query->with('school')->select('user_id', 'school_id', 'scores');
            }])
            ->with('school')
            ->orderByDesc(function ($query) {
                $query->from('scores')
                    ->whereColumn('user_id', 'users.id')
                    ->selectRaw('SUM(scores)');
            })->where('role', '!=', 'admin')
            ->paginate(10);

    }

    public function getBestScoresBoaUniao(): LengthAwarePaginator
    {
        return User::query()->whereHas('score', function ($query) {
            $query->whereHas('school', function ($query) {
                $query->where('name', 'Boa União');
            });
        })
            ->with(['score' => function ($query) {
                $query->with('school')->select('user_id', 'school_id', 'scores');
            }])
            ->with('school')
            ->orderByDesc(function ($query) {
                $query->from('scores')
                    ->whereColumn('user_id', 'users.id')
                    ->selectRaw('SUM(scores)');
            })->where('role', '!=', 'admin')
            ->paginate(10);

    }

}
