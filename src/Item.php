<?php
/**
 * Created by PhpStorm.
 * User: Loïc Gouttefangeas <loic.gouttefangeas.pro@gmail.com>
 * Date: 04/12/2018
 * Time: 00:30
 */

namespace GildedRose;


class Item {

    public $name;
    public $sell_in;
    public $quality;

    function __construct($name, $sell_in, $quality) {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function __toString() {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }

}
