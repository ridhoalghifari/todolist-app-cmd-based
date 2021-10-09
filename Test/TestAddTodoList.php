<?php

require_once __DIR__ . "../Model/TodoList.php";
require_once __DIR__ . "../BusinessLogic/AddTodoList.php";

addTodoList("Ridho");
addTodoList("Alghifari");
addTodoList("Mantap");

var_dump($todoList);
