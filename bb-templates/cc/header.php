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
<div id="header-wrapper">
	<div id="header-main" class="box">
		<span class="publish">
			<a href="http://creativecommons.org/choose/" class="cc-actions">
				<span class="img">
					<img src="{$themeURI}/images/license-8.png" border="0" class="publish"/>
				</span> 
				<span class="option">License</span>Your Work
			</a>
		</span>
		<span class="find">
			<a href="http://search.creativecommons.org/" class="cc-actions">
				<span class="img">
					<img src="{$themeURI}/images/find-8.png" border="0"/>
				</span>
				<span class="option">Search</span>CC Licensed Work
			</a>
		</span>
		<span class="logo">
			<a href="{$bbHome}">
				<span>
					<img src="{$themeURI}/images/cc-title-8.png" alt="creative commons" id="cc-title" border="0"/>
				</span>
			</a>
		</span>
	</div>
</div>

<div class="box">
    <div id='content'>
	<div id="sidebar">

HTML;

login_form();

if ( is_bb_profile() ) {
    profile_menu();
}
include("search-form.php");
echo "    </div>";



?>
<div id="main-content">
