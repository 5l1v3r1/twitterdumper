<?php /* Smarty version Smarty-3.1.21, created on 2015-02-18 19:14:51
         compiled from "/home/jorge/Proyectos/Personal/critizen/app/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31946705254e4d69b9667c4-12520772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5a8540deb698a8788a09f1a14b67d20bb27d6c0' => 
    array (
      0 => '/home/jorge/Proyectos/Personal/critizen/app/templates/index.tpl',
      1 => 1424283281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31946705254e4d69b9667c4-12520772',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_54e4d69b9a7fc4_67486242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e4d69b9a7fc4_67486242')) {function content_54e4d69b9a7fc4_67486242($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <h1>Tweets</h1>

		<div id="tweets">
				<h2>Loading tweets, please wait</h2>
		</div>
		
        <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>

    </body>
</html>

<?php }} ?>
