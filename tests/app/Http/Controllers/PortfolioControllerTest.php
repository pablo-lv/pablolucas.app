<?php

namespace Tests\App\Http\Controllers;

use TestCase;

class PortfolioControllerTest extends TestCase
{
    /** @test */
    public function index_status_code_should_be_200()
    {
        $this->visit('/')->seeStatusCode(200);
    }

    /** @test */
    public function resume_status_code_should_be_200()
    {
        $this->visit('/resume')->seeStatusCode(200);
    }

    /** @test */
    public function contact_status_code_should_be_200()
    {
        $this->visit('/contact')->seeStatusCode(200);
    }

    /** @test */
    public function blog_status_code_should_be_200()
    {
        $this->visit('/blog')->seeStatusCode(200);
    }
}

