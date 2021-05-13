<?php
require_once("./DBException.php");
require_once("./AppException.php");

class db
{
	private static $instance = null;
	private $connection;
	private $myServer;
	private $myUser;
	private $myPass;
	private $myDB;
		
	public static function GetInstance()
	{
		if (self::$instance == null)
		{
			self::$instance = new self;	
		}
		return self::$instance;
	}
	
	private function LoadConfigValues($DBTYPE)
	{	
		try
		{
			if ($DBTYPE == "SQLSERVER")
			{
				$config = parse_ini_file("appconfig.ini", 1);
				$this->myUser = $config['sqlserver_database']['db_username'];
				$this->myPass = $config['sqlserver_database']['db_password'];
				$this->myDB = $config['sqlserver_database']['database'];
				$this->myServer = $config['sqlserver_database']['db_host'];	
				if ($this->myUser === null OR $this->myPass === null OR $this->myDB === null OR $this->myServer === null)
				{
					throw new DBException("Cannot read configuration values");
				}
			}
			if ($DBTYPE == "MYSQL")
			{
				$config = parse_ini_file("appconfig.ini", 1);
				$this->myUser = $config['mysql_database']['db_username'];
				$this->myPass = $config['mysql_database']['db_password'];
			/*
				$this->myDB = $config['mysql_database']['database'];
	*/
				$this->myServer = $config['mysql_database']['db_host'];	
				if ($this->myUser === null OR $this->myPass === null OR $this->myDB === null OR $this->myServer === null)
				{
					throw new DBException("Cannot read configuration values");
				}
			}
		}
		catch (DBException $ex)
		{
			throw $ex;
		}
	}
	
	private function __construct()
	{	
	    try 
		{
			$this->LoadConfigValues("MYSQL");
			
			/*connection to the database*/
			$this->connection = mysql_connect($this->myServer, $this->myUser,$this->myPass);
			if($this->connection === false)
			{
				throw new DBException("Unable to create db Singleton");
			}
		}
		catch (DBException $ex)
		{
			throw $ex;
		}
		catch (ConfigurationException $ex)
		{
			throw $ex;
		}
		catch (Exception $ex)
		{
			throw $ex;
		}
	}

	
	
	public static function query($query,$params=null)
	{
		try 
		{
			if (self::$DBTYPE == "MYSQL")
			{
				// sanitize $params
				$result = mysql_query(self::GetInstance()->connection,self::sanitize($query,'sql'),$params);
			}
			if (self::$DBTYPE == "SQLSERVER")
			{
				// sanitize $params
				$result = sqlsrv_query(self::GetInstance()->connection,self::sanitize($query,'sql'),$params);
			}
			
			if (!$result)
			{
				throw new DBException("Failed to execute query: " . $query);
			}
			return $result;
		}
		catch (DBException $ex)
		{
			throw $ex;
		}
	}
	
	private static function sanitize($var, $type)
	{
		try
		{
			switch($type) 
			{
				case 'html':
					$safe = htmlspecialchars($var);
					break;
				case 'sql':
					$safe = filter_var($var, FILTER_SANITIZE_STRING);
					break;
				case 'file':
					$safe = preg_replace('/(\/|-|_)/','',$var);
					break;
				case 'shell':
					$safe = escapeshellcmd($var);
					break;
				default:
					$safe = htmlspecialchars($var);
			}
			return $safe;
		}
		catch(DBSanitizeException $ex)
		{
			throw $ex;
		}		
	}	
}
	
