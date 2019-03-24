<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module
{
	public function getConfiguration($element = null)
    {
        return $this->getModule('WebDriver')->_getConfig($element);
    }

    public function getCurrentUrl()
    {
        return $this->getModule('WebDriver')->_getCurrentUri();
    }

    public function setMyCookie($I, $element)
    {
        $I -> setCookie ('PHPSESSID', $element , array(
		    "domain" => "my.zadarma.com",
		    "hostOnly" => True,
		    "httpOnly" => False,
		    "path" => "/",
		    "sameSite" => "no_restriction",
		    "secure" => False,
		    "session" => True,
		    "storeId" => "0",
		    "id" => 16
		));
	}
}
