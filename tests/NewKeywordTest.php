<?php

namespace Tests;

use Acme\Services\Logger;
use PHPUnit\Framework\TestCase;

class NewKeywordTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->SUT = new Logger;
    }

    /** @test */
    public function here_is_why_new_keyword_is_problematic(): void
    {
        $this->assertContains('Cloud', $this->SUT->info());
        // but what now when I want to write to Local storage?
        // $this->assertContains('Local', $this->SUT->info());
    }
}
