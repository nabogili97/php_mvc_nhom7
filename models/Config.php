<?php 
	
	class Database {
		private $hostname = 'localhost';
		private $username = 'root';
		private $pass = '';
		private $dbname = 'data_shop'; // Đây chính là tên database chúng ta vừa tạo, còn  dòng trên mặc định như trên.

		private $conn = NULL;
		private $result = NULL;


	//Ở trên chúng ta đã khai báo giờ chúng ta viết function kết nối

	 public function connect()
		{
			$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
	// Ở đây là kiểm tra xem nếu không tồn taị conn thì cho hiển thị thông báo thất bại 
			if(!$this->conn){
				echo "Kết nối thất bại";
				exit();
			}
			else {
				mysqli_set_charset($this->conn,'utf8');
			}
			return $this->conn;
		}

	// Thực thi lệnh truy vấn
		public function execute($sql)
		{
			$this->result = $this->conn->query($sql);
			return $this->result;
		}

	//Phuong thuc lay du lieu :

		public function getData()
		{
			if($this->result){
				$data = mysqli_fetch_array($this->result);
			}
			else {
				$data = 0;
			}
			return $data;
		}


	//Phuong thuc lay toan bo du lieu

		public function getAllData($table)
		{								 
			$sql="SELECT * FROM $table ";
			$this->execute($sql);
			if($this->num_rows()==0){
				$data = 0;
			}
			else {
				while ($datas = $this->getData()) {
					$data[] = $datas;
				}
			}
			return $data;
		}

	//Phuong thuc lay du lieu can sua :

		public function getDataID($table)
		{
			$sql = "SELECT * FROM $table WHERE ma_tv = '$id' ";
			$this->execute($sql);
			if($this->num_rows()!0){
				$data = mysqli_fetch_array($this->result);
			}
			else {
				$data = 0;
			}
			return $data;
		}

	//Phuong thuc dem so ban ghi

		public function num_rows()
		{
			if($this->result){
				$num = mysqli_num_rows($this->result);
			}
			else{
				$num = 0;
			}
			return $num;
		}


	// Phương thức thêm dữ liệu
		public function InsertData($hoten, $namsinh, $gioitinh)
		{
			$sql = "INSERT INTO thanh_vien(ma_tv,ten_tv,nam_sinh,gioi_tinh)VALUES (null, '$hoten','$namsinh','$gioitinh') ";
			return $this->execute($sql);
		}


	// Phuong thuc sua du lieu :
		public function UpdateData($matv,$hoten, $namsinh, $gioitinh)
		{
			$sql = "UPDATE thanh_vien SET ten_tv = '$hoten', nam_sinh = '$namsinh', gioi_tinh = '$gioitinh' WHERE ma_tv = '$matv' ";

			return $this->execute($sql);
		}

	// Phuong thuc xoa 

		public function Delete($id, $table)
		{
			$sql = "DELETE FROM $table WHERE ma_tv = '$matv' ";
			return $this->execute($sql);
		}
	}
 ?>