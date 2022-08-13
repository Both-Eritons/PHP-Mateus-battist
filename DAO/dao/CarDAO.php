<?php


include_once("models/Car.php");

class CarDAO implements CarDAOInterface{
	private $conn;
	public function __construct(PDO $conn){
		$this->conn = $conn;
	}
	public function findAll(){

		$cars = [];

		$stmt = $this->conn->query("SELECT * FROM car");

		$data = $stmt->fetchAll();

		foreach($data as $caru){
			$car = new Car();

			$car->setId($caru["id"]);
			$car->setBrand($caru["brand"]);
			$car->setKM($caru["km"]);
			$car->setColor($caru["color"]);

			$cars[] = $car;
		}

		return $cars;
	}

	public function create(Car $car){
		$stmt = $this->conn->prepare("INSERT INTO car(brand, km, color) VALUES(:brand, :km, :color)");


		$stmt->bindValue(":brand", $car->getBrand());
		$stmt->bindValue(":km", $car->getKM());
		$stmt->bindValue(":color", $car->getColor());

		$stmt->execute();
	}
}
