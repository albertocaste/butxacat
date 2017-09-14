<?php 
	function alpha($num){
		$str = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,0,1,2,3,4,5,6,7,8,9";

		$array = explode(",", $str);

		$alpha = "";
		for ($i=0; $i < $num; $i++) { 
			$limite = count($array);
			$random = rand(0,$limite - 1);
			$letra = $array[$random];
			$alpha .= $letra;
		}

		return $alpha;
	}
?>