<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomeButton()
    {
        // Проверяет возвращает ли главная страница http статус 200(страница работает нормально)
        $response = $this->get('/');
        $response->assertOk();
    }
}
