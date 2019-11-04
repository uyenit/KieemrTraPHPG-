<?php 
	class Model{
		private $host = "localhost";
		private $user = "root";
		private $pass = "";
		private $db = "quanlydanhba";

		public function connect(){
			return mysqli_connect($this->host, $this->user, $this->pass, $this->db);
		}
		public function checkPass($user, $pass){
			$con = $this->connect();
			mysqli_set_charset($con,"utf8");
			$query = "SELECT * FROM `user` WHERE `username` = '$user' AND `password` = '$pass'";
			$data = $con->query($query);
			$count = $data->num_rows;
			if($count > 0){
				$row = $data->fetch_assoc();
			}else{
				return false;
			}
		}

		public function insertUser($username, $password){
			$con = $this->connect();
			mysqli_set_charset($con,"utf8");
			$query = "INSERT INTO `user` (`username`, `password`) VALUES ('$username', '$password');";
			$check = $con->query($query);
			return $check;
		}

		static function getList(){
			$con = $this->connect();
			mysqli_set_charset($con,"utf8");
			$query = "SELECT * FROM `danhba`";
			$data = $con->query($query);
			$result = array();
			if ($data -> num_rows > 0) {
				while($row = mysqli_fetch_assoc($data)){
					$result[] = $row;
				}
			}
			
			return $result;
		}

		public function getSDT($soDT){
			$con = $this->connect();
			mysqli_set_charset($con,"utf8");
			$query = "SELECT * FROM `danhba` WHERE `soDT` = '$soDT'";
			$data = $con->query($query);
			$count = $data->num_rows;
			if($count > 0){
				return $data->fetch_assoc();
			}else{
				return false;
			}
		}


		public function insertData($tenThueBao, $soDT, $email){
			$con = $this->connect();
			mysqli_set_charset($con,"utf8");
			$query = "INSERT INTO `danhba` (`tenThueBao`, `soDT`, 'email') VALUES ('$tenThueBao', '$soDT', '$email');";
			$check = $con->query($query);
			return $check;
		}

		
		public function updateData($tenThueBao, $soDT, $email){
			$con = $this->connect();
			mysqli_set_charset($con,"utf8");
			
			$query = "UPDATE `danhba` SET `tenThueBao`='$tenThueBao',`soDT`='$soDT',`email`='$email' WHERE `soDT` = '$soDT'";
			$data = $con->query($query);
			return $data;
		}
		public function deleteData($soDT){
			$con = $this->connect();
			$query = "DELETE FROM `danhba` WHERE `soDT` = '$soDT'";
			$check = $con->query($query);
			return $check;
        }
        
        static function search($str){
            $data = self::getListFromDB();
            $rs2 = array();
           foreach ($data as $key => $value) {
             if(strcmp ( strtolower($value->firstChar) ,$str)==0)
             {
                 array_push($rs2,$value);
             }
          
        }
        return $rs2;

     }
	}
?>