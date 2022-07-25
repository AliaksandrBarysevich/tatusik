<?php
if (function_exists('load_plugin_textdomain')) {
    load_plugin_textdomain('include-me', false, 'include-me/languages');
}

if (isset($_POST['_wpnonce']) && wp_verify_nonce($_POST['_wpnonce'], 'save')) {
    if (isset($_POST['save'])) {
        if (isset($_POST['options'])) {
            $options = stripslashes_deep($_POST['options']);
            update_option('includeme', $options);
        } else {
            update_option('includeme', array());
        }
    }

    if (isset($_POST['find'])) {
        global $wpdb;
        $posts = $wpdb->get_results("select id, post_title from " . $wpdb->prefix . "posts where post_content like '%[includeme%' and post_type in ('post', 'page')");
    }
} else {
    $options = get_option('includeme', array());
}
?>
<style>
<?php include __DIR__ . '/admin.css' ?>
</style>

<div class="wrap">

    <h2>Include Me</h2>
    <?php if (INCLUDE_ME_DIR === '*') { ?>
        <div class="notice notice-warning">
            <p>Include me is allowed to include files from any location. See the definition of <code>INCLUDE_ME_DIR</code> in your wp-config.php.</p>
        </div>
    <?php } ?>

    <?php if (!file_exists(INCLUDE_ME_DIR)) { ?>
        <div class="notice notice-warning">
            <p>The inclusion folder <code><?php echo esc_html(INCLUDE_ME_DIR)?></code> does not exit.</p>
        </div>
    <?php } ?>

    <div class="notice notice-info">
        <p>
            The files to be included with the shortcode <code>[includeme file="..."]</code> should be placed in the <code>include-me</code> folder
            located in your <code>wp-content</code> folder.
        </p>
        <p>
            The <code>file</code> attribute should be a relative path relative to the <code>include-me</code>. For example
            <code>[includeme file="my-list.php"]</code> or <code>[includeme file="subfolder/my-list.php"]</code>. Of course non PHP files can be included.
        </p>
        <p style="font-weight: bold;">
            <a href="https://www.satollo.net/plugins/include-me" target="_blank">See the documentation</a>.
        </p>
    </div>

    <div class="notice notice-info">
        <p style="font-weight: bold;">
            Yes, there is a good reason to 
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5PHGDGNHAYLJ8" target="_blank"><img style="vertical-align: bottom" src="http://www.satollo.net/images/donate.png"></a>
            and even <b>2$</b> help. <a href="https://www.satollo.net/donations" target="_blank">Read more</a>.
        </p>
    </div>    

    <h3><?php _e('Configuration', 'include-me') ?></h3>



    <form action="" method="post">
        <?php wp_nonce_field('save') ?>
        <table class="form-table">
            <tr>
                <th><?php _e('Execute shortcodes', 'include-me') ?></th>
                <td>
                    <input type="checkbox" name="options[shortcode]" value="1" <?php echo isset($options['shortcode']) ? 'checked' : ''; ?>>
                    <p class="description">
                        <?php _e('When checked short codes (like [gallery]) contained in included files will be executed as if they where inside the post or page body content. Probably usage of this feature is very rare.', 'include-me') ?>
                    </p>
                </td>
            </tr>    
        </table>
        <p class="submit">
            <input class="button button-primary" type="submit" name="save" value="<?php _e('Save') ?>"/>
        </p>


        <h3>Where is it used?</h3>

        <?php if (isset($posts)) { ?>
            <?php if (empty($posts)) { ?>
                <p>No posts or pages with the <code>[includeme]</code> shortcode.</p>
            <?php } else { ?>
                <ul>
                    <?php foreach ($posts as $post) { ?>
                        <li><a href="<?php echo get_permalink($post->id) ?>" target="_blank"><?php echo esc_html($post->post_title) ?></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        <?php } ?>

        <p class="submit">
            <input class="button button-primary" type="submit" name="find" value="<?php _e('Find') ?>"/>
        </p>
    </form>
</div>
