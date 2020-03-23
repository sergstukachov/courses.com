<?php

namespace models;

/**
 * Class Courses
 * @package models
 */
class Courses extends Model
{
    /**
     * Courses constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function tableName()
    {
        return "courses";
    }

    /**
     * @param $course
     * @param $teacher
     * @return array
     */
    public function save($course, $teacher)
    {
        return $this->sql( "INSERT INTO courses (course,teacher) VALUES ('" . $course . "','" . $teacher . "')");
    }

    /**
     * @param $column
     * @param $editval
     * @param $course_id
     * @return array
     */
    public function edit($column , $editval, $course_id)
    {

        return $this->sql( "UPDATE courses set  ". $column . "='" . $editval ."'  WHERE course_id=' ".$course_id ."'") ;

    }

    /**
     * @param $courseId
     * @return array
     */
    public function delete($courseId)
    {
        return $this->sql("DELETE FROM courses  WHERE course_id = '$courseId' ");
    }
}