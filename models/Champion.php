<?php

    class Champion {

        public $name;
        public $laner;
        public $launch;
        public $region;
        public $image;

    }

    interface ChampionDAOInterface {

        public function buildChampion($data);
        public function create(Champion $champion);
        public function getLaners($laner);


    }
