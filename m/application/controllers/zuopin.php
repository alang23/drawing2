<?php


class Zuopin extends Base_Controller
{
	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('works_mdl','works');
	}


	public function index()
	{
                                $userinfo = $this->getMemberinfo();
                $data['userinfo'] = $userinfo;

		$page = isset($_GET['page']) ? $_GET['page'] : 0;
        $page = ($page && is_numeric($page)) ? intval($page) : 1;
        $orders = isset($_GET['orders']) ? $_GET['orders'] : 'piao';



        $kw = isset($_GET['kw']) ? $_GET['kw'] : '';
        if($kw == '输入用户名搜索'){
        	$kw = '';
        }
        $data['kw'] = $kw;
        

        $limit = 6;
        $offset = ($page - 1) * $limit;
        $pagination = '';

        if(!empty($kw)){
        	$countwhere['where'] = array('w.enabled'=>1);
        	$countwhere['like'] = array('key'=>'m.nickname','value'=>$kw);

        }else{
        	$countwhere = array('w.enabled'=>1);
        }

        $count = $this->works->get_count($countwhere);
        $data['count'] = $count;
 

        $this->load->library('pagination');
        $config['base_url'] = base_url().'m/index.php?c=zuopin&m=index&orders='.$orders.'&kw='.$kw;
        $config['total_rows'] = $count;
        //设置url上第几段用于传递分页器的偏移量
        $config ['uri_segment'] = 4;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
		$config['display_pages'] = FALSE;
		$config['first_link'] = false;
		$config['last_link'] = false;
        $config['query_string_segment'] = 'page';

        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();

        if(!empty($kw)){
        	$where['like'] = array('key'=>'m.nickname','value'=>$kw);
        }
        $list = array();
        $where['page'] = true;
        $where['limit'] = $limit;
        $where['offset'] = $offset;
        $where['where'] = array('w.enabled'=>1);
        $where['order'] = array('key'=>'`w.zan`+`w.ji`','value'=>'DESC');  
        if($orders == 'time'){          
                $where['order'] = array('key'=>'id','value'=>'DESC');           
        }elseif($orders == 'piao'){
                $where['order'] = array('key'=>'`w.zan`+`w.ji`','value'=>'DESC');  
        }
        $list = $this->works->getList($where);
        $data['list'] = $list;


		$this->load->view('zuopin',$data);

	}

	//详情
	public function detail()
	{

                                                $userinfo = $this->getMemberinfo();
                $data['userinfo'] = $userinfo;
		$id = $this->input->get('id');
		$config = array('w.id'=>$id);
		$detail = $this->works->get_new_by_id($config);
		if(empty($detail)){
			exit('error');
		}

		$data['detail'] = $detail;

		$this->load->view('zuopin_detail',$data);
	}
}