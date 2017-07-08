<?

	class componentOleg extends OlegClass implements iTubes{

		static public function getLinks(){
			return parent::$books;
		}
		
		public function getBooksItems(){
			return self::getLinks();
		}
		public function getVideoItems(){
			return $this->video;
		}
		public function getMusicItems(){
			return $this->music;
		}
	}