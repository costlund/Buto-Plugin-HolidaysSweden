<?php
class PluginHolidaysSweden{
  public $holidays = null;
  function __construct(){
    wfPlugin::includeonce('wf/yml');
    wfPlugin::includeonce('date/date_v1');
    $this->holidays = new PluginWfYml(__DIR__.'/data/holidays.yml');
  }
  public function widget_demo($data){
    if(wfRequest::get('year')){
      $data['data']['year'] = wfRequest::get('year');
    }
    $data = new PluginWfArray($data['data']);
    wfHelp::print($this->calcHolidays($data->get()));
  }
  public function calcHolidays($data){
    $this->holidays->set('year', $data['year']);
    $easter_day = $this->calcEasterDay($data);
    if($easter_day){
      $this->holidays->set('success', true);
      /**
       * Set Påskdagen
       */
      foreach($this->holidays->get('helgdagar') as $k => $v){
        if($v['name']=='Påskdagen'){
          $this->holidays->set("helgdagar/$k/calc/date", $easter_day);
        }
      }
      /**
       * 
       */
      foreach($this->holidays->get('helgdagar') as $k => $v){
        $i = new PluginWfArray($v);
        /**
         * day
         */
        if($i->get('day')){
          $this->holidays->set("helgdagar/$k/calc/date", $data['year'].'-'.$i->get('day'));
        }
        /**
         * other
         */
        if($i->get('other')){
          $add = $i->get('other/add');
          $date_v1 = new PluginDateDate_v1($easter_day);
          if($add<0){
            $date_v1->add_days($add*-1, true);
          }else{
            $date_v1->add_days($add);
          }
          $this->holidays->set("helgdagar/$k/calc/date", $date_v1->get_date_format('Y-m-d'));
        }
        /**
         * first_day
         */
        if($i->get('first_day')){
          $this->holidays->set("helgdagar/$k/calc/date", null);
          $date_v1 = new PluginDateDate_v1($data['year'].'-'.$i->get('first_day/from'));
          for($j=0; $j<10; $j++){
            if($date_v1->get_date_format('N')==$i->get('first_day/weekday')){
              $this->holidays->set("helgdagar/$k/calc/date", $date_v1->get_date_format('Y-m-d'));
              break;
            }
            $date_v1->add_days(1);
          }
        }
        /**
         * 
         */
        $date_v1 = new PluginDateDate_v1($this->holidays->get("helgdagar/$k/calc/date"));
        $this->holidays->set("helgdagar/$k/calc/N", $date_v1->get_date_format('N'));
        $free = false;
        if($i->get('free') && $date_v1->get_date_format('N')<=5){
          $free = true;
        }
        $this->holidays->set("helgdagar/$k/calc/free", $free);
      }
    }else{
      $this->holidays->set('success', false);
    }
    return $this->holidays->get();
  }
  public function calcEasterDay($data){
    $easter_day = null;
    $fullmoon = null;
    foreach($this->holidays->get('anchor/fullmoon') as $v){
      if(substr($v, 0, 4)==$data['year']){
        $fullmoon = $v;
      }
    }
    if($fullmoon){
      $date_v1 = new PluginDateDate_v1($fullmoon);
      for($i=0; $i<10; $i++){
        $date_v1->add_days(1);
        if($date_v1->get_date_format('N')==7){
          $easter_day = $date_v1->get_date_format('Y-m-d');
          break;
        }
      }
    }
    return $easter_day;
  }
}