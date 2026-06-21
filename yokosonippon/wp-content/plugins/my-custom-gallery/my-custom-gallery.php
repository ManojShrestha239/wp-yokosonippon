<?php

/**
 * Plugin Name:       Site Custom Native Gallery Engine
 * Description:       Replicates the ACF Pro Gallery interface using a native sortable meta box.
 * Version:           2.0.0
 * Author:            Manoj Shrestha
 * License:           GPL-2.0+
 */

if (! defined('ABSPATH')) {
    exit;
}

// 1. Enqueue Frontend Stylesheets
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('native-gallery-frontend', plugins_url('assets/css/gallery-style.css', __FILE__), array(), '2.0.0');
});

// 2. Enqueue Backend Admin Scripts and Styles (Enforces WordPress Core Uploader & jQuery UI Sortable)
add_action('admin_enqueue_scripts', function ($hook) {
    if (! in_array($hook, array('post.php', 'post-new.php'), true)) {
        return;
    }
    wp_enqueue_media(); // Loads WordPress Core Media Library frames
    wp_enqueue_script('jquery-ui-sortable'); // Loads core drag-and-drop mechanics

    wp_enqueue_style('native-gallery-admin-css', plugins_url('assets/css/admin-style.css', __FILE__), array(), '2.0.0');
    wp_enqueue_script('native-gallery-admin-js', plugins_url('assets/js/admin-gallery.js', __FILE__), array('jquery', 'jquery-ui-sortable'), '2.0.0', true);
});

// 3. Register the Custom Meta Box Container
add_action('add_meta_boxes', function () {
    add_meta_box(
        'native_custom_gallery_box',
        'Custom Native Gallery Manager',
        'render_native_gallery_meta_box',
        'post',
        'normal',
        'high'
    );
});

// 4. Render the Backend UI Engine
// 4. Render the Backend UI Engine (Enhanced for Persistence Verification)
function render_native_gallery_meta_box($post)
{
    wp_nonce_field('save_native_gallery_action', 'native_gallery_nonce');

    // Fetch stored IDs comma-separated (e.g., "102,45,89")
    $saved_ids_raw = get_post_meta($post->ID, '_native_gallery_image_ids', true);
    $image_ids = ! empty($saved_ids_raw) ? explode(',', $saved_ids_raw) : array();
?>
    <div class="native-gallery-admin-wrapper" style="min-height: 160px; padding: 15px; background: #ffffff; clear: both; overflow: hidden;">

        <input type="hidden" name="native_gallery_image_ids" id="native_gallery_image_ids" value="<?php echo esc_attr($saved_ids_raw); ?>" />

        <p class="description" style="margin-bottom: 12px; font-style: italic; color: #646970;">
            Select multiple images using Ctrl/Cmd or Shift, then drag and drop them to index their display order.
        </p>

        <ul id="native-gallery-sortable-preview" class="native-gallery-grid-preview">
            <?php
            if (! empty($image_ids)) {
                foreach ($image_ids as $id) {
                    $id = intval($id);
                    if (! $id) continue;

                    // CRITICAL FIX: Robust URL Fallback check if thumbnail sizes are missing
                    $img_url = wp_get_attachment_image_url($id, 'thumbnail');
                    if (! $img_url) {
                        $img_url = wp_get_attachment_image_url($id, 'full');
                    }

                    if ($img_url) {
                        echo '<li class="gallery-item-card" data-id="' . $id . '" style="display: inline-block; margin-right: 10px; float: left;">';
                        echo '<img src="' . esc_url($img_url) . '" style="width: 100px; height: 100px; object-fit: cover;" />';
                        echo '<a href="#" class="remove-gallery-image-btn">&times;</a>';
                        echo '</li>';
                    }
                }
            }
            ?>
        </ul>

        <div style="margin-top: 15px; clear: both;">
            <button type="button" class="button button-primary button-large" id="native-gallery-upload-btn">
                Select / Upload Gallery Photos
            </button>
        </div>
    </div>
    <div style="clear: both;"></div>
<?php
}

// 5. Defensive Data Saving & Sanitization
add_action('save_post', function ($post_id) {
    if (! isset($_POST['native_gallery_nonce']) || ! wp_verify_nonce($_POST['native_gallery_nonce'], 'save_native_gallery_action')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (! current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['native_gallery_image_ids'])) {
        // Sanitize string to contain only digits and commas
        $clean_ids = preg_replace('/[^0-9,]/', '', $_POST['native_gallery_image_ids']);
        update_post_meta($post_id, '_native_gallery_image_ids', $clean_ids);
    }
});

// 6. Enhanced Frontend Presentation Engine (Dynamic Title, Description, and Slug Lookup)
add_shortcode('custom_native_gallery', function ($atts) {
    // 1. Define flexible attributes with standard default content as fallbacks
    $args = shortcode_atts(array(
        'id'          => '',
        'name'        => 'success-story', // Post URL slug fallback
        'title'       => 'Moments of Success & Campus Life', // Default Dynamic Title
        'description' => 'Witness the vibrant journey of our students as they embrace life and education in the heart of Japan.' // Default Dynamic Description
    ), $atts, 'custom_native_gallery');

    $target_post_id = 0;

    // 2. Resolve target Post ID (Prioritize ID string, fall back to post slug match)
    if (! empty($args['id'])) {
        $target_post_id = intval($args['id']);
    } else {
        $matched_post = get_page_by_path($args['name'], OBJECT, 'post');
        if ($matched_post) {
            $target_post_id = $matched_post->ID;
        }
    }

    if (! $target_post_id) {
        return '';
    }

    // 3. Extract asset matrix data from standard post meta records
    $saved_ids_raw = get_post_meta($target_post_id, '_native_gallery_image_ids', true);
    if (empty($saved_ids_raw)) {
        return '';
    }

    $image_ids = explode(',', $saved_ids_raw);

    ob_start();
?>
    <section class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto section-gap-sm bg-background">

        <div class="text-center space-y-4 mb-8 sm:mb-12 reveal-blur">
            <h2 class="font-headline-lg text-headline-lg text-primary font-semibold text-glow">
                <?php echo esc_html($args['title']); ?>
            </h2>
            <?php if (! empty($args['description'])) : ?>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto reveal-blur stagger-1">
                    <?php echo esc_html($args['description']); ?>
                </p>
            <?php endif; ?>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <?php
            foreach ($image_ids as $id) :
                $id = intval($id);
                $full_image_url = wp_get_attachment_url($id);
                $image_html     = wp_get_attachment_image($id, 'large', false, array(
                    'class'   => 'w-full h-full object-cover transition-all duration-700 group-hover:scale-105',
                    'loading' => 'lazy'
                ));

                if (! $image_html) {
                    continue;
                }

                $alt_text = get_post_meta($id, '_wp_attachment_image_alt', true);
                if (empty($alt_text)) {
                    $alt_text = wp_get_attachment_caption($id);
                }
                if (empty($alt_text)) {
                    $alt_text = esc_attr($args['title']) . ' Grid Asset';
                }
            ?>
                <div class="group relative overflow-hidden rounded-[24px] aspect-[4/3] shadow-sm reveal-scale cursor-pointer card-shimmer">
                    <a href="<?php echo esc_url($full_image_url); ?>" class="gallery-lightbox-trigger block w-full h-full" title="<?php echo esc_attr($alt_text); ?>">
                        <?php echo $image_html; ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php
    return ob_get_clean();
});
