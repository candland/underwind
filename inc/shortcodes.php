<?php
function uw_testimonial( $atts , $content = null ) {

	$atts = shortcode_atts(
		array(
      'author' => '',
      'pic' => ''
		),
		$atts
	);

  return '<div class="mx-8 p-4 mb-4 bg-yellow-200 flex flex-row flex-wrap rounded">' .
    '<div class="flex-initial min-w-full lg:min-w-0 flex justify-center pb-4 lg:pr-4">' .
    '<img src="' . esc_attr($atts['pic']) . '" alt="' . esc_attr($atts['author']) . '" width="100" height="100" class="flex-none rounded-full" style="width: 100px; height: 100px">' .
    '</div>' .
    '<div class="flex-1">' .
    $content .
    '<br><span class="font-bold text-sm">' . esc_attr($atts['author']) .
    '</span></div></div>';

}
add_shortcode( 'uw_testimonial', 'uw_testimonial' );

function uw_quote( $atts , $content = null ) {

	$atts = shortcode_atts(
		array(
      'src' => '',
      'url' => ''
		),
		$atts
	);

  return '<div class="mx-8 p-4 mb-4 bg-blue-200 rounded">' .
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
    $content .
    '</div>';

}
add_shortcode( 'div', 'uw_div' );
