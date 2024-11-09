<?php

// app/models/DataModel.php

class DataModel {
    public function processData($data) {
        return "Datos procesados: " . htmlspecialchars($data);
    }
}
?>