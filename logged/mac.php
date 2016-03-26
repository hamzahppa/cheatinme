<?php 
	$kamus=array("q","a","z","w","s","x","e","d","c","r","f","v","t","g","b","y","h","n","u","j","m","i","k","o","l","p","Q","A","Z","W","S","X","E","D","C","R","F","V","+","G","B","Y","!","N","U","J","M","@","K","O","L","P","2","5","7","1","3","4","6","0","8","9","-","="," ",".");
	
	function getIndex($karakter,$kamus)
	{
		$i=0;
		while($kamus[$i]!=$karakter)
		{$i++;}
		return $i;
	}

	function to6bit($bit)
	{
		$i=0;
		$temp=(6-strlen($bit));
		while($i<$temp)
		{
			$bit="0".$bit;
			$i++;
		}
		return $bit;
	}

	function bitshifting($shift,$biner)
	{
		$biner2=$biner;
		for($i=0;$i<$shift;$i++)
		{
		if($i!=0)
		$biner2=implode("",$biner2);
		$biner2=onebitshifting($biner2);
		}
		$biner2=implode("",$biner2);
		return $biner2;
	}

	function onebitshifting($biner)
	{
	$i=0;
	$len=strlen($biner);
	//echo "panj".$len;
	$tempor[$i]=$biner[$len-1];
	$i++;
		while($i<$len)
		{
			$tempor[$i]=$biner[$i-1];
			//echo $tempor[$i];
			$i++;
		}
		//print_r($tempor);
	return $tempor;
	}

	function concatenateAll($arrbiner)
	{
		$temp="";
		for($i=0;$i<count($arrbiner);$i++)
		{
			$temp=$temp.$arrbiner[$i];
		}
		return $temp;
	}
?>