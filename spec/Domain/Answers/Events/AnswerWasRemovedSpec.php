<?php

namespace spec\App\Domain\Answers\Events;

use App\Domain\Answers\Answer\AnswerId;
use App\Domain\Answers\Events\AnswerWasRemoved;
use App\Domain\Questions\Question\QuestionId;
use PhpSpec\ObjectBehavior;

class AnswerWasRemovedSpec extends ObjectBehavior
{
    private $answerId;
    private $questionId;
    private $body;
    private $archived;
    private $acepted;

    function let()
    {
        $this->answerId = new AnswerId();
        $this->questionId = new QuestionId();
        $this->body = 'body';
        $this->archived = 'archived';
        $this->acepted = 'acepted';
        $this->beConstructedWith($this->answerId, $this->questionId, $this->body, $this->archived, $this->acepted);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(AnswerWasRemoved::class);
    }

    function it_has_a_answerId()
    {
        $this->answerId()->shouldBe($this->answerId);
    }

    function it_has_a_questionId()
    {
        $this->questionId()->shouldBe($this->questionId);
    }

    function it_has_a_body()
    {
        $this->body()->shouldBe($this->body);
    }

    function it_has_a_archived()
    {
        $this->archived()->shouldBe($this->archived);
    }

    function it_has_a_acepted()
    {
        $this->acepted()->shouldBe($this->acepted);
    }

    function it_can_be_converted_to_json()
    {
        $this->shouldBeAnInstanceOf(\JsonSerializable::class);
        $this->jsonSerialize()->shouldBe([
            'answerId' => $this->answerId,
            'questionId' => $this->questionId,
            'body' => $this->body,
            'archived' => $this->archived,
            'acepted' => $this->acepted
        ]);
    }
}
