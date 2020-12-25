<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Reply;
use Tests\TestCase;

class ReplyTest extends TestCase
{
     use RefreshDatabase;

    /** @test */
    public function it_has_an_owner()
    {
        $reply = Reply::factory()->create();

        $this->assertInstanceOf('App\Models\User', $reply->owner);
    }
}