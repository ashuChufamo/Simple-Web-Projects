    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
    <script type="text/javascript">
    	$(".toggleForm").click(function(){
    		$("#signupForm").toggle();
    		$("#loginForm").toggle();
    	});

    	$("#diarycontent").bind('input properychange',function(){
    		$.ajax({
    			method:"POST",
    			url:"updateDatabse.php",
    			data:{content:$('#diarycontent').val()}
    		}).done(function(msg){
    			//alert("Data saved:"+msg);
    		});
    	});
    </script>
  </body>

</html>