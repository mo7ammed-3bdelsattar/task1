<?php

class Employee
{
    public int $id = 1;
    private $first_name;
    private $last_name;
    private $salary;
    private $tasks = [];
    private $bonus;
    private $gender;
    private $is_manager = "false";


    public function setFristName($first_name)
    {
        $this->first_name = $first_name;
    }
    public function setLastName($last_name)
    {
        return $this->last_name = $last_name;
    }
    public function getFullName()
    {
        return $this->first_name . " " . $this->last_name;
    }
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;
    }
    public function addTasks($task)
    {
        array_push($this->tasks, $task);
    }
    public function showAllTasks()
    {
        return $this->tasks;
    }
    public function getFinalSalary()
    {
        return $this->salary + $this->bonus . " LE";
    }
    public function setSalary($new_salary)
    {
        $this->salary = $new_salary;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function isManager()
    {
        return $this->is_manager;
    }
    public function setManager()
    {
        $this->is_manager = "true";
    }
}

$employee1 = new Employee();
$employee1->id = 1111;
$employee1->setFristName('Mohammed');
$employee1->setlastName('Abdelsattar');
$employee1->setSalary(5000);
$employee1->setBonus(1000);
$employee1->setGender('male');
$employee1->addTasks(['task1', 'task2']);



$employee2 = new Employee();
$employee2->setFristName('Ahmed');
$employee2->setlastName('Abdelsattar');
$employee2->setSalary(10000);
$employee2->setBonus(2000);
$employee2->setGender('male');
$employee2->addTasks(['task1', 'task2']);
$employee2->id = 111221;

$employee3 = new Employee();
$employee3->setFristName('Mohammed');
$employee3->setlastName('Abdo');
$employee3->setSalary(6000);
$employee3->setBonus(100);
$employee3->setGender('male');
$employee3->addTasks(['task1', 'task2']);
$employee3->id = 1181;

$employee4 = new Employee();
$employee4->setFristName('Mai');
$employee4->setlastName('Ali');
$employee4->setSalary(4000);
$employee4->setBonus(100);
$employee4->setGender('female');
$employee4->addTasks(['task1', 'task2']);
$employee4->id = 9999;

$employee5 = new Employee();
$employee5->setFristName('Mostafa');
$employee5->setlastName('Mahfouz');
$employee5->setSalary(50000);
$employee5->setBonus(10000);
$employee5->setGender('male');
$employee5->setManager();
$employee5->addTasks(['task1', 'task2']);
$employee5->id = 11111111;

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title></title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Salary</th>
                <th scope="col">Gender</th>
                <th scope="col">isManager?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?= $employee1->id; ?></th>
                <td><?= $employee1->getFullName() ?></td>
                <td><?= $employee1->getFinalSalary() ?></td>
                <td><?= $employee1->getGender() ?></td>
                <td><?= $employee1->isManager() ?></td>
            </tr>
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>