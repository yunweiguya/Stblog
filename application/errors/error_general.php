<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Error</title>
    <style type="text/css">
	body
	{
		padding-right: 32px;
		margin-top: 40px;
		padding-left: 32px;
		font-size: 13px;
		background: #eee;
		padding-bottom: 32px;
		color: #000;
		padding-top: 32px;
		font-family:Verdana;
	}
	
	#main
	{
		border-right: #bbb 1px solid;
		border-top: #bbb 1px solid;
		background: #fff;
		padding-bottom: 32px;
		border-left: #bbb 1px solid;
		width: 550px;
		padding-top: 20px;
		border-bottom: #bbb 1px solid;
		text-align:left;
		padding-left:60px;
		padding-right:50px;
		
	}
	
	div#heading
	{
		padding-right: 0px;
		padding-left: 0px;
		font-weight: bold;
		font-size: 120%;
		padding-bottom: 15px;
		margin: 0px;
		color: #904;
		padding-top: 0px;
		font-family: arial;
	}
	h2
	{
		padding-right: 0px;
		padding-left: 0px;
		font-weight: bold;
		font-size: 105%;
		padding-bottom: 0px;
		margin: 0px 0px 8px;
		text-transform: uppercase;
		color: #999;
		padding-top: 0px;
		border-bottom: #ddd 1px solid;
		font-family: "trebuchet ms" , "" lucida grande "" , verdana, arial, sans-serif;
	}
	p
	{
		padding-right: 0px;
		padding-left: 0px;
		padding-bottom: 6px;
		margin: 0px;
		padding-top: 6px;
	}
	a:link
	{
		color: #002c99;
		/*ext-decoration: none;*/
		font-size: 12px;
	}
	a:visited
	{
		color: #002c99;
		/*text-decoration: none;*/
		font-size: 12px;
	}
	a:hover
	{
		color: #cc0066;
		background-color: #f5f5f5;
		text-decoration: underline;
		font-size: 12px;
	}
    </style>

</head>
<body>
<div style="width:100%;">
    <div align="center">
        <div id="main">
            <div id="heading"><?php echo $heading; ?></div>
            <?php echo $message; ?>
  		</div>
    </div>
</div>
</body>
</html>