<script src="jquery//jquery.tools.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/tool.css"/>	
<table border="0" class="re">
<?php
for($i=31;$i<=50;$i++){
?>
<style>
#download_now<?=$i?> {
	display:block;
	height:20px;
	/*margin-bottom:30px;*/
	overflow:hidden;
	/*text-indent:-999em;*/
	color:#0B3861;
	width:70px;
	cursor:pointer;
	text-decoration:underline;
	} 
</style>
<!-- trigger element. a regular workable link --> 
<tr><td width="300">
<font color="#0080FF">Stepmother taboo</font> </td><td><a id="download_now<?=$i?>">Detalles</a>
<!-- tooltip element --> 
<div class="tooltip"> 
	<img src="http://static.flowplayer.org/img/title/eye.png" alt="Flying screens" 
		style="float:left;margin:0 15px 20px 0" /> 
 
<table style="margin:0"> 
<tr> <td class="label">File</td><td>Illustrator CS5 <?=$i?></td></tr> 
<tr> <td class="label">Date</td><td>2011-03-23</td></tr> 
<tr> <td class="label">Size</td><td>123 kB</td> 
</tr> <tr> <td class="label">OS</td> <td>all</td> </tr>		
</table> 
 
	<a href="/3.2/">Google</a> 
</div></td></tr>
<script> 
// What is $(document).ready ? See: http://flowplayer.org/tools/documentation/basics.html#document_ready
$(document).ready(function() {
 
$("#download_now<?=$i?>").tooltip({ effect: 'slide'});
});
</script>
<?php
}
?></table>