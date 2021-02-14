<!DOCTYPE html>
<html>
<head>
	<title> Covid19</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style type="">
		
		nav {
	margin: 0;
	padding: 50;
	background-color: blue;
	width: 100%;
	position: fixed;
    left: 0;
    right: 0;

}

nav ul {
	padding: 0;
    margin: 0;
	list-style: none;
	position: relative;
    width: 100%;

	}
	
nav ul li {
	display:inline-block;
	background-color: blue;
	float: right;



	}

nav a {
	display:block;
	padding:0 10px;	
	color:#FFF;
	font-size:20px;
	line-height: 60px;
	text-decoration:none;

}

nav a:hover { 
	background-color: #000000; 
}

/* Hide Dropdowns by Default */
nav ul ul {
	float: right;
	display: none;
	position: absolute; 
	top: 60px; /* the height of the main nav */

}
	
/* Display Dropdowns on Hover */
nav ul li:hover > ul {
	display:inherit;
}
	
/* Fisrt Tier Dropdown */
nav ul ul li {
	width:170px;
	float:none;
	display:list-item;
	position: relative;
}

/* Second, Third and more Tiers	*/
nav ul ul ul li {
	position: relative;
	top:-60px; 
	right:170px;
}

	
/* Change this in order to change the Dropdown symbol */
li > a:after { content:  ''; }
li > a:only-child:after { content: ''; }
	</style>
</head>
<body>
<nav>
    <ul >
        <li style="font-weight: 100px "> <a href="#"> دعم كرونا  </a></li>
        <li><a href="#">الصفحة الرئيسية  </a></li>
        <li >
            <a href="#">تحديث التنشيط  </a>
            <ul>
                <li>
                    <a href="#"> البطاقات الغير منشطة  </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">بطاقات منشطة  </a>
            <ul>
                <li>
                    <a href="#">بحث تاريخ  </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"> التقارير </a>
            <ul>
                <li>
                    <a href="#">التقرير الكلي  </a>
                    <ul>
                        <li><a href="#"> تقرير التخصيص   </a></li>
                        <li><a href="#"> تقرير التنشيط   </a></li>
                        <li><a href="#"> تقرير التغذية   </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"> تقرير ولاية  </a>
                    <ul>
                    	<li><a href="#"> تقرير التخصيص   </a></li>
                        <li><a href="#"> تقرير التنشيط   </a></li>
                        <li><a href="#"> تقرير التغذية   </a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<br><br><br><br><br>

</body>
</html>