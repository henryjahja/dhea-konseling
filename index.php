<?php
session_start();
?>
<html>
<head>
<?php
if (isset($_GET['page']) && $_GET['page'] != 'home' && $_GET['page'] != 'about' && $_GET['page'] != 'forum' && $_GET['page'] != 'konseling' && $_GET['page'] != 'anggota' && $_GET['page'] != 'news' ){
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
a:link {text-decoration:none;color:red}      /* unvisited link */
a:visited {text-decoration:none; color:red;}  /* visited link */
a:hover {color:red;}  /* mouse over link */
a:active {color:#00000F;}  /* selected link */
</style>
<style>
        ul.cssMenu, ul.cssMenu ul
        {
        	list-style:none;
        	margin:0; padding:0;
        	position: relative;
        }
		
		/*Style for 1st level menu header*/
       /*cssMenu li:hover
        { 
        	background: #AAAAAA /*background color of menu header (1st level) on hover*/; 
        }*/
        ul.cssMenu li a
        {
			/*Menu link styles*/
        	display: block; 
        	padding: 5px; 
			color:red;
        }
        
        /* Building menu items - for 2nd and more level menu items*/
        ul.cssMenu ul 						
        { 
        	display:none; /*initially menu item is hidden*/
        	position: absolute; /*absolute positioning is important for menu to float*/
			width: 238px; 
			
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
        	color:red;
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
<body background='#FFFFFF'>
<center>
	<table border="0" style="width:1000px;">
	<tr>
	<td style="width:25%;"></td>
		<td style="width:25%;" <?php if (!isset($_GET['page'])){ ?> bgcolor="#DCF0F7" <?php } else { ?> bgcolor="#FFFFFF"<?php }?> >
			<center>
			<a href ="index.php">Home</a>
			</center>
		</td>
		<td style="width:25%;" <?php if (isset($_GET['page']) && $_GET['page'] == 'about'){ ?> bgcolor="#DCF0F7" <?php } else { ?> bgcolor="#FFFFFF" <?php } ?>>
			<center>
			<a href ="index.php?page=about">About</a>
			</center>
		</td>
		
	<td style="width:25%;"></td>
	</tr>
		</table>
</center>

<center>
<?php
include 'userhead.php';
?>
</center>


<?php 
?>
<center>
<table border="0" style="width:1000px;">
<tr>
		<td width="25%" <?php if (isset($_GET['page']) && $_GET['page'] == 'forum'){ ?> bgcolor="#DCF0F7" <?php } else { ?> bgcolor="#FFFFFF" <?php } ?>><center><a href="index.php?page=forum">Forum </a></center></td>

		
		
		<td width="25%" <?php if (isset($_GET['page']) && $_GET['page'] == 'konseling'){ ?> bgcolor="#DCF0F7" <?php } else { ?> bgcolor="#FFFFFF" <?php } ?>><center>
		
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

		<td width="25%" <?php if (isset($_GET['page']) && $_GET['page'] == 'anggota'){ ?> bgcolor="#DCF0F7" <?php } else { ?> bgcolor="#FFFFFF" <?php } ?>><center><a href="index.php?page=anggota">Anggota </a></center></td>
		<td width="25%" align='center' bgcolor="#FFFFFF">
		<?php
		if(isset($_SESSION['user_id'])){
		?>
		<ul class="cssMenu">
        <li>
            <a href="#">Pengaturan</a>           
            <ul>
                <?php if (isset($_SESSION['status']) && $_SESSION['status'] == 'admin'){ ?>
					<li><a href="admin.php">Administration</a></li>
				<?php } ?>
				<li><a href="user.php?page=edit_profil">Edit Profil</a></li>
                <li><a href="logout.php">Logout</a></li>
				
            </ul>
        </li>
		</ul>
		
		<?php
		}
		?>
		</td>
</tr>
	

</table>
</center>

<!-- divs main menu -->

<center>
<div style="text-align:left;height:400px;width:1000;background-color:#ffffff">
<?php

	?>
<?php 

if (isset($_GET['page']) && $_GET['page'] != 'home' && $_GET['page'] != 'about' && $_GET['page'] != 'forum' && $_GET['page'] != 'konseling' && $_GET['page'] != 'anggota' && $_GET['page'] != 'news' ){
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
		<div style="height:200px;width:750;float:left;">
			<iframe src="x/" height='400' width='750' frameborder="0"></iframe>
		</div>
		<!-- akhir welcome screen tanpa login -->
		
		<!-- loginbox -->
		<div style="height:200px;width:250;float:left;">
			<center>
			<?php
				include 'loginbox.php';
			?>
			</center>
			<br>
			<center>
			<iframe src="cal.php" height='188' width='250' frameborder='0'>
			</iframe>
			</center>
		</div>
		<!-- akhir loginbox -->
		
	<?php
	} else {

		if (!isset($_GET['page']) || $_GET['page'] == NULL){
		//isi welcome
		//include 'x/index.p';
		?>
		<iframe src="x/" height='400' width='1000' frameborder="0"></iframe>
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
		} else if (isset($_GET['page']) && $_GET['page'] == 'news'){
		//isi news
		include 'news.php';
		} else if (isset($_GET['page']) && $_GET['page'] == 'about'){
		//isi about
		include 'about.php';
		} else {
			}
		
	}}
?>
</div> 
</center>
</body>