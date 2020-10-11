<?php

class scrapper {

    var $url;

    function __construct($url){
        $this->url = $url;
    }

    /**
     * @get_records
     * 
     */
    function get_records() {

        $xml = new DOMDocument();               // Create a new DOM Document to hold our webpage structure
        @$xml->loadHTMLFile($this->url);        // Load the url's contents into the DOM

        $links  = array();                      // Empty array to hold all links to return
        $isHeader = true;

        $titles = array();
        $rows = array();

        $articles = $xml->getElementsByTagName('article');

        foreach($articles as $link) {
            $items  = array();    

            foreach($link->getElementsByTagName('div') as $div){
                if($isHeader){ 
                    $titles[] =  trim($div->nodeValue); //titles
                }else {
                    $items[] = stripos($div->getAttribute('class'), "date") !== false
                                ? strstr(trim($div->nodeValue), PHP_EOL, true)
                                : trim($div->nodeValue);
                } 
            }

            if(!$isHeader)  $rows[] = $items; 

            $isHeader = false;
        }

        $result = array();

        //asemble array (titled) with result of query
        foreach($rows as $row) {

            $index = 0 ; 
            $record = array();

            foreach($row as $elem){
                $record[@$titles[$index++]] = $elem;
            }

            $result[] = $record;
        }
    
        return $result;

    }

}
