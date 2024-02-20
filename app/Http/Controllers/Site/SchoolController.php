<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\getStudent;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    protected getStudent $getStudentSchool;
    public function __construct(getStudent $getStudentSchool)
    {
        $this->getStudentSchool = $getStudentSchool;
    }

    public function getScores($school)
    {
        if($school === 'sebastiao-pedrosa') {
            return $this->getScoresSebastiaoPedrosa();
        }
        return $this->getScoresBoaUniao();
    }

    public function getScoresSebastiaoPedrosa()
    {
        $allStudents = $this->getStudentSchool->getBestScoresSebastiaoPedrosa();

        return view('site.sebastiaoPedrosa', compact('allStudents'));
    }

    public function getScoresBoaUniao()
    {
        $allStudents = $this->getStudentSchool->getBestScoresBoaUniao();

        return view('site.boaUniao', compact('allStudents'));
    }
}
