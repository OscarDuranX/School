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

    /**
     * Teacher constructor.
     * @param $specialization
     */
    public function __construct($specialization)
    {
        $this->specialization = $specialization;
    }

    /**
     * @return mixed
     */
    public function getSpecialization()
    {
        return $this->specialization;
    }

    /**
     * @param mixed $specialization
     */
    public function setSpecialization($specialization)
    {
        $this->specialization = $specialization;
    }

    public function render()
    {
        $this->type = "Profesor";
        parent::render();

    }

}