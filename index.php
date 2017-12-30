<?php
/* vim: set noet fenc= ff=unix sts=0 sw=4 ts=4 : */
/* SVN FILE: $Id: php 135 2009-06-10 02:20:13Z kevin $ */
$xml = simplexml_load_file("quiz.xml");
$children = $xml->children();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <title><?= $children->type ?> Quiz <?= $children->year ?></title>
    <meta name="language" content="en-US">
    <meta name="Content-Language" content="English">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="zipcode" content="60510">

    <meta name="ROBOTS" content="All">
    <meta name="GENERATOR" content="Vim">
    <meta name="Revisit-After" content="1 month">

    <link rel="stylesheet" type="text/css" href="global.css">
    <!-- <link rel="stylesheet" type="text/css" href="print.css" media="print"> -->
</head>
<body>
<div id='container'>
    <div id='top'>
        <div class='alpha-shadow'>
            <div>
                <img src="photo.jpg" alt="Christmas Photo">
            </div>
        </div>
        <p>&nbsp;</p>
        <p><?= $children->intro ?></p>
    </div>

    <ol>
    <?php $count = 0; ?>
    <?php foreach($children->questions->question as $q) { ?>
        <?php $count += 1; ?>
        <li class='question'><?= $q->title ?>
            <ol>
            <?php foreach($q->option as $o) { ?>
                <li class='answer'>
                    <input type='radio' <?php $attr = current($o->attributes()); if(is_array($attr) AND array_key_exists('answer',$attr)) echo 'class="correct"'; ?> name='q<?= $count ?>'><?= $o ?>
                </li>
            <?php } ?>
            </ol></li>
    <?php } ?>
    </ol>

    <div id="score">
        <p><span id="result">No result yet!  Be patient.</span>
        (Your score is: <span id="number">###</span> points out of a possible 10 points.)</p>
        <p>Correct answers are <span class="green">green</span>. Incorrect answers are <span class="red">red</span>.</p>
    </div>
    <div id="score_me">
        <p>Enter a response for all ten questions, then click <input type="button" disabled="disabled" onclick="javascript:show_answers()" value=" What's my score? "></p>
    </div>
    <div id='answer_key'>
        <p>Answer Key: (don't peek until you've filled in the questions)</p>

        <p>
            <b>1</b>:e
            <b>2</b>:a
            <b>3</b>:d
            <b>4</b>:a
            <b>5</b>:b
            <b>6</b>:e
            <b>7</b>:b
            <b>8</b>:b
            <b>9</b>:c
            <b>10</b>:d
        </p>
        <p>8 - 10: Excellent!   6 - 7: Pretty  good   4 - 5: Really Low  1 - 3: We need to talk!</p>
    </div>


    <img id='christmas_star' src='Christmas Star.png' title='For unto us a son is given...' alt="star">
    <img id='mile_sign' src='bethlehem 5km.gif' title='Follow us to the King of Kings...' alt="mile marker">
    <h1 id='title'>Gustavson Post-Christmas Quiz 2009</h1>
</div>
    <div id='footer'>
        <a href="/" title="Copyright 2009 Kevin Gustavson">Designed by Kevin Gustavson</a>
    </div>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="functions.js"></script>
    <script type="text/javascript" src="supersleight.plugin.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.answer').click(function() {
            $(this).children('input').attr('checked','checked');
            if($('input:checked').length > 6) $('input[type=button]').removeAttr("disabled");
        });
        $('#footer').supersleight();
    });
    </script>
    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        try {
            var pageTracker = _gat._getTracker("UA-3341219-5");
            pageTracker._trackPageview();
        } catch(err) {}
    </script>
</body>
</html>
