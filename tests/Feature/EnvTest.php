<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvTest extends TestCase
{
    public function testGetEnv()
    {
        $platform = env("YOUTUBE", "default");

        echo env("APP_ENV");
        self::assertEquals("ABC", $platform);
    }
}
