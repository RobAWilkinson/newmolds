<?php

class TaskTest extends TestCase {

  public function testDisplayTests()
  {
        $response = $this->call('GET', '/tasks');
        $this->assertContains('All Tasks', $response->getContent());
  }
  public function testTwoTasks()
  {
	  $tasks = Task::all();
	  $this->assertEquals(2, count($tasks));
  }
}

