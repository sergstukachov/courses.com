<?php

namespace configs;

/**
 * Class Config
 * @package configs
 */
class Config
{
    /**
     * @return array
     */
    public static function getRoutes()
    {
        return [
            [

                "uri" => "/",
                "controller" => "\controllers\StudentController",
                "action" => "mainPage",
                "method" => "GET",
            ], [
                "uri" => "/list/students/",
                "controller" => "\controllers\StudentController",
                "action" => "list",
                "method" => "GET",
            ],[
                "uri" => "/save/students/",
                "controller" => "\controllers\StudentController",
                "action" => "save",
                "method" => "POST",
            ], [
                "uri" => "/edit/students/",
                "controller" => "\controllers\StudentController",
                "action" => "edit",
                "method" => "POST",
            ], [
                "uri" => "/delete/students/",
                "controller" => "\controllers\StudentController",
                "action" => "delete",
                "method" => "POST",
            ],[
                "uri" => "/list/courses/",
                "controller" => "\controllers\CourseController",
                "action" => "getCourses",
                "method" => "GET",
            ], [
                "uri" => "/save/courses/",
                "controller" => "\controllers\CourseController",
                "action" => "saveCourse",
                "method" => "POST",
            ], [
                "uri" => "/edit/courses/",
                "controller" => "\controllers\CourseController",
                "action" => "editCourse",
                "method" => "POST",
            ], [
                "uri" => "/delete/courses/",
                "controller" => "\controllers\CourseController",
                "action" => "deleteCourse",
                "method" => "POST",
            ], [
                "uri" => "/photo/upload/",
                "controller" => "\controllers\Photo",
                "action" => "upload",
                "method" => "POST",
            ]
        ];
    }
}