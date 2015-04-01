<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-6-27
 * Time: 下午2:05
 */

class Works_mdl extends  CI_Model
{


    const TABLE = 'draw_works';


    public function __construct()
    {
        parent::__construct();
    }

    public function getList($config=array())
    {
        if(!empty($config['where'])){
            $this->db->where($config['where']);
        }

        if(!empty($config['page'])){
            $this->db->limit(intval($config['limit']));
            $this->db->offset(intval($config['offset']));
        }

        if(!empty($config['order'])){
             $this->db->order_by($config['order']['key'], $config['order']['value']); 
        }

        if(!empty($config['like'])){
            $this->db->like($config['like']['key'],$config['like']['value']);
        }
        /*

        $list = array();
        $list = $this->db->get(self::TABLE)->result_array();
        */
        $list = $this->db->select('w.*,m.nickname')
                        ->from(self::TABLE.' as w')
                        ->join('draw_member as m','w.uid=m.id','left')
                        ->get()->result_array();

        return $list;

    }



    public function add($data){

        return $this->db->insert(self::TABLE,$data);
    }


    public function update($where, $data){
        
        if(!empty($where)){
            $this->db->where($where);
        }

        $this->db->update(self::TABLE, $data);

        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function update_zan($id,$islogin)
    {
        if($islogin){
            $sql = "UPDATE ".self::TABLE.' SET ji = ji+1 WHERE id='.$id;
        }else{
            $sql = "UPDATE ".self::TABLE.' SET zan = zan+1 WHERE id='.$id;
        }

        $this->db->query($sql);
        
    }

    public function del($where=array())
    {
        if(!empty($where)){
            $this->db->where($where);
        }

        return $this->db->delete(self::TABLE);
    }


    public function delall(){

        return $this->db-> truncate(self::TABLE);
    }

    public function get_new_by_id($where)
    {
        $news = array();
        if(!empty($where)){
            $this->db->where($where);
        }

        $news = $this->db->select('w.*,m.nickname')
                        ->from(self::TABLE.' as w')
                        ->order_by('id','desc')
                        ->join('draw_member as m','w.uid=m.id','left')
                        ->get()->row_array();
        //$news = $this->db->get(self::TABLE)->row_array();
        return $news;
    }

    public function get_count($where = array())
    {

        $count = 0;
        if(!empty($where['where'])){
            $this->db->where($where['where']);
        }

        if(!empty($where['like'])){
            $this->db->like($where['like']['key'],$where['like']['value']);
        }
       // print_r($where);
       // $count =  $this->db->count_all_results(self::TABLE);
        $count = $this->db->select('w.*,m.nickname')
                        ->from(self::TABLE.' as w')
                        ->join('draw_member as m','w.uid=m.id','left')
                        ->count_all_results();

        return $count;
    }
}