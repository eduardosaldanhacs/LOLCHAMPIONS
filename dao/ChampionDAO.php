<?php

    require("models/Champion.php");

    class ChampionDao implements ChampionDAOInterface {

        private $conn;
        private $url;
        
        public function __construct(PDO $conn, $url) {
            $this->conn = $conn;
            $this->url = $url;
        }

        public function buildChampion($data) {

        }

        public function create(Champion $champion) {

            echo "teste";
            $stmt = $this->conn->prepare("INSERT INTO champions(
                name, laner, launch, region, image) 
                VALUES (
                    :name, :laner, :launch, :region, :image
                )");

            $stmt->bindParam(":name", $champion->name);
            $stmt->bindParam(":laner", $champion->laner);
            $stmt->bindParam(":launch", $champion->launch);
            $stmt->bindParam(":region", $champion->region);
            $stmt->bindParam(":image", $champion->image);

            $stmt->execute();
            
        }

        public function getLaners($laner)
        {
            $stmt = $this->conn->prepare("SELECT * FROM champions WHERE laner = :laner");
            $stmt->bindParam(":laner", $laner);
            $stmt->execute();
            $list = $stmt->fetchAll();

            return $list;
        }
    }
