<?php
     class User_model extends CI_model{

        public function delete_user($user_id) {
            // delete the user from the database
            $this->db->where('id', $user_id);
            $result = $this->db->delete('users');
            return $result;
        }
     }
?>