<?php
/*
@author 		mgufron
@url 			https://github.com/mgufron
@class 			DomainParser
@description 	This class used to parse preserved domain data to be subdomain and domain
*/
class DomainParser implements ArrayAccess
{
	/*
	@var $domainInfo : collection variable that gather data from the parsed domain
	*/
	private $domainInfo=array();

	public function __construct($domain='')
	{
		$this->domainInfo = $this->parseDomain($domain);
		$tihs->domainInfo['default'] = $domain;
		return $this;
	}

	/*
	@method 		parseDomain
	@description 	This function will handle the preserved data to be what we want
	@params 		
		$domain 	Domain data that will be parsed
	*/
	private function parseDomain($domain)
	{
		$pattern = '(?<subdomain>.*)\.(?<domain>(.*)\.(.*))$';
		preg_match('/'.$pattern.'/',$domain, $result);
		return $result;
	}

	/*
	@magicMethod	toString
	@description 	This method is used to retrieve the main domain name directly
	*/
	public function __toString()
	{
		return $this->domainInfo['domain'];
	}
	public function offsetSet($offset, $value) {
		return true;
	}
	public function offsetExists($offset) {
		return isset($this->domainInfo[$offset]);
	}
	public function offsetUnset($offset) {
		return true;
	}
	public function offsetGet($offset) {
		return isset($this->domainInfo[$offset]) ? $this->domainInfo[$offset] : null;
	}
}