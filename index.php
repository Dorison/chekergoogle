<!DOCTYPE html>
<html>
<head>
	<title> Перевірка позицій будь-якого сайту </title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap Bundle JS (jsDelivr CDN) -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400&display=swap" rel="stylesheet">
	<style type="text/css">
	body{font-family: 'Jost', sans-serif;}
		form{
		
			font-size: 18px;
			max-width: 850px;
			margin: 0 auto;
			
		}
		input,select,label{
			margin: 5px 10px;
		
			font-size: 18px;
			padding:3px 5px;
		}
	
		input[type="text"] {
			width: 100%;
		}
		input[type="submit"] {
		    background-color: #000000;
		    color: #FFF;
		    border: none;
		    padding: 10px 20px;
		    width: 100%;
		    text-transform: uppercase;
		    font-weight: bold;
		}		
		ul{
			list-style: none;
			margin: 40px auto;
			max-width: 800px;
		}
		li{
			margin-bottom: 26px;
			margin-left: 26px;
			position: relative;
		}
		li.other{
			opacity: 0.3;
		}
		.title{
			color:rgb(26, 13, 171);
			font-family: arial, sans-serif;
			font-size: 18px;
			line-height: 21.6px;
			cursor: pointer;
			clear: both;
			display: block;
		}
		.title:hover{
			text-decoration: underline;
		}
		.link{
			color: #006621;
			font-family: arial, sans-serif;
			font-size: 14px;
			line-height: 16px;
			clear: both;
			display: block;
		}
		.snippet{
			color: rgb(84, 84, 84);
			font-family: arial, sans-serif;
			font-size: 13px;
			line-height: 18.2px;
		}
		.rank{
		
		    font-size: 24px;
		    position: absolute;
		    left: -60px;
		    text-align: center;
		    color: #FFF;
		    padding: 22px 15px 10px;
		    background-color: #000000;
		    border-radius: 10px;
		}
		.rank:before{
			content: "Google Position";
		    font-size: 8px;
		    position: absolute;
		    top: 5px;
		    text-align: center;
		    left: 0;
		    width: 90%;
		    margin: 0 auto;
		}

	</style>
</head>
<body>
    <div class="container">
    <div class="row">
<div class="col-md-3"></div><div class="col-md-6 col-sm-12">
	<form action="" method="POST">
		<center><h1>Перевірка позицій Google TEST</h1></center>
		Введіть пошуковий запит, за яким хочете перевірити позицію сайту в Google.
	<input  name="query" type="text" placeholder="Пошуковий запит" size="40"/><!--<input name="query" type="radio" value="Експертиза проектної документації" /> Експертиза проектної документації <input name="query" type="radio" value="Експертиза кошторисів" />Експертиза кошторисів <input name="query" type="radio" value="Експертиза кошторисної документації" /> Експертиза кошторисної документації <input name="query" type="radio" value="Експертиза проектної документації" /> Експертиза проектної документації <input name="query" type="radio" value="Експертиза проектної документації 2022
" /> Експертиза проектної документації 2022 
<input name="query" type="radio" value="Експертиза проектної документації" /> Експертиза проектної документації <input name="query" type="radio" value="Експертиза окремих розділів проекту
" /> Експертиза окремих розділів проекту -->
</br>
<label for="query">Або виберіть запит з популярних:</label>
		<select name="query">
<option value='Експертиза окремих розділів проекту'>Експертиза окремих розділів проекту</option>
<option value='Експертиза проектної документації 2022'>Експертиза проектної документації 2022</option>		
<option value='Експертиза кошторисної документації'>Експертиза кошторисної документації</option>
<option value=' Експертиза проектної документації'> Експертиза проектної документації</option>
<option value='Експертиза кошторисів'>Експертиза кошторисів</option>
<option value='Замовити експертизу кошторисів'>Замовити експертизу кошторисів</option>
<option value='Замовити експертизу проектної документації'>Замовити експертизу проектної документації</option>
		</select>
		<br/>


		<input value="bpe.com.ua" name="domain" type="text" placeholder="bpe.com.ua" size="40" required/>
		<br/>
		<label for="gl">Країна:</label>
		<select name="gl">
			<option value='ua'>Ukraine</option>
		</select>
		<br/>
		<label for="hl">Мова:</label>
		<select name="hl">
<option value='uk'>Українська</option>
<option value='en'>English</option>		
<option value='ru'>Russian</option>
		</select>
		<br/>
		<label for="pages">Шукати на </label>
		<select name="pages">
			<option value="1">Першій сторінці</option>
			<option value="2">Перших двох сторінках</option>
			<option value="5">Перших 5 сторінках</option>
		</select>
<input type="submit" value="Пошук"/>		
	</form>
<div class="col-md-3"></div></div>
</div>
</br>
<hr>
<div class = "row"/><div class="col-md-3"></div><div style="color:green;text-align:center;" class="col-md-6"> <?php echo $_POST["query"];?> </div><div class="col-md-3"></div></div>
<?php
if (isset($_POST["domain"]) && isset($_POST["query"])){


	$GOOGLE_API_KEY = '';
	$GOOGLE_CSE_CX = '';


	$query = urlencode($_POST["query"]);
	$domain = $_POST["domain"];

	//gl - google host - https://developers.google.com/custom-search/docs/xml_results_appendices#countryCodes
	//hl - user language - https://developers.google.com/custom-search/docs/xml_results_appendices#interfaceLanguages
	//pages - how many pages should the search extend


	$pages = isset($_POST["pages"])?$_POST["pages"]:1;
	$gl = isset($_POST["gl"])?$_POST["gl"]:"us";
	$hl = isset($_POST["hl"])?$_POST["hl"]:"en";



	$found = false;
	echo "<ul>";
	for ($page = 1;$page <= $pages && $found == false;$page++){
		$apiurl = sprintf('https://www.googleapis.com/customsearch/v1?q=%s&cx=%s&key=%s&hl=%s&gl=%s&start=%d',$query,$GOOGLE_CSE_CX,$GOOGLE_API_KEY,$hl,$gl,($page-1)*10+1);
		// echo $apiurl;
		$json = file_get_contents($apiurl);
		// $json = file_get_contents('http://localhost/wordpress/serp-checker/test.json');
		$obj = json_decode($json);

		
		foreach ($obj->items as $idx=>$item) {
			if (strpos($item->link, $domain) ){
				$found = true;
				echo "<li>";
			} else{
				echo "<li class='other'>";
			}
				echo "<span class='rank'>".($idx + ($page-1)*10 +1)."</span>";
				echo "<span class='title'>".$item->htmlTitle."</span>";
				echo "<span class='link'>".$item->link."<small>&#x25BC;</small></span>";
				echo "<span class='snippet'>".$item->htmlSnippet."</span>";
				echo "</li>";
			
		}
	}
	if ($found !== true){
		echo "<li>";
			echo "<span class='title'>".$domain." not found</span>";
		echo "</li>";
	}
	echo "</ul>";

}
?>

</body>
</html>
