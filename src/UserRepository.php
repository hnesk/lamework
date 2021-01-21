<?php


class UserRepository {
    protected DB $db; #Sichtbarkeit: public ist im aufrufenden code verfügbar, private nur innerhalb der Klasse, protected innerhalb der Klasse und Erweiterungen=Ableitungen ihrer Klasse/Kindklassen
    public function __construct(DB $db) {
        $this->db=$db;
    }

    public function listBy($kitaId = 0) {
        $query = 'SELECT * FROM user';
        if ($kitaId) {
            $query .= 'WHERE kita_id = '.$this->db->escape($kitaId);
        }
        $result = $this->db->con->query($query);
    }
}
