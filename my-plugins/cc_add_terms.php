<?php

/*
 * Plugin Name: CC License Condition
 * Plugin URI: http://forum.creativecommons.org
 * Description: Adds a checkbox to the registration form that requires users to accept to license all submitted content under a CC BY license.
 * Author: Nathan Kinkade
 * Author URI: http://creativecommons.org/about/people/#75
 * Version: 0.1
 */

add_action('extra_profile_info', 'cc_add_license_condition');


function cc_add_license_condition() {

    echo "  <div style='margin: 2ex;'>\n";

	_e('<strong>IMPORTANT copyright information</strong></span>: All content submitted to this forum is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>. By checking the following box you agree to this condition of use.  If you are not willing to release all content you submit under this license then you should not register.');

    echo <<<HTML
    </div>
    <div style='margin: 2ex;'>
        <input type="checkbox" name="terms_cond" /><sup>*</sup>:

HTML;

_e('I agree to release <span style="text-decoration: underline;">anything</span> I submit to this forum under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>.');

if ( $terms_cond === false ) {
    echo "<div><span style='color: red;'>" . __('You must accept the licensing terms in order to regsiter.') . "</span></div>";
}

echo <<<HTML
    </div>

HTML;

}

?>
