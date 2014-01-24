<?php

class IpResourceModel {

    public function get($ip) {

        if (is_null($ip)) {

            return $this->db->GetArray("SELECT id, service, created_at FROM banned_ips ORDER BY created_at DESC LIMIT 100");

        } else {

            return $this->db->GetArray("SELECT id, ip, log, created_at FROM logs WHERE ip=? ORDER BY created_at DESC LIMIT 100", array($ip));

        }
    }
}
