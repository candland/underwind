<?php
function uw_testimonial( $atts , $content = null ) {

  $atts = shortcode_atts(
    array(
      'author' => '',
      'pic' => ''
    ),
    $atts
  );

  return '<div class="mx-8 p-4 mb-4 bg-yellow-200 flex flex-row flex-wrap rounded-lg">' .
    '<div class="flex-initial min-w-full lg:min-w-0 flex justify-center pb-4 lg:pr-4">' .
    '<img src="' . esc_attr($atts['pic']) . '" alt="' . esc_attr($atts['author']) . '" width="100" height="100" class="flex-none rounded-full" style="width: 100px; height: 100px">' .
    '</div>' .
    '<div class="flex-1">' .
    $content .
    '<br><span class="font-bold text-sm">' . esc_attr($atts['author']) .
    '</span></div></div>';

}
add_shortcode( 'uw_testimonial', 'uw_testimonial' );

function uw_social( $atts , $_content = null ) {

  $atts = shortcode_atts(
    array(
      'network' => '',
      'url' => '',
      'class' => ''
    ),
    $atts
  );

  return '<a href="' . esc_attr($atts['url']) . '" target="_blank"><i class="fab fa-' . esc_attr($atts['network']) . ' ' . esc_attr($atts['class']) . '"></i></a>';

}
add_shortcode( 'social', 'uw_social' );

function uw_quote( $atts , $content = null ) {

  $atts = shortcode_atts(
    array(
      'src' => '',
      'url' => ''
    ),
    $atts
  );

  return '<div class="mx-8 p-4 mb-4 bg-blue-200 rounded-lg">' .
    $content . ' - ' . '<a href="' . esc_attr($atts['url']) . '" target="_blank">' . esc_attr($atts['src']) . '</a>' .
    '</div>';

}
add_shortcode( 'uw_quote', 'uw_quote' );

function uw_lead( $_atts , $content = null ) {

  return '<p class="text-lg">' .
    $content .
    '</p>';

}
add_shortcode( 'lead', 'uw_lead' );

function uw_div( $atts , $content = null ) {

  $atts = shortcode_atts(
    array(
      'class' => ''
    ),
    $atts
  );

  return '<div class="' . esc_attr($atts['class']) . '">' .
    do_shortcode($content) .
    '</div>';

}
add_shortcode( 'div', 'uw_div' );


function uw_faq_item( $atts , $content = null ) {

  $atts = shortcode_atts(
    array(
      'title' => '',
      'active' => true
    ),
    $atts
  );

  return '<div class="">' .
    '<h6 class="pb-1">' . esc_attr($atts['title']) . '</h6>' .
    '<p>' . $content . '</p>' .
    '</div>';

}
add_shortcode( 'faq_item', 'uw_faq_item' );


function uw_sharing( $atts , $_content ) {
  extract( shortcode_atts(
    array(
      'class' => '',
      'url' => urlencode(get_permalink()),
      'text' => urlencode(get_the_title()),
      'twitter' => '',
    ),
    $atts
  ) );

  $links = array(
    array(
      'name' => 'twitter',
      'url' => 'http://twitter.com/share?text=^TEXT&url=^URL&via=^TWITTER',
      'icon' => 'fa-twitter'
    ),
    array(
      'name' => 'facebook',
      'url' => 'http://www.facebook.com/sharer.php?u=^URL&t=^TEXT',
      'icon' => 'fa-facebook'
    ),
    array(
      'name' => 'linkedin',
      'url' => 'http://www.linkedin.com/shareArticle?mini=true&url=^URL&title=^TEXT',
      'icon' => 'fa-linkedin'
    ),
    array(
      'name' => 'tumblr',
      'url' => 'https://www.tumblr.com/share?v=3&u=^URL&t=^TEXT',
      'icon' => 'fa-tumblr'
    ),
    array(
      'name' => 'reddit',
      'url' => 'http://www.reddit.com/submit?url=^URL&title=^TEXT',
      'icon' => 'fa-reddit'
    ),
  );

  $html = '<ul class="flex flex-row list-none">';
  foreach ( $links as $link )
    $html = $html .
    '<li class="list-none">' .
    '<a href="' . $link['url'] . '" class="" rel="nofollow" target="_blank">' .
    '<i class="fab fa-fw fa-2x ' . $link['icon'] . ' ^CLASS"></i>' .
    '</a>' .
    '</li>';

  $html = $html . '</ul>';
  $html = str_replace('^URL', esc_attr($url), $html);
  $html = str_replace('^TEXT', esc_attr($text), $html);
  $html = str_replace('^TWITTER', esc_attr($twitter), $html);
  $html = str_replace('^CLASS', esc_attr($class), $html);

  return $html;
}
add_shortcode( 'sharing', 'uw_sharing' );
