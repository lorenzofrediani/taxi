<div class="home-header-wrap">
<?php

	$zerif_parallax_img1 = get_theme_mod('zerif_parallax_img1',get_template_directory_uri() . '/images/background1.jpg');
	$zerif_parallax_img2 = get_theme_mod('zerif_parallax_img2',get_template_directory_uri() . '/images/background2.png');
	$zerif_parallax_use = get_theme_mod('zerif_parallax_show');

	if ( $zerif_parallax_use == 1 && (!empty($zerif_parallax_img1) || !empty($zerif_parallax_img2)) ) {
		echo '<ul id="parallax_move">';
				if( !empty($zerif_parallax_img1) ) { 
				echo '<li class="layer layer1" data-depth="0.10" style="background-image: url(\'' . esc_url( $zerif_parallax_img1 ) . '\');"></li>';
			}
			if( !empty($zerif_parallax_img2) ) { 
				echo '<li class="layer layer2" data-depth="0.20" style="background-image: url(\'' . esc_url( $zerif_parallax_img2 ) . '\');"></li>';
			}

		echo '</ul>';
		}

	echo '<div class="header-content-wrap">';

		echo '<div class="container">';

		zerif_big_title_text_trigger();

		$zerif_bigtitle_redbutton_label = get_theme_mod('zerif_bigtitle_redbutton_label',__('Features','zerif-lite'));

		$zerif_bigtitle_redbutton_url = get_theme_mod('zerif_bigtitle_redbutton_url', esc_url( home_url( '/' ) ).'#focus');

		$zerif_bigtitle_greenbutton_label = get_theme_mod('zerif_bigtitle_greenbutton_label',__("What's inside",'zerif-lite'));

		$zerif_bigtitle_greenbutton_url = get_theme_mod('zerif_bigtitle_greenbutton_url',esc_url( home_url( '/' ) ).'#focus');

		if( (!empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url)) || (!empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url))):


if (wpmd_is_ios()):
echo '<a class="btn btn-primary custom-button green-btn" id="whatsappContact" href="whatsapp://app?abid=+393479487759" target="_blank" rel="alternate"><img src="/wp-content/uploads/2016/11/whatsapp-logo.png" alt="" /></a>';
elseif ( wpmd_is_android()):
echo '<a class="btn btn-primary custom-button green-btn" id="whatsappContact" href="intent://send/+393479487759#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end" target="_blank" rel="alternate"><img src="/wp-content/uploads/2016/11/whatsapp-logo.png" alt="" /></a>';
endif;

echo '<script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>';
echo '<div id="SkypeButton_Call_lionred72_1" class="btn btn-primary custom-button red-btn" >';
echo ' <script type="text/javascript">';
echo ' Skype.ui({';
echo ' "name": "call",';
echo ' "element": "SkypeButton_Call_lionred72_1",';
echo ' "participants": ["lionred72"],';
echo ' "imageSize": 32';
echo ' });';
echo ' </script>';
echo '</div>';


				if ( !empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url) ):

					echo '<a href="'.esc_url( $zerif_bigtitle_greenbutton_url ).'" class="btn btn-primary custom-button green-btn"><i class="fa fa-phone fa-3x" style="float:left;" aria-hidden="true"></i><div style="float: right;
margin-left: 10px;">'.wp_kses_post( $zerif_bigtitle_greenbutton_label ).'<br/><span style="text-transform:none">Leonetti Stefano</span></div></a>';

				elseif ( is_customize_preview() ):

					echo '<a href="" class="btn btn-primary custom-button green-btn zerif_hidden_if_not_customizer"></a>';

				endif;

				zerif_big_title_buttons_bottom_trigger();

			echo '</div>';

		endif;


	echo '</div><!-- .header-content-wrap -->';
		echo '<div class="clear"></div>';

?>

</div>