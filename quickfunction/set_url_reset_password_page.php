<?php
/*
Change Rest Password Page => http://site_url/password-reset/
*/
<?php
add_filter( 'lostpassword_url',  'my_lostpassword_url', 10, 0 );
function my_lostpassword_url() {
    return site_url('/password-reset/');
}