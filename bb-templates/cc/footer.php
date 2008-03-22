<?php

$themeURI = rtrim(bb_get_active_theme_uri(), "/");

echo <<<HTML
      </div>
    </div>
</div>
<div id="footer">
    <div id="sub-footer" class="box">
        <ul>
            <li><a href="#top">Top</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li><a href="http://support.creativecommons.org/">Support</a></li>
            <li><a href="http://creativecommons.org/weblog">Blog</a></li>
            <li><a href="http://creativecommons.org/policies">Policies</a></li>
            <li><a href="http://creativecommons.org/privacy">Privacy</a></li>
            <li><a href="http://wiki.creativecommons.org/Developers">Developers</a></li>
            <li><a href="http://wiki.creativecommons.org/Events">Events</a></li>
            <li><a href="http://creativecommons.org/contact">Contact</a></li>
        </ul>
    </div>
    <div id="license">
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
</body>

</html>

HTML;

?>
