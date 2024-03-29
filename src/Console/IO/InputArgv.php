<?php 
namespace JK\Console\IO;

/**
 * @package JK\Console\IO\InputArgv 
*/ 
class InputArgv implements InputInterface
{

/**
 * Get input argument from console
 * @param null|string $key 
 * @return mixed
*/
public function argument($key=null)
{   
   $arguments = $_SERVER['argv'];
   if($this->is_cli() && !is_null($key))
   {
      return $arguments[$key] ?? null;
   }
   return $arguments;
}
      
/**
* Give count of parses input
* 
* @return int
*/
public function account()
{
   return $_SERVER['argc'];
}


/**
 * Determine if has mode CLI [ Command Line Interface ]
 * @return bool
*/
public function is_cli()
{
	return (php_sapi_name() != 'cli')
	       || $_SERVER['argc'] > 0;
}

}