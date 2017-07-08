<?
	class IvanClass implements iTubes{
		private $books = [
			'IvanBook1' => '/links/book1',
			'IvanBook2' => '/links/book2',
			'IvanBook3' => '/links/book3',
			'IvanBook4' => '/links/book4',
			'IvanBook5' => '/links/book5'
		];
		private $video = [
			'IvanVideo1' => '/articles/title1',
			'IvanVideo2' => '/articles/title2',
			'IvanVideo3' => '/articles/title3',
			'IvanVideo4' => '/articles/title4',
			'IvanVideo5' => '/articles/title5'
		];
		private $music = [
			'IvanMusic1' => '/apps/app1',
			'IvanMusic2' => '/apps/app2',
			'IvanMusic3' => '/apps/app3',
			'IvanMusic4' => '/apps/app4',
			'IvanMusic5' => '/apps/app5'
		];
		
		public function getBooksItems(){
			return $this->books;
		}
		public function getVideoItems(){
			return $this->video;
		}
		public function getMusicItems(){
			return $this->music;
		}
	}