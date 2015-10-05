<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 5/10/15
 * Time: 20:09
 */

namespace Com\Iesebre\Dam2\oscarduran\Curriculum;


use Com\Iesebre\Dam2\oscarduran\Persons\Student;

class ClassroomGroup
{

    public $students = array();

    /**
     * ClassroomGroup constructor.
     * @param array $students
     */
    public function __construct(array $students)
    {
        $this->students = $students;
    }

    /**
     * @return array
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param array $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }

    /**
     * @param Student $student
     */
    public function addStudent(Student $student)
    {
        array_push($students,$student);
    }

}