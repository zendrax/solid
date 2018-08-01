<?php

namespace Tests;

use Acme\Services\Uploader;
use PHPUnit\Framework\TestCase;

class StaticMethodsTest extends TestCase
{
    /** @var Uploader $SUT */
    protected $SUT;

    protected function setUp()
    {
        parent::setUp();
        $this->SUT = new Uploader;
    }

    /** @test */
    public function here_is_why_statics_are_problematic(): void
    {
        $this->assertContains('Cloud', $this->SUT->info());
        // but what now when I want to write to Local storage?
        // $this->assertContains('Local', $this->SUT->info());
    }
}
