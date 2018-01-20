<?php

namespace App;


class TrueFalse extends TriviaQuestion
{
    public function __construct(string $question, string $answer, int $value)
    {
        parent::__construct($question, $answer, $value);
    }

    public function print(): string
    {
        return $this->getQuestion() . "\nEnter 'T' for true or 'F' for false.\n";
    }
}