<?php

namespace STORMSQ\DeveloperPresenter\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Request;
use STORMSQ\DeveloperPresenter\PresenterBuilder;
class DeveloperPresenterTest extends TestCase{

    public function test_PresenterBuilder()
    {
        $request = request()->capture();
        $request->request->add(['term'=>'abc','page'=>10,'useButton'=>1]);

        $PresenterBuilder = new PresenterBuilder;
        $return = $PresenterBuilder->getTableHeader(['姓名','班級','電話']);

        dump($return);
        $this->assertTrue(true);
    }
}