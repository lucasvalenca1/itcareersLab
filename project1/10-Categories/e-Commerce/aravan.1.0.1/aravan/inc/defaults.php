<?php
/**
 * Sets all of our theme defaults.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'aravan_get_defaults' ) ) {
	/**
	 * Set default options
	 *
	 */
	function aravan_get_defaults() {
		$aravan_defaults = array(
			'hide_title' => '',
			'hide_tagline' => true,
			'top_bar_width' => 'full',
			'top_bar_inner_width' => 'contained',
			'top_bar_alignment' => 'left',
			'container_width' => '1170',
			'header_layout_setting' => 'fluid-header',
			'header_inner_width' => 'contained',
			'nav_alignment_setting' => 'right',
			'header_alignment_setting' => 'left',
			'nav_layout_setting' => 'fluid-nav',
			'nav_inner_width' => 'contained',
			'nav_position_setting' => 'nav-float-right',
			'nav_dropdown_type' => 'hover',
			'nav_search' => 'enable',
			'nav_effect' => 'none',
			'content_layout_setting' => 'one-container',
			'layout_setting' => 'no-sidebar',
			'blog_layout_setting' => 'right-sidebar',
			'single_layout_setting' => 'right-sidebar',
			'fixed_side_content' => '',
			'blog_header_image' => '',
			'blog_header_title' => '',
			'blog_header_text' => '',
			'blog_header_button_text' => '',
			'blog_header_button_url' => '',
			'post_content' => 'excerpt',
			'footer_layout_setting' => 'fluid-footer',
			'footer_widgets_inner_width' => 'contained',
			'footer_inner_width' => 'contained',
			'footer_widget_setting' => '3',
			'footer_bar_alignment' => 'right',
			'back_to_top' => 'enable',
			'socials_display_side' => false,
			'socials_display_top' => false,
			'socials_facebook_url' => '',
			'socials_twitter_url' => '',
			'socials_google_url' => '',
			'socials_tumblr_url' => '',
			'socials_pinterest_url' => '',
			'socials_youtube_url' => '',
			'socials_linkedin_url' => '',
			'socials_custom_icon_1' => '',
			'socials_custom_icon_2' => '',
			'socials_custom_icon_3' => '',
			'socials_custom_icon_url_1' => '',
			'socials_custom_icon_url_2' => '',
			'socials_custom_icon_url_3' => '',
			'socials_mail_url' => '',
			'button_rotate' => '0',
			'button_border' => '0',
			'button_frame' => 'none',
			'button_radius' => 'full',
			'side_inside_color' => '',
			'text_color' => '#222222',
			'link_color' => '#000000',
			'link_color_hover' => '#555555',
			'link_color_visited' => '',
			'font_awesome_essentials' => true,
		);

		return apply_filters( 'aravan_option_defaults', $aravan_defaults );
	}
}

