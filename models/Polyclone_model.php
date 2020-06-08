<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Polyclone_model extends CI_Model
{
     function __construct() {
		 
        $this->db2 = $this->load->database('db2', true);
		$this->table = 'antibody';
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
					->db2
					->limit($postData['length'], $postData['start']);
			}
		
        $query = $this
            ->db2
            ->get();
        return $query->result();
    }
   
    /*
     * Count all records
    */
    public function countAll()
    {
        $this
            ->db2
            ->from($this->table);
        return $this
            ->db2
            ->count_all_results();
    }

    /*
     * Count records based on the filter params
    */
    public function countFiltered($postData)
    {
        $this->_get_datatables_query($postData);
        $query = $this
            ->db2
            ->get();
        return $query->num_rows();
    }

    /* get data by id */

    function get_by_id($id)
    {
	$query = $this
				->db2
				->join('company','company.id=antibody.companyid','left')
				->join('sampletype','sampletype.idsampletype=antibody.sampletypeid','left')
				->join('antigen','antigen.id=antibody.antigenid','left')
				->join('species','species.idspecies=antibody.speciesid','left')
				->join('users','users.id=antibody.userid','left')
				->where('cloneid', $id)
				->get($this->table);
        return $query->row();  
    }

    /*
     * Perform the SQL queries needed for an server-side processing requested
    */
    private function _get_datatables_query($postData)
    {
		
        $this
            ->db2
            ->join('company','company.id=antibody.companyid','left')
            ->join('sampletype','sampletype.idsampletype=antibody.sampletypeid','left')
            ->join('antigen','antigen.id=antibody.antigenid','left')
			->join('species','species.idspecies=antibody.speciesid','left')
			->join('users','users.id=antibody.userid','left')
            ->from($this->table);

        $i = 0;
        foreach ($this->column_search as $item)
        {
            if (isset($postData['search']['value']))
            {
                if ($i === 0)
                {
                    $this
                        ->db2
                        ->group_start();
                    $this
                        ->db2
                        ->like($item, $postData['search']['value']);
                }
                else
                {
                    $this
                        ->db2
                        ->or_like($item, $postData['search']['value']);
                }
                if (count($this->column_search) - 1 == $i)
                {
                    $this
                        ->db2
                        ->group_end();
                }
            }
            $i++;
        }

        if (isset($postData['order']))
        {
            $this
                ->db2
                ->order_by($this->column_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }
        else if (isset($this->order))
        {
            $order = $this->order;
            $this
                ->db2
                ->order_by(key($order) , $order[key($order) ]);
        }
    }

}

/* End of file Polyclone_model.php */
/* Location: ./application/models/Polyclone_model.php */
