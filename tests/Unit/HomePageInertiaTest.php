<?php

namespace Tests\Unit;

use Inertia\Testing\AssertableInertia as Assert;
use Tests\TestCase;

class HomePageInertiaTest extends TestCase
{
    /**
     * A basic test for the home page.
     */
    public function test_the_home_page_has_compiled_and_has_correct_props(): void
    {
        $this->withoutExceptionHandling();

        $this->get('/')
            ->assertInertia(fn (Assert $page) => $page
                ->has('properties')
                ->has('cities')
            );

        $this->assertTrue(true);
    }
}
