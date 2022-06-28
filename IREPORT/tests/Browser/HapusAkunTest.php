<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HapusAkunTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group hapusakun
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->type('email', 'w@mail.com')
                ->type('password', '123')
                ->press('Login')
                ->assertPathIs('/terminal')
                ->visit('/profile')
                ->assertSee('Update Profile')
                ->assertSee('Hapus Akun')
                ->press('Hapus Akun');
        });
    }
}
