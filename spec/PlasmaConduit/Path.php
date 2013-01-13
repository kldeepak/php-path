<?php
namespace spec\PlasmaConduit;
use PHPSpec2\ObjectBehavior;

class Path extends ObjectBehavior {

    function it_should_be_initializable() {
        $this->shouldHaveType("PlasmaConduit\Path");
    }

}
