<?php

	function LoadAppConfigurationValues()
	{
		try
		{
			$config = parse_ini_file("appconfig.ini", 1);
			/*
			define ($DEBUG,$config['debug']['debug_on']);
			define ($LOG,$config['log']['log_on']);
			define ($LOGFILELOCATION,$config['log']['logfilelocation']);
		*/

			if ($this->myUser === null OR $this->myPass === null OR $this->myDB === null OR $this->myServer === null)
			{
				throw new ConfigurationException("Cannot read configuration values");
			}
			
		}
		catch (ConfigurationException $ex)
		{
			throw $ex;
		}
		catch (Exception $ex)
		{
			throw $ex;
		}	
		return $config;
	}

?>
