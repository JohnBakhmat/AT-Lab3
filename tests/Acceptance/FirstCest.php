<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function tryOpen(AcceptanceTester $I){
        $I -> amOnPage('/');
        $I -> see('PHP Calculator');
        $I -> see('by Yevhenii Bakhmat');
        $I -> seeElement('input', ['value' => 'Calculate']);
        $I -> dontSee("Result: 0");
    }

    public function tryGetResult(AcceptanceTester $I){
        $I -> amOnPage('/');
        $I -> fillField('a', '1');
        $I -> fillField('b', '2');
        $I -> selectOption('operation', '+');
        $I -> click('Calculate');
        $I -> see("Result: 3");
    }

    public function trySum1(AcceptanceTester $I){
        $I -> amOnPage('/');
        $I -> fillField('a', '1.5');
        $I -> fillField('b', '2.5');
        $I -> selectOption('operation', '+');
        $I -> click('Calculate');
        $I -> see("Result: 4");
    }

    public function trySum2(AcceptanceTester $I){
        $I -> amOnPage('/');
        $I -> fillField('a', '1.3');
        $I -> fillField('b', '2.5');
        $I -> selectOption('operation', '+');
        $I -> click('Calculate');
        $I -> see("Result: 3.8");
    }

    public function trySub1(AcceptanceTester $I){
        $I -> amOnPage('/');
        $I -> fillField('a', '1.5');
        $I -> fillField('b', '2.5');
        $I -> selectOption('operation', '-');
        $I -> click('Calculate');
        $I -> see("Result: -1");
    }

    public function trySub2(AcceptanceTester $I){
        $I -> amOnPage('/');
        $I -> fillField('a', '1.3');
        $I -> fillField('b', '2.5');
        $I -> selectOption('operation', '-');
        $I -> click('Calculate');
        $I -> see("Result: -1.2");
    }

    public function tryMul1(AcceptanceTester $I){
        $I -> amOnPage('/');
        $I -> fillField('a', '1.5');
        $I -> fillField('b', '2.5');
        $I -> selectOption('operation', '*');
        $I -> click('Calculate');
        $I -> see("Result: 3.75");
    }

    public function tryMul2(AcceptanceTester $I){
        $I -> amOnPage('/');
        $I -> fillField('a', '1.3');
        $I -> fillField('b', '2.5');
        $I -> selectOption('operation', '*');
        $I -> click('Calculate');
        $I -> see("Result: 3.25");
    }

    public function tryDiv1(AcceptanceTester $I){
        $I -> amOnPage('/');
        $I -> fillField('a', '1.5');
        $I -> fillField('b', '2.5');
        $I -> selectOption('operation', '/');
        $I -> click('Calculate');
        $I -> see("Result: 0.6");
    }

    public function tryDiv2(AcceptanceTester $I){
        $I -> amOnPage('/');
        $I -> fillField('a', '1.3');
        $I -> fillField('b', '2.5');
        $I -> selectOption('operation', '/');
        $I -> click('Calculate');
        $I -> see("Result: 0.52");
    }

    public function tryDivByZero(AcceptanceTester $I){
        $I -> amOnPage('/');
        $I -> fillField('a', '1.3');
        $I -> fillField('b', '0');
        $I -> selectOption('operation', '/');
        $I -> click('Calculate');
        $I -> see("Result: Division by zero");
    }
}
