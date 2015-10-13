<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 13/10/15
 * Time: 18:02
 */

namespace Com\Iesebre\Dam2\oscarduran\Curriculum;


class Location
{
    public $location = array();

    /**
     * Location constructor.
     * @param array $location
     */
    public function __construct(array $location)
    {
        $this->location = $location;
    }

    /**
     * @return array
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param array $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

}