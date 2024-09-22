<?
//echo($_COOKIE["lang"]);

$lang = addslashes($_GET["lang"]);

if (!empty($lang)){
	setcookie("lang", $lang, NULL, NULL, NULL, NULL, true);
	$_COOKIE["lang"] = $lang;
}
var_dump(empty($_COOKIE["lang"]));
if (empty($_COOKIE["lang"])){
	echo("no lang");
	//setcookie("lang", "en_US");
}
//echo("get cookie...");
echo($_COOKIE["lang"]);
//echo("end cookie...");
//echo("<br/>");
//$myfile = fopen("book.json", "r") or die("Unable to open file!");
//$mycontent = fread($myfile,filesize("book.json"));
if (empty($book)){
	$book = "book.json";
}
$myfile = fopen($book, "r") or die("Unable to open file!");
$mycontent = fread($myfile,filesize($book));

$mydict = json_decode($mycontent,true);
//var_dump($mydict);
/*
foreach($mydict as $i){
	if ($i["key"]=="Gettext Multi-language website demo"){
		var_dump($i["zh_cn"]);
		echo("<br/>");
		var_dump($i["zh_hk"]);
	}
}
*/



function _($key){
	//echo("<br/>");
	//var_dump(gettype($GLOBALS["mydict"]));
	
	foreach ($GLOBALS["mydict"] as $x) {
		if ($x["key"] == $key){
			//var_dump($i[$_COOKIE["lang"]]);
			if (empty($_COOKIE["lang"])){
				return $x["en_US"];
			}else{

				return $x[$_COOKIE["lang"]];
			}
		}
	}
}

//var_dump(_('Gettext Multi-language website demo'));