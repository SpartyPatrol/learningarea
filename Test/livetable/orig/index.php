<?php
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta charset="utf-8">
    <title>Editable Tables using jQuery - jQuery AJAX PHP</title>   
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="demo-header"></div>
    <div class="container">    
		<div style="text-align:center;width:100%;font-size:24px;margin-bottom:20px;color: #2875BB;">Click on the underlined words to edit them</div>
                <div class="row">
                    <table class= "table table-striped table-bordered table-hover">
                        <thead>
                            <tr>

                                <th colspan="1" rowspan="1" style="width: 180px;" tabindex="0">Name</th>

                                <th colspan="1" rowspan="1" style="width: 220px;" tabindex="0">Description</th>

                                <th colspan="1" rowspan="1" style="width: 288px;" tabindex="0">Status</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
						$query = mysql_query("select * from information");
						$i=0;
						while($fetch = mysql_fetch_array($query))
						{
							if($i%2==0) $class = 'even'; else $class = 'odd';
							
							echo'<tr class="'.$class.'">

                                <td class="xedit" id="'.$fetch['id'].'" key="name"><span class="editable">'.$fetch['name'].'</span></td>
<td class="xedit" id="'.$fetch['id'].'" key="details">'.$fetch['details'].'</td>
<td class="xedit" id="'.$fetch['id'].'" key="status">'.$fetch['status'].'</td>
                            </tr>';							
						}
						?>
                        </tbody>
                    </table>
        </div>
		<footer>
            <a  href="http://www.jqueryajaxphp.com/dynamically-animate-jquery-knob">Tutorial: Live table edit using jQuery, AJAX and PHP (Twitter Bootstrap) </a>
		</footer>
		<script src="assets/js/jquery.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-editable.js" type="text/javascript"></script> 
<script type="text/javascript">
jQuery(document).ready(function() {  
        $.fn.editable.defaults.mode = 'popup';
        $('.xedit').editable();		
		$(document).on('click','.editable-submit',function(){
			var key = $(this).closest('.editable-container').prev().attr('key');
var x = $(this).closest('.editable-container').prev().attr('id');
var y = $('.input-sm').val();
var z = $(this).closest('.editable-container').prev().text(y);

			$.ajax({
				url: "process.php?id="+x+"&data="+y+'&key='+key,
				type: 'GET',
				success: function(s){
					if(s == 'status'){
					$(z).html(y);}
					if(s == 'error') {
					alert('Error Processing your Request!');}
				},
				error: function(e){
					alert('Error Processing your Request!!');
				}
			});
		});
});
</script>
    </div>
</body>
</html>