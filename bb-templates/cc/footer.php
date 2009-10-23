<?php

$themeURI = rtrim(bb_get_active_theme_uri(), "/");

echo <<<HTML
      </div>
    	<div id="sidebar">

HTML;

echo '    <div class="sideitem">';
    login_form();
echo "   </div>";

    if ( is_bb_profile() ) {
        profile_menu();
    }
    echo '    <div class="sideitem">';
    include("search-form.php");
    echo "   </div>";
    echo "    </div>";

echo <<<HTML
    </div>
</div>
<div id="footer">
    <div id="footerContent" class="box">
        <ul>
            <li><a href="#top">Top</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li><a href="http://creativecommons.org/weblog">Blog</a></li>
            <li><a href="http://support.creativecommons.org/">Donate</a></li>
            <li><a href="http://creativecommons.org/policies">Policies</a></li>
            <li><a href="http://creativecommons.org/privacy">Privacy</a></li>
            <li><a href="http://creativecommons.org/terms">Terms of Use</a></li>
            <li><a href="http://creativecommons.org/about/press">Press Room</a></li>
            <li><a href="http://creativecommons.org/contact">Contact</a></li>
        </ul>
    </div>
    <div id="footerLicense">
        <p class="box">
            <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">
                <img src="http://i.creativecommons.org/l/by/3.0/88x31.png" alt="Creative Commons License" style="border: medium none ;" height="31" width="88">
            </a>
            Except where otherwise <a class="subfoot" href="http://creativecommons.org/policies#license">noted</a>, content on this site is<br/>
            licensed under a
            <a rel="license" href="http://creativecommons.org/licenses/by/3.0/" class="subfoot">Creative Commons Attribution 3.0 License</a>
        </p>
    </div>
</div>

HTML;

do_action('bb_foot', '');

echo <<<HTML
<!-- Google Analytics -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2010376-17");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>

</html>

HTML;

?>
