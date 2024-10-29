<?php
// Parent class
class Employee {
    // Properties
    public $employeeID;
    public $field;

    // Constructor
    public function __construct($employeeID, $field) {
        $this->employeeID = $employeeID;
        $this->field = $field;
    }
}

// Child class
class TechLead extends Employee {
    // New property specific to TechLead
    public $role;

    // Constructor for TechLead
    public function __construct($employeeID, $field, $role) {
        // Call the parent constructor
        parent::__construct($employeeID, $field);
        $this->role = $role;
    }

    // Method to display all information about the TechLead
    public function displayInfo() {
        echo "Employee ID: " . $this->employeeID . "<br>";
        echo "Field: " . $this->field . "<br>";
        echo "Role: " . $this->role . "<br>";
    }
}

// Example usage
$techLead = new TechLead("TL123", "Software Development", "Technical Lead");
$techLead->displayInfo();
?>