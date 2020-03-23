<?php

namespace models;


/**
 * Class Students
 * @package models
 */
class Students extends Model
{

    /**
     * Students constructor.
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
        return "students";
    }

    /**
     * @param $name
     * @param $surname
     * @param $email
     * @param $photo
     * @param $course_id
     * @return array
     */
    public function save($name, $surname, $email, $photo, $course_id)
    {
        return $this->sql("INSERT INTO students ( name,surname,email,photo,course_id) VALUES ('" . $name . " ',' " . $surname . " ',' " . $email . "','" . $photo . "','" . $course_id . "')");
    }

    /**
     * @param $column
     * @param $editval
     * @param $student_id
     * @return array
     */
    public function edit($column, $editval, $student_id)
    {
        return $this->sql("UPDATE students set  " . $column . "='" . $editval . "'  WHERE student_id=' " . $student_id . "'");
    }

    /**
     * @param $studentId
     * @return array
     */
    public function delete($studentId)
    {
        return $this->sql("DELETE FROM students  WHERE student_id ='$studentId' ");
    }

    /**
     * @return array
     */
    public function getFullList()
    {
        return $this->sql("SELECT * FROM students JOIN courses ON students.course_id = courses.course_id");
    }
}