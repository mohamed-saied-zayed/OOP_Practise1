<?php

require_once 'Employee.php';
$emp1 = new Employee();
$emp2 = new Employee();
$emp3 = new Employee();


$emp1->name = "Ahmed ali";
$emp1->email = "ahmed@eraasoft.com";
$emp1->salary = "10000";
$emp1->is_manager = true;
$emp1->address = ['cairo','alzhoor','17 Main Street'] ;


$emp2->name = "Maher";
$emp2->email = "Maher@eraasoft.com";
$emp2->salary = "15000";
$emp2->is_manager = true;
$emp2->address = ['tanta','aldalgmoon','17 Main Street'] ;


$emp3->name = "Fatema Khaled";
$emp3->email = "fatema@eraasoft.com";
$emp3->salary = "8000";
$emp3->is_manager = false;
$emp3->address = ['cairo','alzhoor','17 Main Street'] ;

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <table class="table table-borderd">
        <th>
            <tr>
                <th>Name</th>
                <th>email</th>
                <th>Salary</th>
                <th>Is_Manager</th>
                <th>Address</th>
            </tr>
        </th>
        <tbody>
            <tr>
                <td><?php echo $emp1->name; ?></td>
                <td><?php echo $emp1->email; ?></td>
                <td class="<?php $emp1->checkSalary(); ?>"><?php echo $emp1->salary; ?></td>
                <td class="<?php $emp1->checkManagerColor(); ?>"><?php $emp1->checkFromManager(); ?></td>
                <td><?php echo implode(" - ", $emp1->address); ?></td>
            </tr>
            <tr>
                <td><?php echo $emp2->name; ?></td>
                <td><?php echo $emp2->email; ?></td>
                <td class="<?php $emp2->checkSalary(); ?>"><?php echo $emp2->salary; ?></td>
                <td class="<?php $emp2->checkManagerColor();?>"><?php $emp2->checkFromManager(); ?></td>
                <td><?php echo implode(" - ", $emp1->address); ?></td>
            </tr>
            <tr>
                <td><?php echo $emp3->name; ?></td>
                <td><?php echo $emp3->email; ?></td>
                <td class="<?php $emp3->checkSalary(); ?>"><?php echo $emp3->salary; ?></td>
                <td class="<?php $emp3->checkManagerColor();?>"><?php $emp3->checkFromManager(); ?></td>
                <td><?php echo implode(" - ", $emp1->address); ?></td>
            </tr>
        </tbody>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>