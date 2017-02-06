<?php
session_start();
?>
<html>
<head>
<?php
if (isset($_GET['page']) && $_GET['page'] != 'home' && $_GET['page'] != 'about' && $_GET['page'] != 'forum' && $_GET['page'] != 'konseling' && $_GET['page'] != 'anggota' && $_GET['page'] != 'tes' ){
?>
<meta http-equiv="Refresh" content="3;url=index.php">
<?php
}
?>

<!--css menu -->
<style>
p
{
text-align:justify;
text-justify:inter-word;
text-indent:30px;
}
</style>
<style>
        ul.cssMenu, ul.cssMenu ul
        {
        	list-style:none;
        	margin:0; padding:0;
        	position: relative;
        }
		
		/*Style for 1st level menu header*/
       cssMenu li:hover
        { 
        	background: #AAAAAA /*background color of menu header (1st level) on hover*/; 
        }
        ul.cssMenu li a
        {
			/*Menu link styles*/
        	display: block; 
        	padding: 5px; 
        	color:#000000;
        }
        
        /* Building menu items - for 2nd and more level menu items*/
        ul.cssMenu ul 						
        { 
        	display:none; /*initially menu item is hidden*/
        	position: absolute; /*absolute positioning is important for menu to float*/
			width: 150px; 
			
			/*Formating of menu items*/
        	border:1px solid #AAAAAA;
        	padding:1px;
        	background:#FFFFFF;
			
			/*optional - to change position of 2nd level menu item*/
			top: 100%; 
        	left: 0; 
        }
        ul.cssMenu ul li
        { 
        	background: #F5F5F5; 
        	color: #000; 
			border-bottom: 1px solid #DDDDDD; 
			float: none; 
		}
									  
        ul.cssMenu ul li a
        { 
        	width: 100%; 
        	display: block; 
        	color:#000000;
        } 

        /* Menu item position for 3rd level and more */
        ul.cssMenu ul ul
        { 
        	left: 100%; 
        	top: 0; 
        }
        
        /* Hover effect for menu*/
        ul.cssMenu li:hover > ul 			
        { 
        	display:block;
        }
    </style>
<!-- css menu end -->


</head>
<body >
<center>
	<table border="0" style="width:650px;">
	<tr>
	<td style="width:25%;"></td>
		<td style="width:25%;" <?php if (!isset($_GET['page'])){ ?> bgcolor="#75A3FF" <?php } else { ?> bgcolor="#FFFFFF"<?php }?> >
			<center>
			<a href ="index.php">Home</a>
			</center>
		</td>
		<td style="width:25%;" <?php if (isset($_GET['page']) && $_GET['page'] == 'about'){ ?> bgcolor="#75A3FF" <?php } else { ?> bgcolor="#FFFFFF" <?php } ?>>
			<center>
			<a href ="index.php?page=about">About</a>
			</center>
		</td>
		
	<td style="width:25%;"></td>
	</tr>
		</table>
</center>

<center><table border="0" style="width:650px;">
<?php
if(isset($_SESSION['user_id'])){
?>
<!-- header (data user) -->
<?php include 'userhead.php'; ?>

<?php
	}
		else{
?>
<th style="height:127px;" colspan="4">
Ini tampil bila tidak login
<!-----Slider-----> 
</th>
<?php }
?>
<tr>
		<td width="25%" <?php if (isset($_GET['page']) && $_GET['page'] == 'forum'){ ?> bgcolor="#75A3FF" <?php } else { ?> bgcolor="#FFFFFF" <?php } ?>><center><a href="index.php?page=forum">Forum </a></center></td>

		<!--
		<ul class="cssMenu">
        <li>
            <a href="#">menu1</a>           
            <ul>
                <li><a href="#">item1</a></li>
                <li><a href="#">item2</a></li>
                <li><a href="#">item3</a></li>
            </ul>
        </li>
		</ul>
		
		
		<td width="25%" <?php //if (isset($_GET['page']) && $_GET['page'] == 'konseling'){ ?> bgcolor="#75A3FF" <?php //} else { ?> bgcolor="#FFFFFF" <?php //} ?>><center><a href="index.php?page=konseling">Konseling</a></center></td>
		
		-->
		
		<td width="25%" <?php if (isset($_GET['page']) && $_GET['page'] == 'konseling'){ ?> bgcolor="#75A3FF" <?php } else { ?> bgcolor="#FFFFFF" <?php } ?>><center>
		
		<ul class="cssMenu">
        <li>
            <a href="index.php?page=konseling">Konseling</a>           
            <ul>
                <li><a href="index.php?page=konseling&kat=pri">Pribadi</a></li>
                <li><a href="index.php?page=konseling&kat=aka">Akademik</a></li>
            </ul>
        </li>
		</ul>
		</center></td>

		<td width="25%" <?php if (isset($_GET['page']) && $_GET['page'] == 'anggota'){ ?> bgcolor="#75A3FF" <?php } else { ?> bgcolor="#FFFFFF" <?php } ?>><center><a href="index.php?page=anggota">Anggota </a></center></td>
		
		<td width="25%" <?php if (isset($_GET['page']) && $_GET['page'] == 'tes'){ ?> bgcolor="#75A3FF" <?php } else { ?> bgcolor="#FFFFFF" <?php } ?>><center><a href="index.php?page=tes">Tes Kepribadian </a></center></td>
</tr>
	

</table> </center>

<!-- divs main menu -->

<center>
<div style="text-align:left;height:400px;width:650;background-color:#99CCFF">
<?php

	?>
<?php 

if (isset($_GET['page']) && $_GET['page'] != 'home' && $_GET['page'] != 'about' && $_GET['page'] != 'forum' && $_GET['page'] != 'konseling' && $_GET['page'] != 'anggota' && $_GET['page'] != 'tes' ){
				?>
				<center>
				<br><br><br><br><br>
				<h3> Page tidak ditemukan! </h3>
				<br>Kembali ke <a href="index.php">halaman utama</a>.
				</center>
				<?php } else { ?>
<?php
	if(!isset($_SESSION['user_id'])){
	?>
	
		
		
		<!-- welcome screen tanpa login -->
		<div style="height:200px;width:430;float:left;background-color:#FFFFFF">
			Cape Deh
		</div>
		<!-- akhir welcome screen tanpa login -->
		
		<!-- loginbox -->
		<div style="height:200px;width:220;float:left;background-color:#FF00FF">
			<center>
			<?php
				include 'loginbox.php';
			?>
			</center>
		</div>
		<!-- akhir loginbox -->
		
	<?php
	} else {

		if (!isset($_GET['page']) || $_GET['page'] == NULL){
		//isi welcome
		//include 'x/index.p';
		?>
		<iframe src="x/" height='400' width='650'></iframe>
		<?php
		} else if (isset($_GET['page']) && $_GET['page'] == 'forum'){
		//isi forum
		include 'forum.php';
		} else if (isset($_GET['page']) && $_GET['page'] == 'konseling'){
		//isi konseling
		include 'konseling.php';
		} else if (isset($_GET['page']) && $_GET['page'] == 'anggota'){
		//isi anggota
		include 'anggota.php';
		} else if (isset($_GET['page']) && $_GET['page'] == 'tes'){
		//isi tes
		include 'tes.php';
		} else if (isset($_GET['page']) && $_GET['page'] == 'about'){
		//isi about
		include 'about.php';
		} else {
			}
		
	}}
?>
</div> 
</center>
<div align='right'>
<div  style='width:70px;height:25px;background-color:#C3C3BD'>
<center><a href="logout.php">Logout</a><center>
</div></div>
</body>