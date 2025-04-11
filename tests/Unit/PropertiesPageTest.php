<?php

namespace Tests\Unit;

use Inertia\Testing\AssertableInertia as Assert;
use Tests\TestCase;

class PropertiesPageTest extends TestCase
{
    /**
     * A basic test for the renting properties page.
     */
    public function test_the_renting_properties_page(): void
    {
        $this->withoutExceptionHandling();

        $this->get('/alquilar')
            ->assertInertia(fn (Assert $page) => $page
                ->has('properties')
                ->has('cities')
            );

        $this->assertTrue(true);
    }

    /**
     * A basic test for the selling properties page.
     */
    public function test_the_selling_properties_page(): void
    {
        $this->withoutExceptionHandling();

        $this->get('/comprar')
            ->assertInertia(fn (Assert $page) => $page
                ->has('properties')
                ->has('cities')
            );

        $this->assertTrue(true);
    }
}
