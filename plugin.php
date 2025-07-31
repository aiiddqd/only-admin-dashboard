<?php
/*
Plugin Name: Only Admin Dashboard
Description: Restricts access to the front-end of the site, redirecting non-logged-in users to the login page, while keeping the admin dashboard accessible.
Plugin URI: https://github.com/aiiddqd/only-admin-dashboard
Author: AI
Author URI: https://github.com/aiiddqd/
License: GPL2
Version: 1.0
*/

// Prevent direct access to this file
if (! defined('ABSPATH')) {
    exit;
}


/**
 * Restrict front-end access for non-logged-in users
 */
add_action('template_redirect', function () {
    // Check if the user is not in the admin area and not logged in
    if (! is_admin()) {
        // Redirect to the admin dashboard
        wp_redirect(admin_url());
        exit;
    }
});
