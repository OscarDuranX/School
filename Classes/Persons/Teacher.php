<?php namespace Com\Iesebre\Dam2\oscarduran\Persons;

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 5/10/15
 * Time: 18:06
 */
class Teacher extends Person
{
    use Worker;
    public $specialization;

    public function render()
    {
        $this->type = "Profesor";
        parent::render();

    }

}