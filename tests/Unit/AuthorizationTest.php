<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuthorizationTest extends TestCase
{
    public function testLoginScreen()
    {
        // Проверяет возвращает ли страница "войти" http код 200(страница работает нормально)
        $response = $this->get('/login');
        $response->assertOk();
    }

    public function testAuthorize()
    {
        //Assert that a user is authenticated
        $response=$this->post('/login', [
            'email'=> 'admin@admin',
            'password'=>'admin@admin',
        ]);
        $this->assertAuthenticated();
        $response->assertRedirect('/');
    }
    public function testInavalidPassowrd()
    {
        //Assert that a user is not authenticated
        $this->post('/login', [
            'email' => 'admin@admin',
            'password' => 'wrong-password',
        ]);
        $this->assertGuest();
    }

}
