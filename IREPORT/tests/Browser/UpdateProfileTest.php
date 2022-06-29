<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UpdateProfileTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group updateprofile 
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->type('email', 'w@mail.com')
            ->type('password', '123')
            ->press('Login')
            ->assertPathIs('/terminal');
        });
    }
}