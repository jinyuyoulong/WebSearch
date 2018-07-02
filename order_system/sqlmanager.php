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
	 * if (!$result) {
		    	echo(@self::$db->lastErrorMsg());
		    }else{
				echo "insert date done successfully";
		    }
		   	@self::$db->close();
            return $result;
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
		static public function insertUser($name, $pwd, $usertype)
		{
			self::instance();
			if (!self::$db) {
				echo(@self::$db->lastErrorMsg());
			}else{
				echo "open database yes<br>";
			}

			$registtime = date("Y-m-d H:i:s");
			$sql ="insert into user(username,pwd,usertype,registtime) values('$name', '$pwd', $usertype, '$registtime')";
		    $result = @self::$db->exec($sql);

		    
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
				echo(@self::$db->lastErrorMsg());
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
        /*查询username字段，在某一表中*/
		static public function selectRow($username, $colum, $tablename)
		{
			self::instance();
			$sql=<<<SQL
			SELECT * FROM $tablename WHERE $colum ='$username';
SQL;
//			echo $sql;

			$result = @self::$db->query($sql);
			$selectedArr = array();
            if ($result)
            {
//                var_dump($result->fetchArray(SQLITE3_ASSOC));

                while ($row=$result->fetchArray(SQLITE3_ASSOC)) {
                    $selectedArr[]=$row;
                }
                return $selectedArr;
            }else{
                return [];
            }
		}

		static public function addOrder($uid)
	    {
		    self::instance();

		    $now = date('Y-m-d H:i:s');
		    $sql = "insert into user_order (uid,time) values ('$uid', '$now');select last_insert_rowid()";
		    $result = @self::$db->exec($sql);
            var_dump($result);
            
		    if (!$result) {
		    	echo(@self::$db->lastErrorMsg());
		    }else{
				echo "insert date done successfully".$result;
		    }
		    
		   	@self::$db->close();
            return $result;
	    }

		//end class
	}


		
    DBUtile::addOrder('2');
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