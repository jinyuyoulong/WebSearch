<?php  

	/**
	 * 
	 */
	class MyDB extends SQLite3
	{
		
		function __construct()
		{
			try {
				$this->open('SchoolOrders.db');
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
	}
	/**
	 * 
	 */
	class DBUtile
	{
		
		private static $db;
		private static function instance()
		{
			if (!self::$db) {
				self::$db = new MyDB();
			}
		}

		/*
		@name 	name
		@pwd 	pwd
		@usertype 	用户类型：1.用户 2.管理员
		*/
		public function insertUser($name, $pwd, $usertype)
		{
			$db = new MyDB();
			if (!$db) {
				echo($db->lastErrorMsg());
			}else{
				echo "open database yes<br>";
			}

			$registtime = date("Y-m-d H:i:s");
			$sql =<<<EOF
		      insert into user(username,pwd,usertype,registtime)
		      values('$name', '$pwd', $usertype, '$registtime');
EOF;
		    $result = $db->exec($sql);

		    if (!$result) {
		    	echo($db->lastErrorMsg());
		    }else{
				echo "insert date done successfully";
		    }
		   	$db->close();

		}

		public function deleteSQL($tableName, $id)
		{
			self::instance();
			$sql=<<<SQL
			delete from $tableName where uid=$id;
SQL;
			echo($sql);
			$result = @self::$db->exec($sql);

			if (!$result) {
				echo($db->lastErrorMsg());
			}else{
				echo "<br>delete successfully";
			}
		}

		public function fetchUser($id)
		{
			self::instance();
			$sql=<<<SQL
			SELECT * FROM user WHERE uid =$id;
SQL;
			$result = @self::$db->query($sql);

			while ($row=$result->fetchArray(SQLITE3_ASSOC)) {
				
				return $row;
				// var_dump($row);
				// echo "<br><br>";
				// print_r($row['username']);
			}
		}

		public function selectRow($username, $tablename)
		{
			self::instance();
			$sql=<<<SQL
			SELECT * FROM $tablename WHERE username =$username;
SQL;
			$result = @self::$db->query($sql);

			while ($row=$result->fetchArray(SQLITE3_ASSOC)) {				
				return $row;
			}
			return$row;
		}
	}
	
	// DBUtile::insertUser('常营幼儿园','333', 1);
	// DBUtile::fetchUser(1);
	// DBUtile::deleteSQL('user', 4);

// 	$sql = <<<eof
// 		SELECT * FROM categorys where id = 0;
// eof;

// 	$ret = $db->query($sql);

// 	while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
// 		echo "ID = ".$row['ID']."<br>";
// 		echo "NAME = ".$row['NAME']."<br>";
// 	}
?>