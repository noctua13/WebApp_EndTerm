<?php
class DataProvider_PDO
{
	public static function ExecuteQuery($sql)
	{
		try 
		{
			$dbh = new PDO("mysql:host=localhost;dbname=mercstoriadb", "root", "");
			$dbh -> query("SET NAMES utf8");
			$result = $dbh -> query($sql);
		}
		catch (PDOException $e) 
		{
			echo "Error: " . $e->getMessage();
		}
		finally 
		{
			$dbh = null;
		}
		return $result;
	}
}
?>