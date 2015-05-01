<?php
class UpgroudeAction extends BaseAction{
    
    public function __construct() {
        parent::__construct();
        header("Content-type:text/html;charset=utf-8");
    }
		//  创建XML单项
	 public function romteStatus()
    {	
		function create_item($title_data, $content_dstatus , $content_data, $pubdate_data)
		{
			$item = "<interfacetitle>\n";
			$item .= "<iptitle>" . $title_data . "</iptitle>\n";
			$item .= "<status>" . $content_dstatus . "</status>\n";
			$item .= "<content>" . $content_data . "</content>\n";
			$item .= " <pubdate>" . $pubdate_data . "</pubdate>\n";
			$item .= "</interfacetitle>\n";
			return $item;
		}
		
		$data_array = array(
			array(
			'title' => 'ipconfig',
			'status' => '1',
			'content' => '192.168.1.1',
			'pubdate' => '255.255.255.0',
			),
			array(
			'title' => 'ipconfig',
			'status' => '2',
			'content' => '192.168.1.1',
			'pubdate' => '255.255.255.0',
			)
		);
		
		//$title_size = 1;
		$xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
		$xml .= "<article>\n";
		foreach ($data_array as $data) {
			$text = create_item($data['title'], $data['status'] ,$data['content'], $data['pubdate']);
			$xml .= $text;
		}
		$xml .= "</article>\n";
		header("Content-type: text/xml");
		echo $xml;
		
    }
	
}	