<?

	class component extends MyModule implements iTubes{
		static public $books = [
			'IgorBook1' => '/links/link1',
			'IgorBook2' => '/links/link2',
			'IgorBook3' => '/links/link3',
			'IgorBook4' => '/links/link4',
			'IgorBook5' => '/links/link5'
		];
		public $video = [
			'IgorVideo1' => '/articles/title1',
			'IgorVideo2' => '/articles/title2',
			'IgorVideo3' => '/articles/title3',
			'IgorVideo4' => '/articles/title4',
			'IgorVideo5' => '/articles/title5'
		];
		public $music = [
			'IgorMusic1' => '/apps/app1',
			'IgorMusic2' => '/apps/app2',
			'IgorMusic3' => '/apps/app3',
			'IgorMusic4' => '/apps/app4',
			'IgorMusic5' => '/apps/app5'
		];
		
		static public function getBooks(){
			return self::$books;
		}
	}