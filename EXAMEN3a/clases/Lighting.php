<?php
class Lighting extends Connection {

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllLamps(){
        $sql = "SELECT lamps.lamp_id, lamps.lamp_name, lamp_on,
        lamp_models.model_part_number,lamp_models.model_wattage,
        zones.zone_name FROM lamps INNER JOIN lamp_models ON
        lamps.lamp_model=lamp_models.model_id INNER JOIN zones ON
        lamps.lamp_zone = zones.zone_id ORDER BY lamps.lamp_id;";
        $result = $this->conn->query($sql);
      
      $lamps = [];
      while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        $lamp= New Lamp(
            $row['lamp_id'],
            $row['lamp_name'],
            $row['lamp_on'],
            $row['model_part_number'],
            $row['model_wattage'],
            $row['zone_name']);
        $lamps[]=$lamp;
      }
      return $lamps;

    }
    public function drawLampsList()
    {
        $result = $this->getAllLamps();
        
            for ($i = 0; $i < count($mostrar); $i++) {
            }{
                echo "<div class='center'>
                <div class='element off'>" . $row['lamp_id'] . "</div>
                <div class='element off'>" . $row['lamp_name'] . "</div>
                <div class='element off'>" . $row['lamp_on'] . "</div>
                <div class='element off'>" . $row['model_part_number'] . "</div>
                <div class='element off'>" . $row['model_wattage'] . "</div>
                <div class='element off'>" . $row['zone_name'] . "</div>
                </div> ";
            }
        
    }
}