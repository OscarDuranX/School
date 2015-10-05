<?php namespace Com\Iesebre\Dam2\oscarduran\Persons;

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 5/10/15
 * Time: 17:50
 */
class Student extends Person
{
    use Worker;
   public $classRoomGrup;
    public $dual = false;

    /**
     * Student constructor.
     * @param bool $dual
     */
    public function __construct($dual=null)
    {
        if($dual != null)
        $this->dual = $dual;
    }

    public function render()
    {
        $this->type = "Estudiant";
        if($this->dual) {
            parent::render() . "i cobra " . $this->salary;
        }else{
            parent::render();
        }
    }




}