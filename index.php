<?php
/* vim: set noet fenc= ff=unix sts=0 sw=4 ts=4 : */
/* SVN FILE: $Id$ */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>Merry Christmas 2010!</title>
    <meta name="language" content="en_US">
    <meta name="Content-Type" content="text/html;charset=utf8">
    <link rel="stylesheet" type="text/css" href="stylesheets/global.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-3341219-5']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
</head>
<body>
<div id="article">
    <noscript><div>Warning: Your browser has javascript support turned off!<br/>
        This page will not render or operate correctly.</div></noscript>
    <h1>Welcome to the Gustavson Post-Christmas Quiz 2010</h1>
    <div id="content">
    <form action="javascript:." method="post">
<?php include "page0.html"; ?>
<?php include "page1.html"; ?>
<?php include "page2.html"; ?>
<?php include "page3.html"; ?>
<?php include "page4.html"; ?>
<?php include "page5.html"; ?>
<?php include "page6.html"; ?>
<?php include "page7.html"; ?>
<?php include "page8.html"; ?>
<?php include "page9.html"; ?>
<?php include "page10.html"; ?>
<?php include "page11.html"; ?>
    </form>
    </div>
</div>

<script type="text/javascript">
// Set Variables
var page = 0;

$('form').change(function() {
    for(count=1; count<=10; count++) {
        if( $('input[name=q'+count+']:checked').size() == 1 ) $('#q'+count+' button.next').removeAttr('disabled');
    }
});

$('button.next').click(function() {
    if(10 == page) scoreMe();

    page++;
    $('.page').hide();
    $('#content .page:eq('+page+')').show();
    return false;
});

$('button.prev').click(function() {
    page--;
    $('.page').hide();
    $('#content .page:eq('+page+')').show();
    return false;
});

$("li:has('input[type=radio]')").click(function() {
    $(this).children('input[type=radio]').attr('checked', 'checked');
    $('#q'+page+' button.next').removeAttr('disabled');
});

window.onbeforeunload = function() {
  if (page != 0 && page != 11 & !scored ) {
    return "If you leave, your quiz answers WON'T be saved!'";
  }
}

// Show the first page and enable it's button
$('#content .page:eq(0)').show();
$('#q0 button.next').removeAttr('disabled');


</script>
</body>
</html>
