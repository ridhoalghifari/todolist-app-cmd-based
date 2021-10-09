<?php

require_once __DIR__ . "../View/ViewAddTodoList.php";
require_once __DIR__ . "../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "../BusinessLogic/AddTodoList.php";

addTodoList("Ridho");
addTodoList("Alghifari");
addTodoList("Mantap");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
