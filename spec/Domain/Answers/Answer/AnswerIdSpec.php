<?php

namespace spec\App\Domain\Answers\Answer;

use App\Domain\Answers\Answer\AnswerId;
use PhpSpec\ObjectBehavior;

class AnswerIdSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AnswerId::class);
    }
}
