<?php

class TurkeySub {
    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addTurkey()
            ->addSauces();
    }

    public function layBread() {
        var_dump('laying down the bread');
    }

    public function addLettuce() {
        var_dump('add some lettuce');

    }

    public function addTurkey() {
        var_dump('add some turkey');

    }

    public function addSauces() {
        var_dump('add oil and vinegar');
    }
}

$sub = new TurkeySub();

$sub->make();
