<html>
<body>
<ul class="dropdown-menu" role="menu" id="ChooseAreaList">
   <li><a href="#">Select Destination</a></li>
   <li><a href="#">HSR</a></li>
   <li><a href="#">Bommanahalli</a></li>
   <li><a href="#">Kormangala</a></li>
</ul>
<script >
	
$(".dropdown-menu li a").click(function(){
   var selText = $(this).text();///User selected value...****
   $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
});
</script>
</body>
</html>