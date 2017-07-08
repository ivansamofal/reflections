<?
	//автозагрузка классов
	function __autoload( $className ) {
	  $className = strtolower(str_replace( "..", "", $className ));
	  require_once( "/class/$className.php" );
	}

	$media = new Media;
	$content = $media->getContent();
	?>
	
	
	<html>
		<head>
			<meta charset="utf-8">
		</head>
		<body>
		<h1>iTubes</h1>
		<h4>online mediastore</h4>
			<div class="media">
				<h2>Электронные книги:</h2>
				<ul>
					<?foreach($content[0] as $link):?>
						<?foreach($link as $name => $href):?>
							<li><a href="<?=$href?>"><?=$name?></a></li>
						<?endforeach;?>
					<?endforeach;?>
				</ul>
			</div>
			<div class="music">
				<h2>music mp3:</h2>
				<ul>
					<?foreach($content[2] as $app):?>
						<?foreach($app as $name => $item):?>
							<li><a href="<?=$item?>"><?=$name?></a></li>
						<?endforeach;?>
					<?endforeach;?>
				</ul>
			</div>
			<div class="video">
				<h2>video клипы:</h2>
				<ul>
					<?foreach( $content[1] as $article ):?>
						<?foreach($article as $name => $item):?>
							<li><a href="<?=$item?>"><?=$name?></a></li>
						<?endforeach;?>
					<?endforeach;?>
				</ul>
			</div>
		</body>
	</html>
	
	