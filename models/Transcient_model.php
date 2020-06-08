<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Transcient_model extends CI_Model
{

     function __construct() {
		 
		 // Load database
        $this->db4 = $this->load->database('db4', true);
		$this->table = 'transcient';
    }
    
   /*
     * Fetch  data from the database
    */
    public function getRows($postData)
    {
        $this->_get_datatables_query($postData);
			if(isset($_POST["length"]) && $_POST["length"] != -1)
			{
				$this
					->db4
					->limit($postData['length'], $postData['start']);
			}
		
        $query = $this
            ->db4
            ->get();
        return $query->result();
    }
   
    /*
     * Count all records
    */
    public function countAll()
    {
        $this
            ->db4
            ->from($this->table);
        return $this
            ->db4
            ->count_all_results();
    }

    /*
     * Count records based on the filter params
    */
    public function countFiltered($postData)
    {
        $this->_get_datatables_query($postData);
        $query = $this
            ->db4
            ->get();
        return $query->num_rows();
    }

    /* get data by id */

    function get_by_id($id)
    {
	$query = $this
				->db4
				->join('gene','transcient.fk_gene_id=gene.gene_id','left')
				->join('genetic_material','transcient.fk_material_id=genetic_material.material_id','left')
				->join('antibiotic','transcient.fk_antibiotic_id=antibiotic.antibiotic_id','left')
				->join('host','transcient.fk_host=host.host_id','left')
				->join('creator','transcient.fk_creator_id=creator.creator_id','left')
				->where('transcient_id ',$id)
				->get($this->table);
        return $query->row();  
    }

    /*
     * Perform the SQL queries needed for an server-side processing requested
    */
    private function _get_datatables_query($postData)
    {
		
        $this
            ->db4
				->join('gene','transcient.fk_gene_id=gene.gene_id','left')
				->join('genetic_material','transcient.fk_material_id=genetic_material.material_id','left')
				->join('antibiotic','transcient.fk_antibiotic_id=antibiotic.antibiotic_id','left')
				->join('host','transcient.fk_host=host.host_id','left')
				->join('creator','transcient.fk_creator_id=creator.creator_id','left')
				->from($this->table);

        $i = 0;
        foreach ($this->column_search as $item)
        {
            if (isset($postData['search']['value']))
            {
                if ($i === 0)
                {
                    $this
                        ->db4
                        ->group_start();
                    $this
                        ->db4
                        ->like($item, $postData['search']['value']);
                }
                else
                {
                    $this
                        ->db4
                        ->or_like($item, $postData['search']['value']);
                }
                if (count($this->column_search) - 1 == $i)
                {
                    $this
                        ->db4
                        ->group_end();
                }
            }
            $i++;
        }

        if (isset($postData['order']))
        {
            $this
                ->db4
                ->order_by($this->column_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }
        else if (isset($this->order))
        {
            $order = $this->order;
            $this
                ->db4
                ->order_by(key($order) , $order[key($order) ]);
        }
    }

}

/* End of file Tfome_model.php */
/* Location: ./application/models/Tfome_model.php */
