<?php 
class Mod
{
	protected static $connect;
	public function __construct()
	{
		$array = $config =[
			'host' => 'mysql:host=localhost;dbname=xxxxxx;charset=utf8',
			'login' => 'xxxxx',
			'password' => 'xxxxx'
		];
		self::$connect = new PDO($array['host'],$array['login'],$array['password']);
		if (!self::$connect) {
			die("Провалено");
		}
	}

	public static function setRegiontime(string $name, string $time): bool
	{
		$sql = "INSERT INTO Region VALUES (null, '{$name}', '{$time}')";
		if(self::$connect->exec($sql)){
			return true;
		}else{
			return false;
		}
	}

	public static function setCourier(string $name): bool
	{
		$sql = "INSERT INTO Courier VALUES (null, '{$name}')";
		if(self::$connect->exec($sql)){
			return true;
		}else{
			return false;
		}
	}
	
	public static function setTravel($region, $data, $courier, $nameRegion, $today)
	{
		$sql = "INSERT INTO Travel VALUES (null, '{$region}', '{$data}', '{$courier}', '{$today}')";
		if(self::$connect->exec($sql)){
			return $today;
		}else{
			return $today;
		}
	}

	public static function getArrive($id)
	{
		$sql = "SELECT arrive FROM Travel WHERE id = ".$id;
		$result = self::$connect->query($sql);
		if($row = $result->fetch(\PDO::FETCH_ASSOC)) {
			$arrive = $row['arrive'];
		}
		return $arrive;
	}

	public static function plusDate($time, $id)
	{
		$sql = "UPDATE Travel SET arrive = arrive + INTERVAL '{$time}' DAY WHERE id = ".$id;
		self::$connect->exec($sql);
	}

	public static function getMaxId()
	{
		$sql = 'SELECT max(id) FROM Travel';
		$result =  self::$connect->query($sql);
		if($row = $result->fetch(\PDO::FETCH_NUM)) {
			$id = $row['0'];
		}
		return $id;
	}

	public static function getRegion(): array
	{
		$sql = "SELECT name FROM Region";

		$result = self::$connect->query($sql);
		while ($row = $result->fetch(\PDO::FETCH_NUM)) {
			$array[] = $row[0];
		}
		return $array;
	}

	public static function getCourier(): array
	{
		$sql = "SELECT name FROM Courier";

		$result = self::$connect->query($sql);
		while ($row = $result->fetch(\PDO::FETCH_NUM)) {
			$array[] = $row[0];
		}
		return $array;
	}

	public static function getTimeOfRegion(string $region)
	{
		$sql = "SELECT travel_time FROM Region WHERE name = '{$region}'";

		$result = self::$connect->query($sql);
		if($row = $result->fetch(\PDO::FETCH_NUM)) {
			$array = $row[0];
		}
		return $array;
	}

	public static function getTravel($from, $to)
	{
		 $sql = "SELECT Region.name as region, Travel.departure as departure, 
		 		Courier.name as courier, Travel.arrive as arrive
				FROM Travel
				INNER JOIN Courier ON Travel.courier_id = Courier.id
				INNER JOIN Region  ON Travel.region_id  = Region.id
				WHERE departure BETWEEN '{$from}' and '{$to}'";

		$result = self::$connect->query($sql);
		while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
			$array[] = $row;
		}
		return $array;
	}
	
	public static function getTravel5($from, $to)
	{
		$sql = "SELECT courier_id FROM Travel WHERE departure >= '{$from}' and arrive <= '{$to}'";

		$result = self::$connect->query($sql);
		while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
			$array[] = $row;
		}
		return $array;
	}
	
	public static function getTravel7($courier_id, $date1_start, $date1_end)
	{
    	$i = 0;
    	$sql = "SELECT * FROM Travel";
    	$result = self::$connect->query($sql);
		while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
			if($courier_id == $row["courier_id"]){
                $date2_start = $row["departure"];
                $date2_end = $row["arrive"];
                if(strtotime($date1_start) <= strtotime($date2_end) and strtotime($date1_end) >= strtotime($date2_start)){
                    $i = 1;
                }
            }
		}
    	return $i;
	}
	
	public static function getSearchCourierTravel($courier_id)
	{
        $sql = "SELECT departure,arrive FROM Travel WHERE courier_id = '{$courier_id}'";

		$result = self::$connect->query($sql);
		if($row = $result->fetch(\PDO::FETCH_NUM)) {
			$array = $row[0]." ".$row[1];
		}
		return $array;
	}

	public static function getIdCourier(string $name)
	{
		$sql = "SELECT id FROM Courier WHERE name = '{$name}'";

		$result = self::$connect->query($sql);
		if($row = $result->fetch(\PDO::FETCH_ASSOC)) {
			$res = $row['id'];
		}else{
			$res = 0;
		}
		return $res;
	}

	public static function getIdRegion(string $name)
	{
		$sql = "SELECT id FROM Region WHERE name = '{$name}'";

		$result = self::$connect->query($sql);
		if($row = $result->fetch(\PDO::FETCH_ASSOC)) {
			$res = $row['id'];
		}else{
			$res = 0;
		}
		return $res;
	}
	
	public static function getnameRegion(int $id)
	{
		$sql = "SELECT name FROM Region WHERE id = '{$id}'";

		$result = self::$connect->query($sql);
		if($row = $result->fetch(\PDO::FETCH_ASSOC)) {
			$res = $row['name'];
		}else{
			$res = 0;
		}
		return $res;
	}
	
	public static function getnameCourier(int $id)
	{
		$sql = "SELECT name FROM Courier WHERE id = '{$id}'";

		$result = self::$connect->query($sql);
		if($row = $result->fetch(\PDO::FETCH_ASSOC)) {
			$res = $row['name'];
		}else{
			$res = 0;
		}
		return $res;
	}
	
	public static function get_travel_time(int $id)
	{
		$sql = "SELECT travel_time FROM Region WHERE id = '{$id}'";

		$result = self::$connect->query($sql);
		if($row = $result->fetch(\PDO::FETCH_ASSOC)) {
			$res = $row['travel_time'];
		}else{
			$res = 0;
		}
		return $res;
	}
	
	public static function get_travel_time1(string $name)
	{
		$sql = "SELECT travel_time FROM Region WHERE name = '{$name}'";

		$result = self::$connect->query($sql);
		if($row = $result->fetch(\PDO::FETCH_ASSOC)) {
			$res = $row['travel_time'];
		}else{
			$res = 0;
		}
		return $res;
	}
	
	public static function getTraveiс()
	{
    	$i = 0;
    	$sql = "SELECT * FROM Courier";
    	$result = self::$connect->query($sql);
		while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
			$i++;
		}
    	return $i;
	}
	
	public static function getTraveir()
	{
    	$i = 0;
    	$sql = "SELECT * FROM Region";
    	$result = self::$connect->query($sql);
		while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
			$i++;
		}
    	return $i;
	}

    public static function setTravelsave($region, $data, $courier, $today)
	{
		$sql = "INSERT INTO Travel VALUES (null, '{$region}', '{$data}', '{$courier}', '{$today}')";
		if(self::$connect->exec($sql)){
			return $today;
		}else{
			return $today;
		}
	}

}