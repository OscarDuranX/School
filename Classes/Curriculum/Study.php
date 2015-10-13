<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 13/10/15
 * Time: 17:53
 */

namespace Com\Iesebre\Dam2\oscarduran\Curriculum;


class Study
{

    public $name;
    public $description;
    public $duration;
    public $category;

    /**
     * Study constructor.
     * @param $name
     * @param $description
     * @param $duration
     * @param $category
     */
    public function __construct($name, $description, $duration, $category)
    {
        $this->name = $name;
        $this->description = $description;
        $this->duration = $duration;
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }






}