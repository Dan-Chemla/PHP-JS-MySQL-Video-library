<?php

class Video {
   
    public $VideoID;
    public $VideoTitle;
    public $CategoryName;
    public $Description;
    public $Link;

    function __construct($VideoID, $VideoTitel, $CategoryID, $Description, $Link) {
        $this->VideoID = $VideoID;
        $this->VideoTitle = $VideoTitel;
        $this->CategoryName = $CategoryID;
        $this->Description = $Description;
        $this->Link = $Link;
    }

}


