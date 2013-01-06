<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php //echo $title_for_layout; ?>

    </title>
<head>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-23019901-1']);
        _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#flashMessage').delay(10000).slideUp('slow');
        });
    </script>
    <script type="text/javascript" async="" src="/js/bsa.js"></script>
    <script type="text/javascript" id="_bsap_js_c466df00a3cd5ee8568b5c4983b6bb19"
            src="http://s3.buysellads.com/r/s_c466df00a3cd5ee8568b5c4983b6bb19.js?v=1356017400000"
            async="async"></script>
    <style type="text/css" id="bsa_css">.one {
        position: relative
    }

    .one .bsa_it_ad {
        display: block;
        padding: 15px;
        border: 1px solid #e1e1e1;
        background: #f9f9f9;
        font-family: helvetica, arial, sans-serif;
        line-height: 100%;
        position: relative
    }

    .one .bsa_it_ad a {
        text-decoration: none
    }

    .one .bsa_it_ad a:hover {
        text-decoration: none
    }

    .one .bsa_it_ad .bsa_it_t {
        display: block;
        font-size: 12px;
        font-weight: bold;
        color: #212121;
        line-height: 125%;
        padding: 0 0 5px 0
    }

    .one .bsa_it_ad .bsa_it_d {
        display: block;
        font-size: 11px;
        color: #434343;
        font-size: 12px;
        line-height: 135%
    }

    .one .bsa_it_ad .bsa_it_i {
        float: left;
        margin: 0 15px 10px 0
    }

    .one .bsa_it_p {
        display: block;
        text-align: right;
        position: absolute;
        bottom: 10px;
        right: 15px
    }

    .one .bsa_it_p a {
        font-size: 10px;
        color: #666;
        text-decoration: none
    }

    .one .bsa_it_ad .bsa_it_p a:hover {
        font-style: italic
    }</style>

    <script type="text/javascript" >
        (function(){
            var bsa = document.createElement('script');
            bsa.type = 'text/javascript';
            bsa.async = true;
            bsa.src = 'http://s3.buysellads.com/ac/bsa.js';
            (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
        })();

    </script>
</head>

<?php //echo $html->css('styles'); ?>
<?php
echo $this->Html->meta('icon');
		echo $this->Html->css(array('bootstrap','bootstrap.min','bootstrap-responsive','bootstrap-responsive.min.css','style'));

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <?php echo $this->Html->link('Feedback',array('controller'=>'users','action'=>'dashboard'),array('class'=>"brand"));?>
<!--            <a class="brand" href="/">Feedback</a/>-->
            <div class="nav-collapse" id="main-menu">
                <ul class="nav" id="main-menu-left">
<!--                    <li><a onclick="pageTracker._link(this.href); return false;" href="http://news.bootswatch.com">News</a></li>-->
<!--                    <li><a id="swatch-link" href="/#gallery">Gallery</a></li>-->
<!--                    <li class="dropdown">-->
<!--                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Preview <b class="caret"></b></a>-->
<!--                        <ul class="dropdown-menu" id="swatch-menu">-->
<!--                            <li><a href="../default">Default</a></li>-->
<!--                            <li class="divider"></li>-->
<!--                            <li><a href="../amelia">Amelia</a></li>-->
<!--                            <li><a href="../cerulean">Cerulean</a></li>-->
<!--                            <li><a href="../cosmo">Cosmo</a></li>-->
<!--                            <li><a href="../cyborg">Cyborg</a></li>-->
<!--                            <li><a href="../journal">Journal</a></li>-->
<!--                            <li><a href="../readable">Readable</a></li>-->
<!--                            <li><a href="../simplex">Simplex</a></li>-->
<!--                            <li><a href="../slate">Slate</a></li>-->
<!--                            <li><a href="../spacelab">Spacelab</a></li>-->
<!--                            <li><a href="../spruce">Spruce</a></li>-->
<!--                            <li><a href="../superhero">Superhero</a></li>-->
<!--                            <li><a href="../united">United</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="dropdown" id="preview-menu">-->
<!--                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Download <b class="caret"></b></a>-->
<!--                        <ul class="dropdown-menu">-->
<!--                            <li><a target="_blank" href="bootstrap.min.css">bootstrap.min.css</a></li>-->
<!--                            <li><a target="_blank" href="bootstrap.css">bootstrap.css</a></li>-->
<!--                            <li class="divider"></li>-->
<!--                            <li><a target="_blank" href="variables.less">variables.less</a></li>-->
<!--                            <li><a target="_blank" href="bootswatch.less">bootswatch.less</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                </ul>
                <?php if(!empty($username)){?>
                <ul class="nav pull-right" id="main-menu-right">
                    <li><a href="">Welcome <?php echo $username?> </a></li>
                    <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'))?></li>
                </ul>
                    <?php }?>
            </div>
        </div>
    </div>
</div>

<div id="container">
    <div id="header">


    </div>
    <div id="content">
    <div class="container">
        <?php echo $this->Session->flash(); ?>
        <?php //echo $content_for_layout; ?>
        <?php echo $this->fetch('content'); ?>
    </div>
    </div>
    <div id="footer">
<!--        --><?php //echo $this->Html->link(
//        $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
//        'http://www.cakephp.org/',
//        array('target' => '_blank', 'escape' => false)
//    );
//        ?>
    </div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>
