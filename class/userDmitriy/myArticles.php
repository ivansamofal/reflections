<?
	class MyArticles implements iTubes{
		private $books = [
			'book1' => '/links/book1',
			'book2' => '/links/book2',
			'book3' => '/links/book3',
			'book4' => '/links/book4',
			'book5' => '/links/book5'
		];
		private $video = [
			'video1' => '/articles/video1',
			'video2' => '/articles/video2',
			'video3' => '/articles/video3',
			'video4' => '/articles/video4',
			'video5' => '/articles/video5'
		];
		private $music = [
			'music1' => '/apps/music1',
			'music2' => '/apps/music2',
			'music3' => '/apps/music3',
			'music4' => '/apps/music4',
			'music5' => '/apps/music5'
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