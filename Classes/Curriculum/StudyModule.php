<?php namespace Com\Iesebre\Dam2\oscarduran\Curriculum;

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 5/10/15
 * Time: 19:57
 */
class StudyModule extends Study
{

    public $nameModul;

    /**
     * StudyModule constructor.
     * @param $nameModul
     */
    public function __construct($nameModul)
    {
        $this->nameModul = $nameModul;
    }

    /**
     * @return mixed
     */
    public function getNameModul()
    {
        return $this->nameModul;
    }

    /**
     * @param mixed $nameModul
     */
    public function setNameModul($nameModul)
    {
        $this->nameModul = $nameModul;
    }



}