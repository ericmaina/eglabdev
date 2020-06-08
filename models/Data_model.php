<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Data_model extends CI_Model
{

     function __construct() {
		          
    }
    var $order=array('id'=>'desc');
   /*
     * Fetch  data from the database
    */
    public function getRows($postData)
    {
        $this->_get_datatables_query($postData);
        if(isset($_POST['length']) && $_POST['length'] != -1)
        {
            $this
                ->db
                ->limit($postData['length'], $postData['start']);
        }
        $query = $this
            ->db
            ->get();
        return $query->result();
    }

    /*
     * Count all records
    */
    public function countAll()
    {
        $this
            ->db
            ->from($this->table);
        return $this
            ->db
            ->count_all_results();
    }

    /*
     * Count records based on the filter params
    */
    public function countFiltered($postData)
    {
        $this->_get_datatables_query($postData);
        $query = $this
            ->db
            ->get();
        return $query->num_rows();
    }

    /* get data by id */

    function get_by_id($id)
    {
        $this
            ->db
            ->where('id', $id);
        return $this
            ->db
            ->get($this->table)
            ->row();
    }

    /*
     * Perform the SQL queries needed for an server-side processing requested
    */
    private function _get_datatables_query($postData)
    {

        $this
            ->db
            ->from($this->table);

        $i = 0;
        foreach ($this->column_search as $item)
        {
            if (isset($postData['search']['value']))
            {
                if ($i === 0)
                {
                    $this
                        ->db
                        ->group_start();
                    $this
                        ->db
                        ->like($item, $postData['search']['value']);
                }
                else
                {
                    $this
                        ->db
                        ->or_like($item, $postData['search']['value']);
                }
                if (count($this->column_search) - 1 == $i)
                {
                    $this
                        ->db
                        ->group_end();
                }
            }
            $i++;
        }

        if (isset($postData['order']))
        {
            $this
                ->db
                ->order_by($this->column_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }
        else if (isset($this->order))
        {
            $order = $this->order;
            $this
                ->db
                ->order_by(key($order) , $order[key($order) ]);
        }
    }

}

/* End of file Inventory_model.php */
/* Location: ./application/models/Inventory_model.php */
