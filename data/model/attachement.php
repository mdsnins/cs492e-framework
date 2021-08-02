<?php
class Attachement {
    private $aid;
    public $valid, $name, $description, $file;

    public function __constructor($aid) {
        $conn = DB::connect();

        $cnt = $conn->query(" SELECT count(*) FROM attachemnt WHERE `aid` = {$aid} ")->fetch_row()[0];
        if($cnt == 0) {
            $valid = FALSE;
            return;
        }

        $this->valid = TRUE;
        $this->aid = $aid;

        $t = $conn->query(" SELECT * FROM attachment WHERE `aid` = '{$aid}' ")->fetch_assoc();

        $this->name = $t["name"];
        $this->description = $t["description"];
        $this->file = $t["file"];

        DB::close($conn);
    }
}