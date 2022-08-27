<?php
/**
* Display the message in the management panel
* Show messages on the dashboard
 */
add_action('admin_notices', 'wpse75629_admin_notice');
function wpse75629_admin_notice()
{
    global $pagenow;

    // Only show this message on the admin dashboard and if asked for
    if ('index.php' === $pagenow)
    {
        echo '<div class="updated"><p>طراحی با❤️توسط <a href="https://amirmehni.ir">امیرمهنی</a></p></div>';
    }
}