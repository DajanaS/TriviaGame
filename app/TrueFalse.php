<?php

namespace App;


class TrueFalse extends TriviaQuestion
{
    public function __construct(int $id, string $question, string $answer, int $value)
    {
        parent::__construct($id, $question, $answer, $value);
    }

    public function print(): string
    {
        return "<label for='{$this->getId()}'>{$this->getQuestion()}.<br />Enter 'T' for true or 'F' for false.</label><br /><input type='text' name='answers[{$this->getId()}]' /><br /><br />";
    }
}