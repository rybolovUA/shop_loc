<?php
namespace frontend\tests\unit\forms;

use \Codeception\Test\Unit;
use frontend\forms\ContactForm;

class ContactFormTest extends Unit
{
    public function testSendEmail()
    {
        $model = new ContactForm();

        $model->attributes = [
            'name' => 'Tester',
            'email' => 'tester@example.com',
            'subject' => 'very important letter subject',
            'body' => 'body of current message',
        ];
    }
}
