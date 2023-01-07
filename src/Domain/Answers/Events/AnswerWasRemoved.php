<?php

namespace App\Domain\Answers\Events;

use App\Domain\AbstractEvent;
use App\Domain\Answers\Answer\AnswerId;
use App\Domain\Questions\Question\QuestionId;

class AnswerWasRemoved extends AbstractEvent implements \JsonSerializable
{
    /**
     * Creates a AnswerWasRemoved
     *
     * @param string $answerId
     * @param string $questionId
     * @param string $body
     * @param string $archived
     * @param string $acepted
     */
    public function __construct(
        private readonly AnswerId $answerId,
        private readonly QuestionId $questionId,
        private readonly string $body,
        private readonly string $archived,
        private readonly string $acepted
    ) {
        parent::__construct();
    }

    public function answerId(): AnswerId
    {
        return $this->answerId;
    }

    public function questionId(): QuestionId
    {
        return $this->questionId;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function archived(): string
    {
        return $this->archived;
    }

    public function acepted(): string
    {
        return $this->acepted;
    }

    public function jsonSerialize(): array
    {
        return [
            'answerId' => $this->answerId,
            'questionId' => $this->questionId,
            'body' => $this->body,
            'archived' => $this->archived,
            'acepted' => $this->acepted
        ];
    }
}