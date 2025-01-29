<?php

include("config.php");

$conexao = mysqli_connect(SERVE, USER, PASSWORD, BANCO) or die("ERRO DB" .mysqli_connect_error());
