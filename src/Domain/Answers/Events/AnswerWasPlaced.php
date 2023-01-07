<?php

namespace App\Domain\Answers\Events;

use App\Domain\AbstractEvent;
use App\Domain\Answers\Answer\AnswerId;
use App\Domain\Questions\Question\QuestionId;
use App\Domain\UserManagement\User\UserId;
use JsonSerializable;
class AnswerWasPlaced extends AbstractEvent implements JsonSerializable
{
    /**
     * Creates a AnswerWasPlaced
     *
     * @param UserId $ownerUserId
     * @param QuestionId $questionId
     * @param AnswerId $answerId
     * @param string $body
     */
    public function __construct(
        private readonly UserId $ownerUserId,
        private readonly QuestionId $questionId,
        private readonly AnswerId $answerId,
        private readonly string $body
    ) {
        parent::__construct();
    }
    /**
     * ownerUserId
     *
     * @return UserId
     */
    public function ownerUserId(): UserId
    {
        return $this->ownerUserId;
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
     * answerId
     *
     * @return AnswerId
     */
    public function answerId(): AnswerId
    {
        return $this->answerId;
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
     * jsonSerialize
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'ownerUserId' => $this->ownerUserId,
            'questionId' => $this->questionId,
            'answerId' => $this->answerId,
            'body' => $this->body,
        ];
    }
}
