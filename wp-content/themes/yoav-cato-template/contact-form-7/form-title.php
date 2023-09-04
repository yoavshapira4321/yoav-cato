<?php
$form = get_post_meta(get_the_ID(), '_form', true);
$form_id = intval(str_replace('wpcf7-f', '', $form));
$form_title = get_the_title($form_id);
if ($form_title) {
    echo '<h2 class="form-title">' . $form_title . '</h2>';
}
?>
