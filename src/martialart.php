<?php
/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 28/04/2016
 * Time: 21:01
 */

namespace Itb;


class martialart
{
    /*
     * variable for the student id
     */
    private $studentid;

    /*
     * variable for the student name
     */
    private $studentName;

    /*
     * variable for the class id
     */
    private $classid;

    /*
     * variable for the students current grade
     */
    private $currentGrade;

    /*
     * variable for the attendance since the students last grade
     */
    private $attendanceLastGrade;

    /*
     * variable for that holds the students next grade
     */
    private $nextGrade;

    /*
     * variable that holds the required techniques the student must learn for the next grade
     */
    private $requiredTechniques;

    /*
     * students current status
     */
    private $currentStatus;

    /*
     * getter method for the student id
     */
    public function getStudentid(){
        return $this->studentid;
    }

    /*
     * getter method for the student name
     */
    public function getStudentName(){
        return $this->studentName;
    }

    /*
     * getter method for the class id
     */
    public function getClassid()
    {
        return $this->classid;
    }

    /*
     * getter method for the students current grade
     */
    public function getCurrentGrade()
    {
        return $this->currentGrade;
    }

    /*
     * getter method for the students attendance since  last grading
     */
    public function getAttendanceLastGrade()
    {
        return $this->attendanceLastGrade;
    }

    /*
     * getter method for the students next grade
     */
    public function getNextGrade()
    {
        return $this->nextGrade;
    }

    /*
     * getter method for the required techniques the student must learn
     */
    public function getRequiredTechniques()
    {
        return $this->requiredTechniques;
    }

    /*
     * getter method for the students current status
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

}