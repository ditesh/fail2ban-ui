<?php

class IpResourceModel {

    public function get($ip) {

        if (is_null($ip)) {

            return $this->db->Execute("SELECT * FROM banned_ips ORDER BY created_at DESC LIMIT 100");

        } else {

            return $this->db->Execute("SELECT * FROM logs WHERE ip=? ORDER BY created_at DESC LIMIT 100", array($ip));

        }
    }
}
