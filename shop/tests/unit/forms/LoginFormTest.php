<?php

namespace common\tests\unit\forms;

use \Codeception\Test\Unit;
use common\forms\LoginForm;
use common\fixtures\UserFixture;

/**
 * Login form test
 */
class LoginFormTest extends Unit
{
    /**
     * @var \common\tests\UnitTester
     */
    protected $tester;
    public function _before()
    {
        $this->tester->haveFixtures([
            'user' => [
                'class' => UserFixture::class,
                'dataFile' => codecept_data_dir() . 'user.php'
            ]
        ]);
    }
    public function testBlank()
    {
        $model = new LoginForm([
            'username' => '',
            'password' => '',
        ]);
        expect_not($model->validate());
    }
    public function testCorrect()
    {
        $model = new LoginForm([
            'username' => 'bayer.hudson',
            'password' => 'password_0',
        ]);
        expect_that($model->validate());
    }
}
