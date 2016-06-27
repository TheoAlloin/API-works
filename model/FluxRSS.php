<?php

/**
 *  Renvoie un tableau de données de flux RSS pour un lien donné en parametre
 */
class FluxRSS {

	public function __construct() {
		$urlRSS;
	}
    
    #setter
	public function setFile($myUrlRSS) {
		$this->urlRSS = $myUrlRSS;
	}

	public function readRSS() {
    
		$rss = simplexml_load_file($this->urlRSS);
		$rssDatas = array();
        
        if(!empty($rss)){
    		foreach ($rss->channel->item as $k => $item) {
    			$datetime = date_create($item->pubDate);
    			$date = date_format($datetime, 'd M Y');
    		    
                array_push($rssDatas, array(
                    'title' => $item->title,
                    'link' => $item->link,
                    'date' => $date,
                    'description' => $item->description,
                    'image' => $item->enclosure
                    )
                );
            }
        }
        return $rssDatas;
	}
}
