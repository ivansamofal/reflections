<?
	class MyModule {
		
		public function getBooksItems(){
			return component::getBooks();
		}
		public function getVideoItems(){
			return $this->video;
		}
		public function getMusicItems(){
			return $this->music;
		}
		
	}
	