if ( ! function_exists( 'aravan_get_color_defaults' ) ) {
	/**
	 * Set default options
	 */
	function aravan_get_color_defaults() {
		$aravan_color_defaults = array(
			'top_bar_background_color' => '#000000',
			'top_bar_text_color' => '#e5e5e5',
			'top_bar_link_color' => '#ffffff',
			'top_bar_link_color_hover' => '#e5e5e5',
			'header_background_color' => '#ffffff',
			'header_text_color' => '#222222',
			'header_link_color' => '#222222',
			'header_link_hover_color' => '#222222',
			'site_title_color' => '#000000',
			'site_tagline_color' => '#222222',
			'navigation_background_color' => '#ffffff',
			'navigation_text_color' => '#222222',
			'navigation_background_hover_color' => '',
			'navigation_text_hover_color' => '#999999',
			'navigation_background_current_color' => '',
			'navigation_text_current_color' => '',
			'subnavigation_background_color' => '#222222',
			'subnavigation_text_color' => '#ffffff',
			'subnavigation_background_hover_color' => '',
			'subnavigation_text_hover_color' => '#e5e5e5',
			'subnavigation_background_current_color' => '',
			'subnavigation_text_current_color' => '',
			'fixed_side_content_background_color' => '#000000',
			'fixed_side_content_text_color' => '#e5e5e5',
			'fixed_side_content_link_color' => '#ffffff',
			'fixed_side_content_link_hover_color' => '#e5e5e5',
			'content_background_color' => '',
			'content_text_color' => '',
			'content_link_color' => '',
			'content_link_hover_color' => '',
			'content_title_color' => '',
			'blog_header_bg_color' => '#ffffff',
			'blog_header_bg_s_color' => 'rgba(255,255,255,0)',
			'blog_header_title_color' => '#000000',
			'blog_header_text_color' => '#222222',
			'blog_header_button' => '#ffffff',
			'blog_header_button_bg' => '#000000',
			'blog_header_button_hover' => '#ffffff',
			'blog_header_button_hover_bg' => '#555555',
			'blog_post_title_color' => '',
			'blog_post_title_hover_color' => '',
			'entry_meta_text_color' => '',
			'entry_meta_link_color' => '',
			'entry_meta_link_color_hover' => '',
			'h1_color' => '',
			'h2_color' => '',
			'h3_color' => '',
			'h4_color' => '',
			'h5_color' => '',
			'h6_color' => '',
			'sidebar_widget_background_color' => '#000000',
			'sidebar_widget_text_color' => '#eeeeee',
			'sidebar_widget_link_color' => '#ffffff',
			'sidebar_widget_link_hover_color' => '#dddddd',
			'sidebar_widget_title_color' => '#ffffff',
			'footer_widget_background_color' => '#ffffff',
			'footer_widget_text_color' => '#222222',
			'footer_widget_link_color' => '#000000',
			'footer_widget_link_hover_color' => '#555555',
			'footer_widget_title_color' => '#000000',
			'footer_background_color' => '#000000',
			'footer_text_color' => '#eeeeee',
			'footer_link_color' => '#ffffff',
			'footer_link_hover_color' => '#dddddd',
			'form_background_color' => '#fafafa',
			'form_text_color' => '#555555',
			'form_background_color_focus' => '#ffffff',
			'form_text_color_focus' => '#555555',
			'form_border_color' => '#cccccc',
			'form_border_color_focus' => '#bfbfbf',
			'form_button_background_color' => '#000000',
			'form_button_background_color_hover' => '#555555',
			'form_button_text_color' => '#ffffff',
			'form_button_text_color_hover' => '#ffffff',
			'back_to_top_background_color' => 'rgba(0,0,0,0.7)',
			'back_to_top_background_color_hover' => '#000000',
			'back_to_top_text_color' => '#ffffff',
			'back_to_top_text_color_hover' => '#ffffff',
		);

		return apply_filters( 'aravan_color_option_defaults', $aravan_color_defaults );
	}
}

