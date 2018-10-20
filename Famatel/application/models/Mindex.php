<?php
    class Mindex extends CI_Model
    {
        public function selectMenu()
        {
            $query = $this->db->SELECT('nom')
            ->get("menu");
            if($query->num_rows() > 0)
            {
                return $query->result();
            }
            else
            {
                return false;
            }
        }
        public function selectService()
        {
            $query = $this->db->SELECT('*')
            ->get("service");
            if($query->num_rows() > 0)
            {
                return $query->result();
            }
            else
            {
                return false;
            }
        }
        public function selectRealisation()
        {
            $query = $this->db->SELECT('*')
            ->get("realisation");
            if($query->num_rows() > 0)
            {
                return $query->result();
            }
            else
            {
                return false;
            }
        }
        public function selectPartenaire()
        {
            $query = $this->db->SELECT('*')
            ->get("partenaire");
            if($query->num_rows() > 0)
            {
                return $query->result();
            }
            else
            {
                return false;
            }
        }
    }
?>