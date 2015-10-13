<?php namespace Com\Iesebre\Dam2\oscarduran\Persons;
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 5/10/15
 * Time: 18:26
 */
trait Worker {
    public $salary;

    /**
     * Worker constructor.
     * @param $salary
     */
    public function __construct($salary)
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}