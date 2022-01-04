<?php
class Member {
    public $name;
    public $email;
    public $school;

    public function __construct(string $name, string $email, string $school) {
        $this->name = $name;
        $this->email = $email;
        $this->school = $school;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_school() {
        return $this->school;
    }
}
?>