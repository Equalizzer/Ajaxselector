<?php

	if ($_GET["country"] == 1) {
		echo json_encode(array("1" => "Erevan", "2" => "Armavir"));
	}elseif ($_GET["country"] == 2) {
		echo json_encode(array("3" => "Pekin", "4" => "Shanhay"));
	}