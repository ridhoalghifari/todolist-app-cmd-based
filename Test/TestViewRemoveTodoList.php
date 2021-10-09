<?php

require_once __DIR__ . "../Model/TodoList.php";
require_once __DIR__ . "../View/ViewRemoveTodoList.php";
require_once __DIR__ . "../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "../BusinessLogic/ShowTodoList.php";

addTodoList("Ridho");
addTodoList("Alghifari");
addTodoList("Mantap");
addTodoList("Hahahah");
addTodoList("Goks");
addTodoList("Elang");

showTodoList();

viewRemoveTodoList();

showTodoList();
