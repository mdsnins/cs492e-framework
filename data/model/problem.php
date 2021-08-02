<?php
class Problem {
    private $pid, $answer;
    public $valid, $name, $description;

    public function __construct($pid) {
        $conn = DB::connect();

        $cnt = $conn->query(" SELECT count(*) FROM solve WHERE `pid` = {$pid} ")->fetch_row()[0];
        if($cnt == 0) {
            $valid = FALSE;
            return;
        }

        $this->valid = TRUE;
        $this->pid = $pid;

        $t = $conn->query(" SELECT * FROM problem WHERE `pid`= '{$pid}' ")->fetch_assoc();
        
        $this->answer = $t["answer"];
        $this->name = $t["name"];
        $this->description = $t["description"];

        DB::close($conn);
    }
}