<?php

namespace spec\App\Domain\Answers\Events;

use App\Domain\AbstractEvent;
use App\Domain\Answers\Answer\AnswerId;
use App\Domain\Answers\Events\AnswerWasPlaced;
use App\Domain\Questions\Question\QuestionId;
use App\Domain\UserManagement\User\UserId;
use PhpSpec\ObjectBehavior;
use Symfony\Contracts\EventDispatcher\Event;

class AnswerWasPlacedSpec extends ObjectBehavior
{
    private $ownerUserId;
    private $questionId;
    private $answerId;
    private $body;


    public function let()
    {
        $this->ownerUserId = new UserId();
        $this->questionId = new QuestionId();
        $this->answerId = new AnswerId();
        $this->body = 'A long text as body...';
        $this->beConstructedWith(
            $this->ownerUserId,
            $this->questionId,
            $this->answerId,
            $this->body
        );
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(AnswerWasPlaced::class);
    }

    public function it_is_an_abstract_event()
    {
        $this->shouldBeAnInstanceOf(AbstractEvent::class);
    }

    public function it_has_a_question_id()
    {
        $this->questionId()->shouldBeAnInstanceOf(QuestionId::class);
    }

    public function it_has_an_answer_id()
    {
        $this->answerId()->shouldBeAnInstanceOf(AnswerId::class);
    }

    public function it_has_a_body()
    {
        $this->body()->shouldBeString();
    }
}
