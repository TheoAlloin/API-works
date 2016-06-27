<?php
/**
 * https://developer.yahoo.com/weather/
 */
class Weather {
	
	public function __construct() {
	   $nbDay;
       $city;
    }
    
    #setters
    public function setNbDay($newNbDay){
        $this->nbDay = $newNbDay;
    }
    public function setCity($newCity){
        $this->city = str_replace(' ', '+', $newCity);
    }
    
    
    #retourne la météo pour le jour actuel
    public function getCurrentWeather(){
            $datas = $this->getJsonFile($this->nbDay, $this->city);
            $currentDatas = $datas['forecast']['forecastday'][0]['day'];   #meteoActuelle
            
            //$currentDatas['condition']['icon'] = substr($currentDatas['condition']['icon'], 2);
            
            if($currentDatas){
                $todayWeather = array(
                    'temperature_moy' => $currentDatas['avgtemp_c'],
                    'temperature_max' => $currentDatas['maxtemp_c'],
                    'temperature_min' => $currentDatas['mintemp_c'],
                    'precipitation' => $currentDatas['totalprecip_mm'],
                    'condition_title' => $currentDatas['condition']['text'],
                    'condition_img' => $currentDatas['condition']['icon']
                    );
            }
        return $todayWeather;
    }
    
    #retourne la météo de demain
    public function getTomorrowWeather()
    {
        $week = $this->getWeeklyWeather();
        return $week[1];
    }
    
    #retourne la météo de la semaine (pour nb jours config)
    public function getWeeklyWeather()
    {
        $weeklyDatas = array();
        if(!empty($this->nbDay) && !empty($this->city))
        {
            
            $datas = $this->getJsonFile($this->nbDay, $this->city);
            $currentDatas = $datas['forecast']['forecastday'];   #meteoActuelle
    
            if($currentDatas){
                foreach($currentDatas as $k => $data)
                {
                    //$data['day']['condition']['icon'] = substr($data['day']['condition']['icon'], 1);
                    
                    array_push($weeklyDatas, array(
                           'date' => $data['date'],
                           'temperature_moy' => $data['day']['avgtemp_c'],
                           'temperature_max' => $data['day']['maxtemp_c'],
                           'temperature_min' => $data['day']['mintemp_c'],
                           'precipitation' => $data['day']['totalprecip_mm'],
                           'condition_title' => $data['day']['condition']['text'],
                           'condition_img' => $data['day']['condition']['icon']
                       )
                   );
                }
           return $weeklyDatas;
           }
        }
        else
        {
               echo 'pas de parametre';
        }
    }
    
    #retourne données json
    private function getJsonFile($nbDay, $city)
    {
        $url = "http://api.apixu.com/v1/forecast.json?key=3f54fe2a095d4c5daa795022162406&q=" . $city . "&days=" . $nbDay;
        $page = file_get_contents($url);
        $datas = json_decode($page, true);
        return $datas;
    }
    
    
}
?>