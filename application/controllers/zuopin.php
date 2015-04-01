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
        

        $limit = 12;
        $offset = ($page - 1) * $limit;
        $pagination = '';

        if(!empty($kw)){
        	$countwhere['where'] = array('w.enabled'=>1);
        	$countwhere['like'] = array('key'=>'m.nickname','value'=>$kw);

        }else{
        	$countwhere = array('w.enabled'=>1);
        }
        //$countwhere = array('enabled'=>1);
        $count = $this->works->get_count($countwhere);
        $data['count'] = $count;

        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php?c=zuopin&orders='.$orders.'&kw='.$kw;
        $config['total_rows'] = $count;
        //设置url上第几段用于传递分页器的偏移量
        $config ['uri_segment'] = 4;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['query_string_segment'] = 'page';

		$config['first_link'] = '首页';
        $config['first_tag_open'] = '<div class="lr">';
		//“第一页”链接的打开标签。
		$config['first_tag_close'] = '</div>';
		//“第一页”链接的关闭标签。

		$config['last_link'] = '最后一页';
		$config['last_tag_open'] = '<div class="lr">';
		//“最后一页”链接的打开标签。
		$config['last_tag_close'] = '</div>';
		//“最后一页”链接的关闭标签。

		$config['next_link'] = '下一页';
		$config['next_tag_open'] = '<div class="lr">';
		//“下一页”链接的打开标签。
		$config['next_tag_close'] = '</div>';
		//“下一页”链接的关闭标签。

		$config['prev_link'] = '上一页';
		$config['prev_tag_open'] = '<div class="lr">';
		//“上一页”链接的打开标签。
		$config['prev_tag_close'] = '</div>';
		//“上一页”链接的关闭标签

		$config['cur_tag_open'] = '<div class="ym">';
		//“当前页”链接的打开标签。
		$config['cur_tag_close'] = '</div>';

		$config['num_tag_open'] = '<div class="ymx">';
		//“数字”链接的打开标签。
		$config['num_tag_close'] = '</div>';
		//“数字”链接的关闭标签。



        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();
        if($orders == 'time'){       	
        	$where['order'] = array('key'=>'id','value'=>'DESC');    	
        }elseif($orders == 'piao'){
        	$where['order'] = array('key'=>'`w.zan`+`w.ji`','value'=>'DESC');  
        }

        if(!empty($kw)){
        	$where['like'] = array('key'=>'m.nickname','value'=>$kw);
        }


        $list = array();
        $where['page'] = true;
        $where['limit'] = $limit;
        $where['offset'] = $offset;
        //$where['order'] = array('key'=>'id','value'=>'DESC');
        $where['where'] = array('w.enabled'=>1);
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