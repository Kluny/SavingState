<?php
$cookieLife=1200;
session_start();
setcookie(session_name(),session_id(),time()+$cookieLife);
//session_start();							// 1 create a new php document
											// 2 at the beginning of the document, before anything else, check if a cookie has been sent, and if it hasn't, create a cookie

	
																					// 5 second part of php code
?>


<html> 
<!-- 3 head of html -->
<head>
	<title>Saving State</title>

    <!--Lab Number: 10
	Program Name: 	Security and Saving State
	Author: 		Shannon Graham
	Email:			retrostructure@hotmail.com
	Date: 			March 6
	Time estimated: 6h
	Actual time:	6h
	Description: 	Using cookies
	URL:			http://deepblue.cs.camosun.bc.ca/~cst110/SavingState.php
    -->
    
<! --

1 create a new php document

2 at the beginning of the document, before anything else, check 
	if a cookie has been sent, and if it hasn't, create a cookie

3 head of html
4 body of html

5 second part of php code

6 check if cookie has a css choice associated with it already
	7 if it has not, check if post is set. 
		 8 if it is, 
			9 use values asscociated with post to determine which css theme to
				output
			10 give the cookie the attribute 'css' and assign it the value 
				given by post
		11 if post is not set
			12 assign the value of NONE to the cookie's css attribute
				and output the blank css theme.
	13 if it has
		14 use the values associated with the cookie to determine 
		 which css theme to output

15 html form to decide which theme you want	
	
-->
<?php

	
	if (! isset($_SESSION['css'])) { 												// 6 check if cookie has a css choice associate with it already // 7 if it has not, check if post is set. 
		if (isset($_POST['cssselect'])){ 											// 8 if it is, // 9 use values asscociated with post to determine which css theme to output
			$_SESSION['css'] = $_POST['cssselect'];									// 10 give the cookie the attribute 'css' and assign it the value given by post
		} else {																	// 11 if post is not set	
			$_SESSION['css'] = 'none';												// 12 assign the value of NONE to the cookie's css attribute 
		}
	} else { 																		// 13 if it has been set
		if (isset($_POST['cssselect'])){ 											// 8 if it is, // 9 use values asscociated with post to determine which css theme to output
			$_SESSION['css'] = $_POST['cssselect'];									// 10 give the cookie the attribute 'css' and assign it the value given by post
		} else {
			echo " ";
		}
	}
		
	if ($_SESSION['css'] == 'industrial' ) {										//14 use the values associated with the cookie to determine	which css theme to output 
		echo "<LINK href=\"industrial.css\" rel=\"stylesheet\" type=\"text/css\">";
	} else if ($_SESSION['css'] == 'creamcheese' ){
		echo "<LINK href=\"creamcheese.css\" rel=\"stylesheet\" type=\"text/css\">";
	} else if ($_SESSION['css'] == 'tough'){
		echo "<LINK href=\"tough.css\" rel=\"stylesheet\" type=\"text/css\">";
	} else {
		echo "<LINK href=\"none.css\" rel=\"stylesheet\" type=\"text/css\">";
	}
																					// 15 html form to decide which theme you want			
?>
</head>

<!-- 4 body of html -->
<body>
 

<div>
	<h3><i>Choose a style sheet:</i></h3>
		<!-- use post to send user's selection to php, 
		default is the same as no stylesheet.-->
		
		<form action="SavingState.php" method="post">
				<input type="radio" id="cssselect" name="cssselect" value="creamcheese" />
				&nbsp;&nbsp;
				Cream Cheese
					<br />
					<br />
			
				<input type="radio" id="cssselect" name="cssselect" value="industrial"/>
				&nbsp;&nbsp;
				Industrial 
					<br />
					<br />
				
				<input type="radio" id="cssselect" name="cssselect" value="tough"/>
				&nbsp;&nbsp;
				Tough 
					<br />
					<br />
				
				<input type="radio" id="cssselect" name="cssselect" value="none"/>
				&nbsp;&nbsp;
				Default 
					<br />
					<br />
				
				<input type="submit" value="Submit"/>			
			</form>

</div>

<hr />

<!-- css examples -->
<div> 
	<h1>When I was just a baby</h1>
	<h2>My mama told me, son</h2>
	<h3>Always be a good boy, </h3>
	<p class=lyric>
		<b>Don't ever play with guns.</b>
			<br />
		<i>But I shot a man in Reno</i>
			<br />
		Just to watch him die </br>
	</p>
	<h2>Now when I hear that whistle blowing</h2>
	<h1>I hang my head and cry</h1>
</div>
		
<div>
<p>Shannon Made This</p>
<div>

		
</body></html>