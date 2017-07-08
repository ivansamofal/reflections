<?

	class Media{
		private $plugins = array();
		private $contentMethods = ['getBooksItems', 'getVideoItems', 'getMusicItems'];
		private $content = [];
		function __construct(){
			$isExists = false;
			foreach( glob('class/*/*.php') as $file ){
				if ( is_file( $file ) ){
					include_once($file);
					$isExists = true;
				}
				if( $isExists ){
					$this->findPlugins();
				}
			}
		}
		private function findPlugins(){
			foreach( get_declared_classes() as $class ){
				$refClass = new ReflectionClass($class);
				if( $refClass->implementsInterface('iTubes') && !in_array( $refClass, $this->plugins ) ){
					$this->plugins[] = $refClass;
				}
			}
		}
		public function getMedia($method){
			$list = array();
			foreach( $this->plugins as $plugin ){
				if( $plugin->hasMethod($method) ){
					$pluginMethod = $plugin->getMethod($method);
					if( $pluginMethod->isStatic() ){
						$items = $pluginMethod->invoke(null);
					}else{
						$items = $pluginMethod->invoke( $plugin->newInstance() );
					}
					$list[] = $items;
				}
			}
			return $list;
		}
		public function getContent(){
			foreach( $this->contentMethods as $method ){
				$this->content[] = $this->getMedia($method);
			}
			return $this->content;
		}
		
	}