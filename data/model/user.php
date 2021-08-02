<?php
class User {
    private $uid;
    public $nick;
    public function __construct($userid) {
        $conn = DB::connect();
       
        $st = $conn->prepare("SELECT `uid`, `nick` FROM user WHERE userid = ?")
        $st->bind_param("s", $userid);
        $st->execute();
        $t = $st->get_result()->fetch_assoc()
       
        $this->uid = $t["uid"];
        $this->nick = $t["nick"];

        DB::close($conn);
    }

    public function get_solves() {
        $conn = DB::connect();
        
        $t = $conn->query(" SELECT `pid`, `timestamp` FROM solve WHERE `uid`= '{$this->uid}' ");

    }
}