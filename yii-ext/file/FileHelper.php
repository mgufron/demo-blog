<?php
/*
@author 		mgufron
@url 			https://github.com/mgufron
@class 			FileHelper
@description 	This class used to reading and writing file
*/

class FileHelper
{
	/*
	@var $resource: the resource handler of the opened file
	*/
	private $resource;
	/*
	@var $fileName: file name instance of the current file
	*/
	private $fileName;

	public function __construct($fileName)
	{
		return $this->open($fileName);
	}

	/*
	@method open: use to open the filename, if not exists it will create a new file
		return current object
	*/
	public function open($fileName)
	{
		$this->fileName = $fileName;
		if(!file_exists($fileName))
		{
			$resource = fopen($fileName, 'x');
			$this->setPermission(0777);
			fclose($resource);
		}
		$this->resource = fopen($fileName,'w+');
		return $this;
	}

	/*
	@method write: use to write content to the current opened resource
		return current object
	*/
	public function write($content)
	{
		fwrite($this->resource, $content);
		return $this;
	}

	/*
	@method read: use to read current file content
		return content of the file
	*/
	public function read()
	{	
		return file_get_contents($this->fileName);
	}
	/*
	@method close: use to close current opened resource
	*/
	public function close()
	{
		return fclose($this->resource);
	}

	/*
	@method getPermission: get current Permission of the file
		return octal file permission
	*/
	public function getPermission($octal=false)
	{
		$permission = fileperms($this->fileName);
		$cut = $octal?2:3;
		return substr(decoct($perms),$cut);
	}

	/*
	@method setPermission: use to change the permission of the file
		return current object
	*/
	public function setPermission($octal)
	{
		chmod($this->fileName, $octal);
		return $this;
	}

	/*
	@method getOwner: use to get the owner of the file
		return the file's owner user info
	*/
	public function getOwner()
	{
		return posix_getpwuid(fileowner($this->fileName));
	}

	/*
	@method getOwner: use to set the owner of the file
		return current object
	*/
	public function setOwner($owner)
	{
		chown($this->fileName, $owner);
		return $this;
	}

	/*
	@magicMethod __toString: return of reading the file contents
	*/
	public function __toString()
	{
		return $this->read();
	}
}