<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {

        $I -> amOnPage('/');
        $I -> fillField('a', '1');
        $I -> fillField('b', '2');
        $I -> selectOption('operation', '+');
        $I -> click('Calculate');
        $I -> see('Result: 3');
    }
}
