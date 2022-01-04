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
}
?>