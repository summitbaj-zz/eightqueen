
<html>
<head>
</head>
<body>
<script src="jquery-3.1.1.min.js"></script>
<script>
$( ".id0-0" ).css( "border", "13px solid red" );
</script>

</script>
<? for($i=0; $i<=7; $i++){ ?>
<div style="height:50px">
<? for($j=0; $j<=7; $j++){ ?>
<div class="id<? echo $i; ?>-<? echo $j; ?>" style="display:block; width:50px; height:50px; float:left; background-color:<?  if(($j+$i)%2==0){ ?>#ccc<? } ?>;">
(<? echo $i; ?>, <? echo $j; ?>)
</div>
<? } ?>
</div>
<? } ?>
</body>
</html>