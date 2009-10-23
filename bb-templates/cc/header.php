<?php

$bbHome = bb_get_option('uri');
$bbName = bb_get_option('name');
$bbLocation = bb_get_location();
$themeURI = rtrim(bb_get_active_theme_uri(), "/");

# Set some local variables if the user is logged in and
# there is a topic
if ( is_topic() && bb_is_user_logged_in() ) {
    global $page;
    $lastMod = get_topic_time('timestamp');
    $currentUserId = bb_get_current_user_info('id');
    $topicId = get_topic_id();
    $uriBase = bb_get_option('uri');
    $tagLinkBase = bb_get_tag_link_base();
    $favoritesLink = get_favorites_link(); 
    
    # This seems like a clearer way to do this than the commented out line following
    $is_fav = is_user_favorite(bb_get_current_user_info('id'));
    $isFav = (false === $is_fav) ? "no" : $is_fav;
    #$isFav = if ( false === $is_fav = is_user_favorite( bb_get_current_user_info( 'id' ) ) ) echo "'no'"; else echo $is_fav;
}

echo <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Creative Commons - Forums</title>
    <link href="{$themeURI}/style.css" rel="stylesheet" type="text/css" />
    <link href="{$themeURI}/bb-style.css" rel="stylesheet" type="text/css" />
    
HTML;

if ( 'rtl' == bb_get_option('text_direction') ) {
    echo "  <link href='{$themeURI}bbpress-style-rtl.css' rel='stylesheet' type='text/css' />";
}

bb_feed_head(); 

if ( is_topic() && bb_is_user_logged_in() ) {
    echo <<<HTML

    <script type="text/javascript">
        var lastMod = "$lastMod";
        var page = "$page";
        var currentUserId = "$currentUserId";
        var topicId = "$topicId";
        var uriBase = "$uriBase";
        var tagLinkBase = "$tagLinkBase";
        var favoritesLink = "$favoritesLink";
        var isFav = "$isFav";
    </script>

HTML;
    bb_enqueue_script('topic');
}

bb_head();

echo <<<HTML

</head>

<body id="$bbLocation">

<a name="top"></a>
<div id="globalWrapper">
  <div id="headerWrapper" class="box">
    <div id="headerLogo">
      <h1><a href="{$bbHome}"><span>Creative Commons</span></a></h1>
    </div>
    <div id="headerNav">
      <ul>
        <!-- <li><em>Home</em></li> -->

        <li><a href="http://creativecommons.org/about/">About</a></li>
        <li><a href="http://creativecommons.org/weblog/">News</a></li>
        <li><a href="http://support.creativecommons.org/">Donate</a></li>
        <li><a href="http://wiki.creativecommons.org/FFAQ">FAQ</a></li>
        <li><a href="http://wiki.creativecommons.org/">Wiki</a></li>
        <li><a href="/http://creativecommons.orgprojects/">Projects</a></li>

        <li><a href="http://support.creativecommons.org/store">Store</a></li>
        <li class="helpLink" id="international_list"><a href="http://creativecommons.org/international/">International</a></li>
      </ul>
    </div>
    
  </div>

  <div id="mainContent" class="box">
    <div id="contentPrimary">
HTML;



?>
