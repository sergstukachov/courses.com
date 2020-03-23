<?php

namespace controllers;

/**
 * Class CourseController
 * @package controllers
 */
class CourseController extends HomeController
{
    /**
     * @return string
     */
    public function getCourses()
    {
        $coursesModel = $this->loadModel("Courses", "course");
        $courses = $coursesModel->getList();
        return $this->generate('courses', ["courses" => $courses]);
    }

    /**
     * @return bool|string
     */
    public function saveCourse()
    {
        try {
            $coursesModel = $this->loadModel("Courses", "course");
            $course = trim($_POST['course']);
            $teacher = trim($_POST['teacher']);
            $coursesModel->save($course, $teacher);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @return bool|string
     */
    public function editCourse()
    {

        try {
            $coursesModel = $this->loadModel("Courses", "course");
            $column = $_POST['column'];
            $editval = $_POST['editval'];
            $course_id = $_POST['course_id'];
            $coursesModel->edit($column, $editval, $course_id);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @return bool|string
     */
    public function deleteCourse()
    {
        try {
            $coursesModel = $this->loadModel("Courses", "course");
            $courseId = trim($_POST['course_id']);
            $coursesModel->delete($courseId);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}