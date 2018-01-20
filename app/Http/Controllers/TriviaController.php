<?php

namespace App\Http\Controllers;

use App\FreeForm;
use App\TrueFalse;
use Illuminate\Http\Request;

class TriviaController extends Controller
{
    public function getQuestions()
    {
        $tf = new TrueFalse(1, "Am I great?", 'T', 2);
        $ff = new FreeForm(2, "How are you?", "Yes", 2);

        return collect([$tf, $ff]);
    }

    public function index()
    {
        $questions = $this->getQuestions();

        return view('welcome', compact('questions'));
    }

    public function store(Request $request)
    {
        $questions = $this->getQuestions();
        $points = 0;
        foreach ($request->get('answers') as $index => $answer) {
            $points += $questions[$index-1]->checkAnswer($answer);
        }
        return view('result', compact('points'));
    }
}
