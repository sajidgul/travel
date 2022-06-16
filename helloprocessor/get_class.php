<?php

class get_data{
	function __construct(){
		$servername = "localhost";
		$username = "root";
		$password = "";

		try {
		  $this->db = new PDO("mysql:host=$servername;dbname=tms", $username, $password);
		  // set the PDO error mode to exception
		  $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  // echo "Connected successfully";
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}

			}


			
		}

?>