<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Alisa
 */
class Student {
    
    //Add a constructor
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //Add the email address
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    //Add the grades
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //Get the average grade
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    //ToString function
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach ($this->emails as $which => $what) {
            if(strlen($which) > 7){
                $result .= $which . ":\t" . $what . "\n";
            }else{
                $result .= $which . ":\t\t" . $what . "\n";
            }
        }
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
