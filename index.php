<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Linda Horstmyer</title>
<link href="css/layout.css" rel="stylesheet" type="text/css">
<?php require 'logic.php'; ?>
</head>

<body>
	<div id="container">
	<div class="main">
		<!-- begin header -->
		<div id="header">
    		<h1>Project 2</h1>
    		<h4>CSCI E-15 Dynamic Web Applications</h2>
    		<h1>Linda Horstmyer</h1>
    	</div>
    <!-- begin left column -->
	<div class="colleft">
    	<img src="images/lch2.jpg" width="160" height="120" alt=""/>
    	<br /> 
    	<p>What's for Supper?</p>
        <hr/>
    	<img src="images/miya.jpg" width="160" height="268" alt=""/>
    	<br /> 
    	<p>Miss Miya!    <!-- begin center column -->    </p>
	</div>
    <!-- Begin Center -->
	<div class="centercol">
	 	<h1>XKCD Password Generator</h1>
      	<p>Here you can generate a password that you might actually remember!  Based on an idea suggested in a funny XKCD comic (find it <a href="http://xkcd.com/936/">here.</a>), this generator is designed to provide you with a safer, and far easier-to-remember password.  </p>
        <p>Make your selections at right and then submit.</p>
      	<hr>
			<div>
        	<h1>Your New Password:</h1>
            
            <P class="pw"><?php echo $newpw ?></P>
        	</div> 
                 	
 	</div>
   	<!-- begin right column -->
   	<div class="colright">
   		<h3>Choose # of Words </h3>
   		<P>Pick 1, 2, 3, or 4.  More words means more security.</P>
        <form action="logic.php" method="post">
   			<label for="length">How Many?&nbsp;</label>
			<select name="length" id="length">
				<option value=2>2</option>
            	<option value=3>3</option>
            	<option value=4>4</option>            
   			</select>
			<div class="form-group checkbox">
            	<label><br/>
                	<input type="radio" id="numbers" name="numbers" value="Yes" checked>
					<!--<input type="checkbox" id="numbers" name="numbers" value="Yes" checked> -->Add numbers?
				</label>    
				<label><br/>
                	<input type="checkbox" name="symbols" name="symbols" value="Yes" checked> Add symbols?
                </label><br />
                <!--<label>Choose a Theme: </label><br />
   					<input type="radio" name="city" value="city" checked>Cities
					<input type="radio" name="car" value="car">Cars
					<input type="radio" name="flower" value="flower">Flowers -->
    			<hr>
    		<p><input type="submit"></p>
   			</div>
   		</form>
 	</div>
   	<div class="clear"></div>
   	<!-- begin bottom div -->
   		<div class="bottom">
   			
   		</div>
   <!-- begin footer -->
   		<div class="footer">
   		<p>Copyright 2015</p>
   		</div>
<!-- Close main -->
</div>
<!-- Close container -->
</div>
</body>
</html>