<?php

namespace Tests\Feature;

use Tests\TestCase;

class LanguageControllerTest extends TestCase
{
    public function testSwitchLanguageRoute()
    {
        $response = $this->get(route('languages', ['lang' => 'es']));

        $this->assertTrue(session()->has('applocale'));
        $this->assertEquals('es', session('applocale'));

        $response->assertRedirect();

        $response->assertSessionHas('_previous.url');
    }
}
