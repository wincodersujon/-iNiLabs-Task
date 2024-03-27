<?php

class Employee {
    private $name; 
    private $email;
    private $salary;

    public function __construct($name, $email, $salary) {
        $this->name = $name;
        $this->email = $email;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }
}

$employee = new Employee('Sujon', 'sujon@gmail.com', 25000);

echo "Name: " . $employee->getName() . "\n";
$employee->setName('Biswas');
echo "Updated Name: " . $employee->getName() . "\n";

echo "Email: " . $employee->getEmail() . "\n";
$employee->setEmail('biswas@gmail.com');
echo "Updated Email: " . $employee->getEmail() . "\n";

echo "Salary: " . $employee->getSalary() . "\n";

$employee->setSalary(30000);
echo "Updated Salary: " . $employee->getSalary() . "\n";
