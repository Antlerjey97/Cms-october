<?php 
class Cms5dcba576a5338862606326_04872c74cd683176d0b0fb65b2bd56ecClass extends Cms\Classes\PartialCode
{
public function onEnd()
{
    $this['parentPage'] = explode("/", substr($this->page->url,1));
    $this['getMenu'] = $this['parentPage'][0];
    $this['subMenu'] = ucwords(str_replace("-"," ",$this['getMenu']));
}
}
