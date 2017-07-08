<?
// Вступление в тему Отражений (Reflections)



 // function hello( $name, $foo, $bar )
 // {
 // echo "Hello, $name!";
 // } 
 
  // $obj = new ReflectionFunction("array_push"); // Получаем отражение функции
 // echo "<pre>";
// var_dump($obj->isUserDefined());// Выводим комментарий к функции
// var_dump($obj->getExtensionName());// Выводим комментарий к функции

 // echo "</pre>";
 // echo "Файл: {$obj->getFileName()}<br>"; // Выводим название файла и номера строк, с которых функция начинается и заканчивается
 // echo "Строки с {$obj->getStartLine()}
 // по {$obj->getEndLine()}<br>"; 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 // 2. Вывод параметров из функции
 
 // function func( $a = 10, $b, $c1, &$d = 5, &$e = false ){
	 // return 100;
 // }
 
 
 
 // $func = new ReflectionFunction('func');
 // $arrParam = $func->getParameters();
 // var_dump( $arrParam );
 
	 // foreach( $arrParam as $param ){
		
		// var_dump( $param->isPassedByReference() );
		 
		
		
		 // if( $param->isDefaultValueAvailable() ){
			// var_dump( $param->getDefaultValue() );
		 // }
	
	 // }
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 // ==============================================================================================================
// вывод параметров из методов класса
// Получаем методы из класса, потом извлекаем из них параметры и получаем свойства этих параметров

/**  очень полезный класс example */
// interface some{}
// interface some5{}
// class parentClass{}
// trait someName{}
	// class example extends parentClass implements some{
		// use someName;
		// const SOME = 4;
		// const TWO = 2;
		// private $name;
		// public $id = 200;
		// static public $stat = '400';
		
		// function __construct(){
			// $this->name = 'example';
		// }
		
		// public function func1 ( $a, &$b, $c = true, &$d = 10 ){
			// return $a * $b * $d;
		// }
		// public function func2 ( &$abc = 20, $bcd, $cde ){
			// return 400;
		// }
		// protected function func3 ( $ab, &$bc, $cd  ){
			
		// }
	// }
	// new example();
	// class newMyClass{
		// private $_id;
		// public $name;
		
		// function __construct($id, $name){
			// $this->_id = $id;
			// $this->name = $name;
		// }
	// }
	
	// new newMyClass(4, 'class');
	

	// $classObj = new ReflectionClass('example');
	//$some5 = new ReflectionClass('some5');
	// $classObj->hasMethod('func1') ;
	
	// var_dump( $classObj->getStaticPropertyValue( 'stat' ) );
	// $classObj->setStaticPropertyValue( 'stat', '500') ;
	// var_dump( $classObj->getStaticPropertyValue( 'stat' ) );
	
	// foreach( $classObj->getMethods() as $method ){
		// $parameters[] = $method->getParameters();
	// }
	// var_dump($parameters);
	// foreach( $parameters as $params ){
		// var_dump($params);
		// foreach( $params as $param ){
			 // var_dump( $param->isPassedByReference() );
		// }
		// echo '<br>';
		// unset($params);
	// }
	
	// создание newInstance и вызов метода из класса
	// $obj = new ReflectionClass('example');
	// $obj2 = $obj->newInstance();
	// $objFunc = $obj->getMethod('func1');
	 // echo $objFunc->invoke( $obj2, 5, 4, null, 10 );
	
	
	
	// newInstanceArgs - метод ReflectionClass для создания сущности в классе с конструктором
	
	
	
	// class pdf{
		// private $_id;
		// public $name;
		// public $theme;
		
		// function __construct ( $id, $name, $theme ){
			// $this->_id = $id;
			// $this->name = $name;
			// $this->theme = $theme;
		// }
		// public function getPdfInfo(){
			// return 'Книга №' . $this->_id . ', называется: ' . $this->name . '. Жанр: ' . $this->theme;
		// }
	// }
	// $pdf = new pdf(1, 'book', 'theme');
	// $objPdf = new ReflectionClass('pdf');
	// $obj2Pdf = $objPdf->newInstanceArgs( array( '5', '3 Мушкетера', 'Приключения' ) );
	// var_dump($obj2Pdf);
	// $obj2Func = $objPdf->getMethod('getPdfInfo');
	// echo $obj2Func->invoke( $obj2Pdf );
		// var_dump($obj2Func);
			// ReflectionObject::export($pdf); //ReflectionObject
			// $refObj = new ReflectionObject($pdf);
			// var_dump( $refObj->getMethod('getPdfInfo')->invoke($obj2Pdf) );
		// ReflectionProperty
		// var_dump( $objPdf->getProperties() );
		// var_dump( $objPdf->getProperty('name') );
	// $prop = $objPdf->getProperty('name');
	// $prop->setValue($obj2Pdf, 'NewName');
	// var_dump( $prop->isPublic() );
	 

	// var_dump( $obj2Pdf );
	
	
	
	
	
	
	
	
	
	
	
	// ===============================================================
	
	
	class pdf{
		private $_id;
		public $name;
		public $theme;
		
		function __construct ( $id, $name, $theme ){
			$this->_id = $id;
			$this->name = $name;
			$this->theme = $theme;
		}
		final public function getPdfInfo( ){
			return 'Книга №' . $this->_id . ', называется: ' . $this->name . '. Жанр: ' . $this->theme . ', автор: ' . $author;
		}
		private function myPrivate(){
			return 200;
		}
	}
	
	
	// $pdf = new ReflectionClass('pdf');
	// $pdfMethod = $pdf->getMethod('getPdfInfo');
	
	// $pdfMethod = new ReflectionMethod('pdf', 'myPrivate');
	// $pdf = $pdfMethod->getDeclaringClass();
	// $instance = $pdf->newInstanceArgs( array(5, '3 Мушкетера', 'Приключения') );
	// var_dump( $pdfMethod->invoke () );
	// $pdfMethod->setAccessible(true) ;
	// var_dump( $pdfMethod->invoke ($instance) );
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	// $pdf = new ReflectionClass('pdf');
	// $pdfMethod = $pdf->getMethod('getPdfInfo');
	// $pdfMethod = new ReflectionMethod('pdf', 'getPdfInfo');
	// $class = $pdfMethod->getDeclaringClass();
	// $ins = $class->newInstanceArgs(array(10, '3 Мушкетера', 'Приключения'));
	// $myPrivate = $class->getMethod('myPrivate');
	// var_dump($pdfMethod->invoke($ins));
	// var_dump($myPrivate->isPrivate());
	// $myPrivate->setAccessible(true);
	// var_dump($myPrivate->invoke($ins));
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	// ReflectionException
	
	
	// try
 // {
	 // Создаем объект класса example
	 // $exp = new pdf(1, 2, 3); 

	 // Получаем отражение класса
	 // $obj = new ReflectionClass("pdf");
	 // Получаем отражение члена $first
	 // $fst = $obj->getProperty("_id");
	 // Пытаемся передать новое значение закрытому члену
	 // $fst->setValue($exp, 100);
	 // Выводим новое значение
	 // echo $exp->getFirst();
 // }
 // catch(ReflectionException $exc)
 // {
	 // echo "Исключение: {$exc->getMessage()}<br>";
	 // echo "в файле {$exc->getFile()}<br>";
	 // echo "в строке {$exc->getLine()}<br>";
 // } 
 
 // Reflection::export(new ReflectionClass('pdf'));
