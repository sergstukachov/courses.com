<?php


namespace controllers;

/**
 * Class StudentController
 * @package controllers
 */
class StudentController extends HomeController
{
    /**
     * @return string
     */
    public function list()
    {
        $courses = $this->getModelCourse()->getList();
        $students = $this->getModelStudent()->getList();
        return $this->generate("students", ["students" => $students, "courses"=>$courses]);
    }

    /**
     * @return mixed
     */
    public function getModelStudent()
    {
        return $this->loadModel("Students", "student");
    }

    /**
     * @return mixed
     */
    public function getModelCourse()
    {
        return $this->loadModel("Courses", "course");
    }

    /**
     * @return string
     */
    public function mainPage()
    {
        $studentsModel = $this->loadModel("Students", "student");
        $students = $studentsModel->getFullList();
        return $this->generate("index", ['students' => $students]);
    }

    /**
     * @return bool|string
     */
    public function save()
    {
        try {

            $uploaddir = $_SERVER["DOCUMENT_ROOT"] .'/uploads/';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
            echo '<pre>';
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                echo "Файл корректен и был успешно загружен.\n";
            } else {
                echo "Возможная атака с помощью файловой загрузки!\n";
            }
            echo 'Некоторая отладочная информация:';
            print_r($_POST);
            print "</pre>";


            $studentsModel = $this->getModelStudent();
            $name = isset($_POST['name']) ? trim($_POST['name']) : '';
            $surname = trim($_POST['surname']);
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            $photo = $uploadfile;
            $course_id = $_POST['course_id'];
            $studentsModel->save($name, $surname, $email, $photo, $course_id);

            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @return bool|string
     */
    public function edit()
    {

        try {
            $studentsModel = $this->loadModel("Students", "student");
            $column = $_POST['column'];
            $editval = $_POST['editval'];
            $student_id = $_POST['student_id'];
            $studentsModel->edit($column, $editval, $student_id);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @return bool|string
     */
    public function delete()
    {
        try {
            $studentsModel = $this->loadModel("Students", "student");
            $studentId = $_POST['student_id'];
            $studentsModel->delete($studentId);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}