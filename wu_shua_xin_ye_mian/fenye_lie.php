<?php
    class Page
	{
		private $total;//总记录数
		private $listRows;//每行页数
		private $limit;
		private $uri;
		private $pageNum;//页数
		private $config = array('header'=>"个记录","prev"=>"上一页","next"=>"下一页","first"=>"首页","last"=>"尾页" );
		private $listNum = 8;
		
		
		public function __construct($total,$listRows,$pa="")
		{
			$this->total = $total;
			$this->listRow = $listRows;
			$this->uri = $this->getUri =($pa);
			$this ->page = !empty($_GET["page"])?$_GET["page"]:1;
			$this->pageNum = ceil($this->total/$this->listRows);
			$this->limit=$this->setLimit();
		}
		private function setLimit(){
			return "Limit".($this->page-1)*$this->listRows.".{this->listRows}";
			}
		private function getUri($pa)
		{
			$url = $_SERVER["REQUEST_URI"].(strpos($_SERVER["REQUEST_URI"],'?')?'':"?").$pa;
			$parse = parse_url($url);
			
			if(isset($parse["query"]))
			{
				parse_str($parse['query'],$params);
				unset($params["page"]);
				$url = $parse['path'].'?'.http_build_query($params);
			}
			return $url;
		}
		function __get($args)
		{
			if(args=="limit")
			return $this->limit;
			else
			return null;
		}
		private function start()
		{
			if($this->total==0)
			return 0;
			else
			return ($this->page-1)*$this->listRows+1;
		}
		private function end()
		{
			return min($this->page*$this->listRows,$this->total);
		}
		private function first()
		{
			$html = "";
			if($this->page==1)
			$html.='';
			else
			$html.="&nbsp;&nbsp;<a href='{$this->uri}$page=1'>{$this->config["first"]}</a>&nbsp;&nbsp;";
			return $html;
		} 
		
		private function prev()
		{
			$html = "";
			if($this->page==1)
			$html.='';
			else
			$html.="&nbsp;&nbsp;<a href='{$this->url}$page=".($this->page-1)."'>{$this->config["prev"]}</a>&nbsp;&nbsp;";
		}
		private function last()
		{
			$html="";
			if($this->page==$this->pageNum)
			$html.='';
			else 
			$html.="&nbsp;&nbsp;<a href='{$this->uri}$page=".($this->pageNum)."'>{$this->config["last"]}</a>&nbsp;&nbsp;";
			return $html;
		}
		
		private function pageList()
		{
			$linkPage = "";
			$inum = floor($this->listNum/2);
			for($i = $inum;$i>=1;$i--)
			{
				$page = $this->page-$i;
				if($page<1)
				{
					continue;
				}
				$linkPage.="&nbsp;&nbsp;<a href='{$this->uri}$page={$page}'>{$page}</a>&nbsp;";
				
			}
			$linkPage .="&nbsp;{this->page}&nbsp;";
			for($i=1;$i<=$inum;$i++)          
			{
				$page= $this->page+$i;
				if($page<=$this->pageNum)
				 $linkPage.="&nbsp;&nbsp;<a href='{$this->uri}$page={$page}'>{$page}</a>&nbsp;";
				 else
				 return $linkPage;
			}
		}
		
	}