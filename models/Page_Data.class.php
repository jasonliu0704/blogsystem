<?php
class Page_Data {
public $title = "";
public $content = "";
public $css = "";
public $embeddedStyle = "";
public $scriptElements = "";
//add css method
public function addCSS($href){
  $this->css .= "<link href='$href' rel='stylesheet' />";
}

//add javascript
public function addScript($src){
  $this->scriptElements .= "<script src='$src'></script>";
}

}
