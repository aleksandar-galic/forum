<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Thread;
use Tests\TestCase;

class ThreadTest extends TestCase
{
    use RefreshDatabase;

    protected $thread;

    public function setUp(): void
    {
        parent::setUp();

        $this->thread = create(Thread::class);
    }

    /** @test */
    public function a_thread_can_have_replies()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->thread->replies);
    }

    /** @test */
    public function a_thread_has_a_creator()
    {
        $this->assertInstanceOf('App\Models\User', $this->thread->creator);
    }

    /** @test */
    public function a_thread_can_add_a_reply()
    {
        $this->thread->addReply([
            'body' => 'Foobar',
            'user_id' => 1,
        ]);

        $this->assertCount(1, $this->thread->replies);
    }
}
