<?php

namespace App\Domain\Answers\Events;

use App\Domain\AbstractEvent;
use App\Domain\Answers\Answer\AnswerId;
use App\Domain\Questions\Question\QuestionId;

class AnswerWasChanged extends AbstractEvent implements \JsonSerializable
{
    /**
     * Creates a AnswerWasChanged
     *
     * @param AnswerId $answerId
     * @param QuestionId $questionId
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

    /**
     * answerId
     *
     * @return AnswerId
     */
    public function answerId(): AnswerId
    {
        return $this->answerId;
    }

    /**
     * questionId
     *
     * @return QuestionId
     */
    public function questionId(): QuestionId
    {
        return $this->questionId;
    }

    /**
     * body
     *
     * @return string
     */
    public function body(): string
    {
        return $this->body;
    }

    /**
     * archived
     *
     * @return string
     */
    public function archived(): string
    {
        return $this->archived;
    }

    /**
     * acepted
     *
     * @return string
     */
    public function acepted(): string
    {
        return $this->acepted;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return [
            'answerId' => $this->answerId,
            'questionId' => $this->questionId,
            'body' => $this->body,
            'archived' => $this->archived,
            'acepted' => $this->acepted,
        ];
    }
}