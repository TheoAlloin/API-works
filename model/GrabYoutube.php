<?php
class GrabYoutube{
        
    public function __construct($key)
    {
        $this-> key = $key;
    }
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function grabRelativeVideo($idVideo)
    {
        
    }
    private function urlConstruc()
    {
        $base = 'https://www.googleapis.com/youtube/v3/';
    }
    
    public function activitiesListMine($youtube, $part, $maxResults, $mine) {
    $response = $youtube->activities->listActivities(
        $part,
        array(
            'maxResults' => $maxResults,
            'mine' => $mine
        )
    );

    printResults($response);
    }
}

$myYoutube = new GrabYoutube;
$myYoutube->activitiesListMine($service, 'snippet,contentDetails', 25, true);
?>