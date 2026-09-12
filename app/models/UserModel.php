<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserModel extends Model
{
    protected $table = 'product_users';
    protected $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }

    public function find_by_username($username)
    {
        $result = $this->db->table($this->table)
                            ->where('username', $username)
                            ->get();

        if (empty($result)) {
            return null;
        }

        // Kung directang single row na (may 'username' key mismo), gamitin yun.
        // Kung listahan ng rows (may [0] key), kunin yung unang item.
        if (isset($result['username'])) {
            $row = $result;
        } elseif (isset($result[0])) {
            $row = $result[0];
        } else {
            return null;
        }

        return is_array($row) ? (object) $row : $row;
    }
}