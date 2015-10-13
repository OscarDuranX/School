<?php namespace Com\Iesebre\Dam2\oscarduran\Curriculum;

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 5/10/15
 * Time: 19:58
 */
class StudySubmodules
{
    public $formativeUnit;
    public $duration;

    /**
     * StudySubmodules constructor.
     * @param $formativeUnit
     * @param $duration
     */
    public function __construct($formativeUnit, $duration)
    {
        $this->formativeUnit = $formativeUnit;
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getFormativeUnit()
    {
        return $this->formativeUnit;
    }

    /**
     * @param mixed $formativeUnit
     */
    public function setFormativeUnit($formativeUnit)
    {
        $this->formativeUnit = $formativeUnit;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }



}