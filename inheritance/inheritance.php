<?php

// Parent Class
class Person {
	private $name;

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}
}

// Child Class
class Soldier extends Person {
	private $rank;

	public function setRank($rank) {
		$this->rank = $rank;
	}

	public function fullName() {
		return $this->rank . ' ' . $this->getName();
	}
}

// Create an instance of the Soldier Child Class
$soldier = new Soldier();

// Give the soldier a rank
$soldier->setRank('Private');

// Give the soldier a name
$soldier->setName('Ryan');

// Output: Private Ryan
echo $soldier->fullName();

?>