if ( ! function_exists( 'aravan_get_default_fonts' ) ) {
	/**
	 * Set default options.
	 *
	 *
	 * @param bool $filter Whether to return the filtered values or original values.
	 * @return array Option defaults.
	 */
	function aravan_get_default_fonts( $filter = true ) {
		$aravan_font_defaults = array(
			'font_body' => 'Montserrat',
			'font_body_category' => '',
			'font_body_variants' => '100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic',
			'body_font_weight' => '400',
			'body_font_transform' => 'none',
			'body_font_size' => '21',
			'body_line_height' => '1.3', // no unit
			'paragraph_margin' => '1.3', // em
			'font_top_bar' => 'Roboto',
			'font_top_bar_category' => '',
			'font_top_bar_variants' => '100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic',
			'top_bar_font_weight' => '400',
			'top_bar_font_transform' => 'none',
			'top_bar_font_size' => '16',
			'font_site_title' => 'Overpass',
			'font_site_title_category' => '',
			'font_site_title_variants' => '100,100italic,200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,800,800italic,900,900italic',
			'site_title_font_weight' => '900',
			'site_title_font_transform' => 'uppercase',
			'site_title_font_size' => '55',
			'mobile_site_title_font_size' => '25',
			'font_site_tagline' => 'inherit',
			'font_site_tagline_category' => '',
			'font_site_tagline_variants' => '',
			'site_tagline_font_weight' => 'normal',
			'site_tagline_font_transform' => 'none',
			'site_tagline_font_size' => '19',
			'font_blog_header_title' => 'Overpass',
			'font_blog_header_title_category' => '',
			'font_blog_header_title_variants' => '100,100italic,200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,800,800italic,900,900italic',
			'blog_header_title_font_weight' => '900',
			'blog_header_title_font_transform' => 'none',
			'font_blog_header_text' => 'inherit',
			'font_blog_header_text_category' => '',
			'font_blog_header_text_variants' => '',
			'blog_header_text_font_weight' => '400',
			'blog_header_text_font_transform' => 'none',
			'font_navigation' => 'Roboto Mono',
			'font_navigation_category' => '',
			'font_navigation_variants' => '100,100italic,300,300italic,regular,italic,500,500italic,700,700italic',
			'navigation_font_weight' => '700',
			'navigation_font_transform' => 'uppercase',
			'navigation_font_size' => '19',
			'font_widget_title' => 'Overpass',
			'font_widget_title_category' => '',
			'font_widget_title_variants' => '100,100italic,200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,800,800italic,900,900italic',
			'widget_title_font_weight' => '900',
			'widget_title_font_transform' => 'none',
			'widget_title_font_size' => '30',
			'widget_title_separator' => '18',
			'widget_content_font_size' => '18',
			'font_buttons' => 'Roboto',
			'font_buttons_category' => '',
			'font_buttons_variants' => '100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic',
			'buttons_font_weight' => '700',
			'buttons_font_transform' => 'none',
			'buttons_font_size' => '19',
			'font_heading_1' => 'inherit',
			'font_heading_1_category' => '',
			'font_heading_1_variants' => '',
			'heading_1_weight' => '600',
			'heading_1_transform' => 'none',
			'heading_1_font_size' => '60',
			'heading_1_line_height' => '1.2', // em
			'mobile_heading_1_font_size' => '30',
			'font_heading_2' => 'inherit',
			'font_heading_2_category' => '',
			'font_heading_2_variants' => '',
			'heading_2_weight' => '600',
			'heading_2_transform' => 'none',
			'heading_2_font_size' => '32',
			'heading_2_line_height' => '1.2', // em
			'mobile_heading_2_font_size' => '25',
			'font_heading_3' => 'inherit',
			'font_heading_3_category' => '',
			'font_heading_3_variants' => '',
			'heading_3_weight' => '600',
			'heading_3_transform' => 'none',
			'heading_3_font_size' => '25',
			'heading_3_line_height' => '1.2', // em
			'font_heading_4' => 'inherit',
			'font_heading_4_category' => '',
			'font_heading_4_variants' => '',
			'heading_4_weight' => 'normal',
			'heading_4_transform' => 'none',
			'heading_4_font_size' => '',
			'heading_4_line_height' => '', // em
			'font_heading_5' => 'inherit',
			'font_heading_5_category' => '',
			'font_heading_5_variants' => '',
			'heading_5_weight' => 'normal',
			'heading_5_transform' => 'none',
			'heading_5_font_size' => '',
			'heading_5_line_height' => '', // em
			'font_heading_6' => 'inherit',
			'font_heading_6_category' => '',
			'font_heading_6_variants' => '',
			'heading_6_weight' => 'normal',
			'heading_6_transform' => 'none',
			'heading_6_font_size' => '',
			'heading_6_line_height' => '', // em
			'font_footer' => 'Roboto',
			'font_footer_category' => '',
			'font_footer_variants' => '100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic',
			'footer_weight' => '400',
			'footer_transform' => 'none',
			'footer_font_size' => '18',
			'font_fixed_side' => 'inherit',
			'font_fixed_side_category' => '',
			'font_fixed_side_variants' => '',
			'fixed_side_font_weight' => '400',
			'fixed_side_font_transform' => 'none',
			'fixed_side_font_size' => '22',
		);

		if ( $filter ) {
			return apply_filters( 'aravan_font_option_defaults', $aravan_font_defaults );
		}

		return $aravan_font_defaults;
	}
}

