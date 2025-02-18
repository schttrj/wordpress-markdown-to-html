<?php
/**
 * Plugin Name: Markdown to HTML Converter
 * Plugin URI: https://github.com/schttrj/wordpress-markdown-to-html
 * Description: Converts Markdown content to HTML when you click the MD2HTML button in the Text editor.
 * Version: 1.1
 * Author: Brain Room Media
 */

// Enqueue Marked.js from a CDN on post editing screens.
function m2h_enqueue_marked_js( $hook ) {
    global $pagenow;
    if ( in_array( $pagenow, array( 'post.php', 'post-new.php' ) ) ) {
        wp_enqueue_script( 'marked', 'https://cdn.jsdelivr.net/npm/marked/marked.min.js', array(), null, true );
    }
}
add_action( 'admin_enqueue_scripts', 'm2h_enqueue_marked_js' );

// Insert our quicktag button once the admin footer scripts are loaded.
function m2h_add_quicktags() {
    ?>
    <script type="text/javascript">
        // Wrap inside onload to ensure QTags is available.
        document.addEventListener("DOMContentLoaded", function() {
            if (typeof QTags !== 'undefined') {
                QTags.addButton('m2h_button', 'MD2HTML', function() {
                    var textarea = document.getElementById('content');
                    if (!textarea) {
                        alert("No content textarea found!");
                        return;
                    }
                    var originalText = textarea.value;
                    if (typeof marked !== 'undefined') {
                        textarea.value = marked.parse(originalText);
                    } else {
                        alert("Markdown converter not loaded!");
                    }
                });
            } else {
                console.warn("QTags is not available.");
            }
        });
    </script>
    <?php
}
add_action( 'admin_print_footer_scripts', 'm2h_add_quicktags' );
