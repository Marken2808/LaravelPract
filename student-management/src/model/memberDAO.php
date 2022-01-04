<?php

include 'database/connect.php';

class MemberDAO extends Database {
    protected function getListMember() {
        $query = "SELECT * FROM `Member`;";
        $result = $this->connect()->query($query);
        return $result;
    }

    public function insertMember($member) {
        $query = 
        "INSERT INTO Member (name, email, school) 
        VALUES ($member->name, $member->email, $member->school)";

        $run = $this->connect()->query($query) or die(mysqli_error($this->connect()));

        if ($run) {
            echo 'Form submitted successfully';
        } else {
            echo 'Form not registered';
        }
    }
}
?>