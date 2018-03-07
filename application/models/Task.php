<?php
/**
 * Created by PhpStorm.
 * User: mini_
 * Date: 2018-03-07
 * Time: 10:55 AM
 */

class Task extends Entity
{
    public $id;
    public $name;
    public $priority;

    // insist that an ID be present
    public function setId($value) {
        if (empty($value))
            throw new Exception('An Id must have a value');
    }

    // insist that a Name be present and no longer than 30 characters
    public function setName($value) {
        if (empty($value))
            throw new Exception('A Name cannot be empty');
        if (strlen($value) > 30)
            throw new Exception('A Name cannot be longer than 30 characters');
    }

    // insist that a Color be one of yellow, red or green
    public function setPriority($value) {
        $allowed = ['low', 'med', 'high'];
        if (! in_array($value, $allowed))
            throw new Exception('A priority must be low, med or high');
    }
}