<?php

namespace App\Controllers;

use App\Core\Abstraction\Controller;
use Exception;
use PDO;

class PortfolioController extends Controller
{
    private readonly PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
        $this->createTablePortfolio();
    }


    private function tableExist()
    {
        try {
            $result = $this->connection->query("DESCRIBE portfolio");
        } catch (Exception $ex) {
            return FALSE;
        }
        return $result !== FALSE;
    }

    public function createTablePortfolio()
    {
        $query = "
            CREATE TABLE portfolio (
                id int auto_increment primary key, 
                img varchar(50) not null,
                title varchar(30) not null,
                description text,
                is_button bool not null,
                link varchar(50) not null
            );
        ";

        if (!($this->tableExist())) {
            $this->connection->exec($query);
        }
    }

    public function get(): void
    {

        $query = "SELECT * FROM portfolio;";
        $projects = $this->connection->query($query);

        $result = [];
        while ($row = $projects->fetch(PDO::FETCH_ASSOC)) {
            $project = [
                "id" => $row["id"],
                "img" => $row["img"],
                "title" => $row["title"],
                "description" => $row["description"],
                "isButton" => (bool)$row["is_button"],
                "link" => $row["link"],
            ];
            array_push($result, $project);
        }
        echo json_encode(["status" => "success", "data" => $result]);
    }

    public function getOne(mixed $id): void
    {

    }
    public function post(mixed $data): void
    {

    }
    public function patch(mixed $data, mixed $id): void
    {

    }
    public function delete(mixed $id): void
    {

    }
}