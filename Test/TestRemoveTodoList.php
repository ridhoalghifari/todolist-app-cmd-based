<?php

require_once __DIR__ . "../Model/TodoList.php";
require_once __DIR__ . "../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "../BusinessLogic/RemoveTodoList.php";

addTodoList("Ridho");
addTodoList("Alghifari");
addTodoList("Mantap");
addTodoList("Hahahah");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(1);

showTodoList();

$success = removeTodoList(3);
var_dump($success);

showTodoList();
