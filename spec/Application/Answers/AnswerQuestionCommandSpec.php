<?php

namespace spec\App\Application\Answers;

use App\Application\Answers\AnswerQuestionCommand;
use PhpSpec\ObjectBehavior;
use App\Domain\UserManagement\User\UserId;
use App\Domain\Questions\Question\QuestionId;
use App\Domain\Answers\Answer\AnswerId;
use App\Application\Command;


class AnswerQuestionCommandSpec extends ObjectBehavior
{
    private $ownerUserId;
    private $questionId;
    private $answerId;
    private $body;

    function let()
    {
        $this->ownerUserId = new UserId();
        $this->questionId = new QuestionId();
        $this->answerId = new AnswerId();
        $this->body = 'Some text as body...';
        $this->beConstructedWith(
            $this->ownerUserId,
            $this->questionId,
            $this->answerId,
            $this->body
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(AnswerQuestionCommand::class);
    }

    function its_a_command()
    {
        $this->shouldBeAnInstanceOf(Command::class);
    }

    function it_has_a_ownerUserId()
    {
        $this->ownerUserId()->shouldBe($this->ownerUserId);
    }

    function it_has_a_questionId()
    {
        $this->questionId()->shouldBe($this->questionId);
    }

    function it_has_a_answerId()
    {
        $this->answerId()->shouldBe($this->answerId);
    }

    function it_has_a_body()
    {
        $this->body()->shouldBe($this->body);
    }
}
