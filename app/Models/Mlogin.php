<?php

namespace App\Models;

use CodeIgniter\Model;

class Mlogin extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pv_user';
    protected $primaryKey       = 'user_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_code', 'user_name', 'user_password', 'user_lastupdated'];

    public function checking_username($username)
    {
        $query = $this->select('gr.user_id, gr.user_name, gr.user_code, gr.user_password, gr.user_lastupdated')
            ->from($this->table . ' as gr')
            ->where('gr.user_name', $username)
            ->get()
            ->getResultArray();

        return $query;
    }



    public function checking_user($username, $password)
    {
        $this->select("gr.user_name");
        $this->from($this->table . ' as gr');
        $this->where("gr.user_name", $username);
        $this->where("gr.user_password", $password);

        $query = $this->get()->getResultArray();

        if (!empty($query)) {
            $result['status'] = true;
            return $result;
        } else {
            $result['status'] = false;
            return $result;
        }
    }


    function get_data_user($username, $password)
    {
        $this->select("
        gr.user_id,
        gr.user_name,
        gr.user_scanPutaway,
        gr.user_scanCargo,
        gr.user_scanPicking,
        go.usergroup_id,
        go.usergroup_name,
        em.employee_id,
        em.emplpyee_name,
        ps.position_id,
        ps.position_name,
        ps.position_level,
        ");
        $this->from($this->table . ' as gr');
        $this->join($this->position . ' as go', 'go.usergroup_id=gr.user_usergroupid', 'left');
        $this->join($this->position . ' as em', 'm.employee_id=gr.user_employeeid', 'inner');
        $this->join($this->position . ' as ps', 'ps.potition_id=em.employee_positionid', 'inner');
        $this->where("gr.user_name", $username);
        $this->where("gr.user_password", $password);

        $query = $this->get()->result_array();
        // echo $this->last_query();
        // die();
        return $query;
    }
}
