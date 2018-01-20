<?php

namespace App;


class FreeForm extends TriviaQuestion
{

    public function __construct(int $id, string $question, string $answer, int $value)
    {
        parent::__construct($id, $question, $answer, $value);
    }

    public function print(): string
    {
        return "<label for='{$this->getId()}'>{$this->getQuestion()}</label><br /><input type='text' name='answers[{$this->getId()}]' /><br /><br />";
    }
}