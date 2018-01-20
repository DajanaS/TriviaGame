<?php

namespace App;


class FreeForm extends TriviaQuestion
{

    public function __construct(string $question, string $answer, int $value)
    {
        parent::__construct($question, $answer, $value);
    }

    public function print(): string
    {
        return $this->getQuestion() . "\n";

    }
}