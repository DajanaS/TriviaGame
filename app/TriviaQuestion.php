<?php

namespace App;


abstract class TriviaQuestion
{
    private $id;
    private $question;
    private $answer;
    private $value;

    /**
     * TriviaQuestion constructor.
     * @param $id integer
     * @param $question string
     * @param $answer string
     * @param $value integer
     */
    public function __construct($id, $question, $answer, $value)
    {
        $this->id = $id;
        $this->question = $question;
        $this->answer = $answer;
        $this->value = $value;
    }

    /**
     * Get the ID of the question.
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the actual question.
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * Get answer to the question.
     * @return string
     */
    public function getAnswer(): string
    {
        return $this->answer;
    }

    /**
     * Get point value of the question.
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * Check if the provided answer is correct.
     * @param $answer
     * @return integer
     */
    public function checkAnswer($answer): int
    {
        if ($answer == $this->getAnswer())
            return $this->getValue();
        return 0;
    }

    public abstract function print(): string;
}