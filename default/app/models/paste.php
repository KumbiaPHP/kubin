<?php
class paste extends ActiveRecord{
    protected function initialize(){
        $this->validates_presence_of("post", "message: Error: Debes escribir al menos una línea de código.");
    }
    
}