if ( ! function_exists( 'aravan_spacing_get_defaults' ) ) {
	/**
	 * Set the default options.
	 *
	 *
	 * @param bool $filter Whether to return the filtered values or original values.
	 * @return array Option defaults.
	 */
	function aravan_spacing_get_defaults( $filter = true ) {
		$aravan_spacing_defaults = array(
			'top_bar_top' => '5',
			'top_bar_right' => '40',
			'top_bar_bottom' => '2',
			'top_bar_left' => '40',
			'header_top' => '5',
			'header_right' => '40',
			'header_bottom' => '0',
			'header_left' => '40',
			'fixed_side_margin_top' => '220',
			'fixed_side_margin_right'=> '0',
			'fixed_side_margin_bottom' => '0',
			'fixed_side_margin_left' => '0',
			'fixed_side_top' => '12',
			'fixed_side_right' => '8',
			'fixed_side_bottom' => '12',
			'fixed_side_left' => '5',
			'button_top' => '12',
			'button_right' => '25',
			'button_bottom' => '12',
			'button_left' => '25',
			'menu_item' => '8',
			'menu_item_height' => '62',
			'sub_menu_item_height' => '10',
			'content_top' => '25',
			'content_right' => '25',
			'content_bottom' => '20',
			'content_left' => '25',
			'mobile_content_top' => '15',
			'mobile_content_right' => '15',
			'mobile_content_bottom' => '15',
			'mobile_content_left' => '15',
			'side_top' => '0',
			'side_right' => '0',
			'side_bottom' => '0',
			'side_left' => '0',
			'mobile_side_top' => '0',
			'mobile_side_right' => '0',
			'mobile_side_bottom' => '0',
			'mobile_side_left' => '0',
			'separator' => '15',
			'left_sidebar_width' => '25',
			'right_sidebar_width' => '25',
			'widget_top' => '20',
			'widget_right' => '20',
			'widget_bottom' => '20',
			'widget_left' => '20',
			'footer_widget_container_top' => '50',
			'footer_widget_container_right' => '30',
			'footer_widget_container_bottom' => '50',
			'footer_widget_container_left' => '30',
			'footer_widget_separator' => '30',
			'footer_top' => '10',
			'footer_right' => '30',
			'footer_bottom' => '10',
			'footer_left' => '30',
		);

		if ( $filter ) {
			return apply_filters( 'aravan_spacing_option_defaults', $aravan_spacing_defaults );
		}

		return $aravan_spacing_defaults;
	}
}

if ( ! function_exists( 'aravan_get_default_color_palettes' ) ) {
	/**
	 * Set up our colors for the color picker palettes and filter them so you can change them.
	 *
	 */
	function aravan_get_default_color_palettes() {
		$palettes = array(
			'#ffffff',
			'#eeeeee',
			'#e5e5e5',
			'#555555',
			'#222222',
			'#000000'
		);

		return apply_filters( 'aravan_default_color_palettes', $palettes );
	}
}

if ( ! function_exists( 'aravan_typography_default_fonts' ) ) {
	/**
	 * Set the default system fonts.
	 *
	 */
	function aravan_typography_default_fonts() {
		$fonts = array(
			'inherit',
			'System Stack',
			'Arial, Helvetica, sans-serif',
			'Courier New',
			'Georgia, Times New Roman, Times, serif',
			'Trebuchet MS, Helvetica, sans-serif',
			'Verdana, Geneva, sans-serif',
			'Montserrat',
			'Roboto',
			'Overpass',
			'Roboto Mono'
		);

		return apply_filters( 'aravan_typography_default_fonts', $fonts );
	}
}

define( 'ARAVAN_DEFAULT_FONTS' , '//fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic|Overpass:100,100italic,200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,800,800italic,900,900italic|Roboto+Mono:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic' );
