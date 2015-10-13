<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 13/10/15
 * Time: 17:58
 */

namespace Com\Iesebre\Dam2\oscarduran\Curriculum;

use Com\Iesebre\Dam2\oscarduran\Persons\Teacher;


class Lessons
{
    public $teacher;
    public $descriptionLesson;
    public $classGroup;

    /**
     * @return mixed
     */
    public function getDescriptionLesson()
    {
        return $this->descriptionLesson;
    }

    /**
     * @param mixed $descriptionLesson
     */
    public function setDescriptionLesson($descriptionLesson)
    {
        $this->descriptionLesson = $descriptionLesson;
    }

    public function __construct(Teacher $teacher, ClassGroup $classGroup)
    {
        $this->teacher = $teacher;
        $this->classGroup = $classGroup;
    }





}