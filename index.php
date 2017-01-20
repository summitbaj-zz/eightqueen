<?

$chess[8][8]=array();
for($i=0; $i<8; $i++){
for($j=0; $j<8; $j++){
	
	$chess[$i][$j]=0;
	
}}
$no_of_queen=0;
 ?>
 <? 
 
 function mark($x,$y,$board){
		 global $no_of_queen;

		 for($i=0; $i<=7; $i++){ 
				for($j=0; $j<=7; $j++){ 
				
				if($i==$x & $j==$y){
					$chess[$i][$j]=1;
				
				}elseif($j==$y | $i==$x | (($j-$y)==($i-$x)) | (($j-$y)==-($i-$x))){
					$chess[$i][$j]=2;
					
				}else{
					
					$chess[$i][$j]=$board[$i][$j];
				}
				
		 }
		 
		 }
		 $no_of_queen++;
		 return $chess;
 
 }
 
 function nextvalue($board){
$attempt=rand(0,6);
$count_attempt=0;
 for($i=0; $i<=7; $i++){ 
				for($j=0; $j<=7; $j++){ 
				if($board[$i][$j]==0){
					$x=$i;
					$y=$j;
					if($attempt==$count_attempt){
					break;
					}
				}
				}
	 $count_attempt++;
	 }
	 
	return mark($x,$y,$board);
 }
 
 function is_empty_left($board)
 {
			 for($i=0; $i<=7; $i++){ 
				for($j=0; $j<=7; $j++){ 
				if($board[$i][$j]==0){
					return 1;
				}
				}
	 }
 }
 

function nextsteps($chess){
while(is_empty_left($chess)==1){ 
$chess = nextvalue($chess);
}
return $chess;
	
}
 
 
 
//$chess = mark(3,0,$chess);
$chess = mark(rand(0,7),rand(0,7),$chess);


$chess = nextsteps($chess);
echo $no_of_queen;
 if($no_of_queen!=8){?>
 <script>
 setTimeout(function(){ location.reload(); }, 1000);
 </script>
 <?}
 ?>
 
<table border=2>
<? for($i=0; $i<=7; $i++){ ?>
<tr>
<? for($j=0; $j<=7; $j++){ ?>
<td width="50" height="50" bgcolor="<? if($chess[$i][$j]==1){?>#00dd00<?}
elseif($chess[$i][$j]==2){
	?>#999<?}else{ ?><? if(($j+$i)%2==0){ ?>#ccc<? } ?><? } ?>">
(<? echo $i; ?>, <? echo $j; ?>)
</td>
<? } ?>
</tr>
<? } ?>
</table> 