// Reflection::export(new ReflectionClass('DateTime'));













// ---------------------------------------------------------------------------
// ReflectionExtension - класс для работы с расширениями (просмотр стандартных функций, mysqli, и др.)


// $extension = new ReflectionExtension('standard');

// var_dump( $extension->getName() );
// var_dump( $extension->getVersion() );
// var_dump( $extension->getFunctions() );
// var_dump( $extension->getConstants() );
// var_dump( $extension->getDependencies() );
// var_dump( $extension->getClasses() );
// var_dump( $extension->getClassNames () );
// var_dump( $extension->getINIEntries  () );


	// ---------------------------------------------------------------------------
	// ReflectionProperty - класс для работы со свойствами классов 
	
	
	
	interface MusicInterface{
		public function getPlay();
	}


	class mp3 implements MusicInterface{
		static public $music = 'song.mp3';
		protected $name = 'track10';
		private $extension = '.mp3';
		
		public function getPlay(){
			return 'player play song: ' . $this->name . $this->extension; 
			return 'player play song: ' . self::$music; // вариант для static методов
		}
	}

	$property = new ReflectionProperty('mp3', 'music');
	echo $property->isStatic() ? 'Статическое ' : '';
	echo $property->isPublic() ? 'Публичное ' : '';
	echo $property->isPrivate() ? 'Приватное ' : '';
	echo $property->isProtected() ? 'Protected ' : '';
	echo $property->getName();
	echo $property->isDefault() ? 'Дефолтное' : '';
	echo $property->getValue();
	echo $property->setValue('song2.mp3');
	echo $property->getValue();
	echo $property->getDeclaringClass();
	echo 'Новое значение свойства $music: ' . mp3::$music;



	
	
	
	
	
	
	
	
	
	
	



	// foreach( get_declared_classes() as $class ){
		// $mp3 = new ReflectionClass($class);
		// if ($mp3->implementsInterface('MusicInterface')){
			// var_dump($mp3->implementsInterface('MusicInterface'));
			// if( $mp3->hasMethod('getPlay') ){
				// $mp3Method = $mp3->getMethod('getPlay');
				// if( $mp3Method->isStatic() ){
					// $result = $mp3Method->invoke(null);
				// }else{
					// $instance = $mp3->newInstance();
					// $result = $mp3Method->invoke($instance);
				// }
				// var_dump($result);
			// }
		// }	
	// }
	

