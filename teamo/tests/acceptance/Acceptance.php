<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module
{
  public function getElements($element)
  {
	  return $this->getModule('WebDriver')->_findElements($element);
  }
  
  public function switchToIframeByCssSelector($locator)
  {
	  $driver = $this->getModule('WebDriver')->webDriver;
	  $my_frame = $driver->findElement(\Facebook\WebDriver\WebDriverBy::cssSelector($locator));
	  $driver->switchTo()->frame($my_frame);
  }
}