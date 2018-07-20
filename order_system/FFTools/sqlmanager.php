<?php  

	class MyDB extends SQLite3
	{
		
		function __construct()
		{

			try {
			    $home_path = dirname(__FILE__);
				$this->open($home_path.'/SchoolOrders.db');
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
			}else{
				echo(@self::$db->lastErrorMsg());
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

		public function deleteSQL($mtableName, $id)
		{
			self::instance();
			$sql=<<<SQL
			delete from $mtableName where uid=$id;
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

//		============================================================================

		static public function insertRowInTable($mtablename, $key_values)	
		{
			self::instance();

			$keys = array_keys($key_values);
			$values = array_values($key_values);

			$sql ="insert into $mtablename(";
			if (count($key_values) > 0) {

				for ($i=0; count($keys)-1;$i++) {
				    if (i == count($keys)-1){
                        $sql = $sql.$keys[$i];
                    }else{
				        $sql = $sql.$keys[$i].',';
                    }
				}
				$sql=$sql.') values(';
				for ($i=0; count($values)-1;$i++) {
                    if (empty($value))
                    {
                        echo '插入的数据格式错误';
                        return false;
                    }else{
                        if (i == count($keys)-1){
                            $sql = $sql."'".$values[$i]."'";
                        }else{
                            $sql = $sql.$values[$i].',';
                        }
                    }
				}
				$sql = $sql.')';
			}else{
			    echo '插入的数据格式错误';
            }

			echo('sql is: '.$sql.'<br>');

//		    $result = @self::$db->exec($sql);
//            if ($result) {
//                return $result;
//            }else{
//                echo self::$db->lastErrorMsg();
//            }

		}
        /*查询username字段，在某一表中*/
		static public function selectRow($colum_value, $colum, $mtablename)
		{
			self::instance();
			$sql=<<<SQL
			SELECT * FROM $mtablename WHERE $colum ='$colum_value';
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
                @self::$db->close();
            }else{
                return [];
            }
		}

		static public function fetchAllRow($mtablename)
		{
			self::instance();
			$sql = "select * from $mtablename";
            echo '<br>'.$sql.'<br>';
			$result = @self::$db->query($sql);

//			$selectedArr = array();
//			if ($result != false){
//			    while ($row = $result->fetchArray(SQLITE3_ASSOC)){
//			        array_push($selectedArr,$row);
//                }
//
//                return $selectedArr;
//            }else{
//			    return [];
//            }

		}

		static public function addOrder($uid)
	    {
		    self::instance();

		    $now = date('Y-m-d H:i:s');
		    $sql = "insert into user_order (uid,time) values ('$uid', '$now');";
		    echo '<br>'.$sql.'<br>';
		    $result = @self::$db->exec($sql);


		    if ($result == false) {
		    	echo @self::return_sqlite_error_msg();
		    }else{
				echo "insert date done successfully";
	            $rowid = @self::$db->lastInsertRowID();
	            var_dump($rowid);
//
//	            if ($rowid) {
//	            	foreach ($orderInfos as $item) {
//	            		echo($item);
//	            	}
//	            }
		    }
		    

		    return $result;
            @self::$db->close();
	    }

	    static function return_sqlite_error_msg(){
		    return 'sqlite error is '.@self::$db->lastErrorMsg();
        }
		//end class
	}


		
    // DBUtile::addOrder('2');
	// DBUtile::insertUser('常营幼儿园','333', 1);
	// DBUtile::fetchUser(1);
	// DBUtile::deleteSQL('user', 4);
?>