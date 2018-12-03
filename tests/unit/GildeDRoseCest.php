<?php

use GildedRose\GildedRose;
use GildedRose\Item;

class GildeDRoseCest
{
    public function _before(UnitTester $I)
    {
    }

    public function tryToTest(UnitTester $I)
    {
        $items = [new Item("foo", 0, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $I->assertEquals("fixme", $items[0]->name);
    }
}
