<?php
use PHPUnit\Framework\TestCase;

class TaskTests  extends TestCase {

    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('Tasks');
        $this->CI->load->model('Task');
        $this->taskPool = new Tasks();
    }

    function testId()
    {
        echo "in test ID";
        $testTask = new Task();
        $this->expectException(Exception::class);
        $testTask->setId('a');

    }
}