<?php

namespace app\models;

use app\core\Model;

class Main extends Model {
    public function getConfs() {
        $result = $this->db->all("SELECT id, title, date FROM conferences");
        return $result;
    }
    public function deleteConf($id) {
        $result = $this->db->all("DELETE from conferences WHERE id=".$id);
        return $result;
    }
    public function getConfById($id, $items='*') {
        $result = $this->db->all("SELECT'.$items.' FROM conferences WHERE id=".$id);
        return $result;
    }
    public function saveConf($title, $date, $country, $address_latitude='NULL', $address_longitude='NULL') {
        $insert = "INSERT conferences VALUES(NULL, '".$title."', '".$date."', ".$address_latitude.", ".
            $address_longitude.", '".$country."');";
        $result = $this->db->all($insert);
        return $result;
    }

}