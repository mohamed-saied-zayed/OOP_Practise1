<?php

class Employee {
    var $name;
    var $email;
    var $salary;
    var $is_manager = false;
    var $address =["city", "street","address"];

    function checkFromManager(){
        if($this->is_manager){
            echo "Manager";
        }else{
            echo "Not Manager";
        }
    }
    function checkManagerColor(){
        if($this->is_manager){
            echo "text-success";
        } else{
            echo "text-danger";
        }
    }

    function checkSalary(){
        if($this->salary >9000){
            echo "text-success fw-bold";
        }
        else{
            echo "text-danger";
        }

    }
}