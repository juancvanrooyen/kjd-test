<?php


// Add Theme Settings to Admin Customize menu

function jtwp_custom_theme_settings($wp_customize) {
	
	
	// Slider Panel
	
		$wp_customize->add_panel('jtwp_slider_section', array(
			'title' => 'Main Slider',
			'priority' => 110,
		));
	
		// Slide 1 Section
	
		$wp_customize->add_section('jtwp_slider_slide1', array(
			'title' => 'Slide 1',
			'panel' => 'jtwp_slider_section',
		));
		
		// Slide 1 Headline
		$wp_customize->add_setting('jtwp_slide1_headline', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_slide1_headline_control', array(
			'label' => 'Headline',
			'section' => 'jtwp_slider_slide1',
			'settings' => 'jtwp_slide1_headline',
		) ) );
		
		// Slide 1 Description
		$wp_customize->add_setting('jtwp_slide1_description', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_slide1_description_control', array(
			'label' => 'Description',
			'section' => 'jtwp_slider_slide1',
			'settings' => 'jtwp_slide1_description',
			'type' => 'textarea',
		) ) );
		
		// Slide 1 Text Color
		$wp_customize->add_setting('jtwp_slide1_text_color');
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jtwp_slide1_text_color_control', array(
				'label'      => __( 'Text Color' ),
				'section'    => 'jtwp_slider_slide1',
				'settings'   => 'jtwp_slide1_text_color',
			) ) 
		);
		
		// Slide 1 Link
		$wp_customize->add_setting('jtwp_slide1_link');
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_slide1_link_control', array(
			'label' => 'Link',
			'description' => 'Relative path by default. External path must prefix https:// ',
			'section' => 'jtwp_slider_slide1',
			'settings' => 'jtwp_slide1_link',
			'type' => 'text',
		) ) );
		
		// Slide 1 Image
		$wp_customize->add_setting('jtwp_slide1_image');
		
		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'jtwp_slide1_image_control', array(
			'label' => 'Image',
			'description' => 'Resolution: 1200 x 675px',
			'section' => 'jtwp_slider_slide1',
			'settings' => 'jtwp_slide1_image',
			'width' => 1200,
			'height' => 675,
		) ) );
		
		
		
	// Slide 2 Section
	
		$wp_customize->add_section('jtwp_slider_slide2', array(
			'title' => 'Slide 2',
			'panel' => 'jtwp_slider_section',
		));
		
		// Slide 2 Display Setting
		$wp_customize->add_setting('jtwp_slide2_display', array(
			'default' => 'No',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_slide2_display_control', array(
			'label' => 'Visible?',
			'section' => 'jtwp_slider_slide2',
			'settings' => 'jtwp_slide2_display',
			'type' => 'radio',
			'choices' => array('Yes' => 'Yes', 'No' => 'No'),
		) ) );
		
		// Slide 2 Headline
		$wp_customize->add_setting('jtwp_slide2_headline', array(
			'default' => 'Example Headline Text!',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_slide2_headline_control', array(
			'label' => 'Headline',
			'section' => 'jtwp_slider_slide2',
			'settings' => 'jtwp_slide2_headline',
		) ) );
		
		// Slide 2 Description
		$wp_customize->add_setting('jtwp_slide2_description', array(
			'default' => 'More and Even Smaller Example Headline Text!',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_slide2_description_control', array(
			'label' => 'Description',
			'section' => 'jtwp_slider_slide2',
			'settings' => 'jtwp_slide2_description',
			'type' => 'textarea',
		) ) );
		
		// Slide 2 Text Color
		$wp_customize->add_setting('jtwp_slide2_text_color');
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jtwp_slide2_text_color_control', array(
				'label'      => __( 'Text Color' ),
				'section'    => 'jtwp_slider_slide2',
				'settings'   => 'jtwp_slide2_text_color',
			) ) 
		);
		
		// Slide 2 Link
		$wp_customize->add_setting('jtwp_slide2_link');
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_slide2_link_control', array(
			'label' => 'Link',
			'description' => 'Relative path by default. External path must prefix http:// ',
			'section' => 'jtwp_slider_slide2',
			'settings' => 'jtwp_slide2_link',
			'type' => 'text',
		) ) );
		
		// Slide 2 Image
		$wp_customize->add_setting('jtwp_slide2_image');
		
		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'jtwp_slide2_image_control', array(
			'label' => 'Image',
			'description' => 'Resolution: 1200 x 675px',
			'section' => 'jtwp_slider_slide2',
			'settings' => 'jtwp_slide2_image',
			'width' => 1200,
			'height' => 675,
		) ) );
	
	
	// Cards Section
	
		$wp_customize->add_panel('jtwp_cards_section', array(
			'title' => 'Cards',
			'priority' => 111,
		));
	
		// Cards Section Heading
	
		$wp_customize->add_section('jtwp_cards_section_heading', array(
			'title' => 'General Settings',
			'panel' => 'jtwp_cards_section',
		));
		
		// Cards Section Headline	
		$wp_customize->add_setting('jtwp_cards_section_headline', array(
			'default' => 'Example Headline Text!',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_section_headline_control', array(
			'label' => 'Headline',
			'section' => 'jtwp_cards_section_heading',
			'settings' => 'jtwp_cards_section_headline',
		) ) );
		
		// Cards Section Description
		$wp_customize->add_setting('jtwp_cards_section_description', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_section_description_control', array(
			'label' => 'Description',
			'section' => 'jtwp_cards_section_heading',
			'settings' => 'jtwp_cards_section_description',
			'type' => 'textarea',
		) ) );
		
		
	// Card 1 Section
	
		$wp_customize->add_section('jtwp_cards_card1', array(
			'title' => 'Card 1',
			'panel' => 'jtwp_cards_section',
		));
		
		// Card 1 Headline
		$wp_customize->add_setting('jtwp_cards_card1_headline', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card1_headline_control', array(
			'label' => 'Headline',
			'section' => 'jtwp_cards_card1',
			'settings' => 'jtwp_cards_card1_headline',
		) ) );
		
		// Card 1 Description
		$wp_customize->add_setting('jtwp_cards_card1_description', array(
			'default' => 'More and Even Smaller Example Headline Text!',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card1_description_control', array(
			'label' => 'Description',
			'section' => 'jtwp_cards_card1',
			'settings' => 'jtwp_cards_card1_description',
			'type' => 'textarea',
		) ) );
		
		// Card 1 Link
		$wp_customize->add_setting('jtwp_cards_card1_link');
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card1_link_control', array(
			'label' => 'Card Link',
			'description' => 'Relative path by default. External path must prefix https:// ',
			'section' => 'jtwp_cards_card1',
			'settings' => 'jtwp_cards_card1_link',
			'type' => 'text',
		) ) );
		
		// Card 1 Image
		$wp_customize->add_setting('jtwp_cards_card1_image');
		
		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'jtwp_cards_card1_image_control', array(
			'label' => 'Image',
			'description' => 'Resolution: 700 x 525px',
			'section' => 'jtwp_cards_card1',
			'settings' => 'jtwp_cards_card1_image',
			'width' => 700,
			'height' => 525,
		) ) );
		
		// Card 1 Button Text
		$wp_customize->add_setting('jtwp_cards_card1_button_text', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card1_button_text_control', array(
			'label' => 'Button Text',
			'section' => 'jtwp_cards_card1',
			'settings' => 'jtwp_cards_card1_button_text',
		) ) );
		
		// Card 1 Button Link
		$wp_customize->add_setting('jtwp_cards_card1_button_link');
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card1_button_link_control', array(
			'label' => 'Button Link',
			'description' => 'Relative path by default. External path must prefix https:// ',
			'section' => 'jtwp_cards_card1',
			'settings' => 'jtwp_cards_card1_button_link',
			'type' => 'text',
		) ) );
		
		
	// Card 2 Section
	
		$wp_customize->add_section('jtwp_cards_card2', array(
			'title' => 'Card 2',
			'panel' => 'jtwp_cards_section',
		));
		
		// Card 2 Display Setting
		$wp_customize->add_setting('jtwp_cards_card2_display', array(
			'default' => 'No',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card2_display_control', array(
			'label' => 'Visible?',
			'section' => 'jtwp_cards_card2',
			'settings' => 'jtwp_cards_card2_display',
			'type' => 'radio',
			'choices' => array('Yes' => 'Yes', 'No' => 'No'),
		) ) );
		
		// Card 2 Headline
		$wp_customize->add_setting('jtwp_cards_card2_headline', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card2_headline_control', array(
			'label' => 'Headline',
			'section' => 'jtwp_cards_card2',
			'settings' => 'jtwp_cards_card2_headline',
		) ) );
		
		// Card 2 Description
		$wp_customize->add_setting('jtwp_cards_card2_description', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card2_description_control', array(
			'label' => 'Description',
			'section' => 'jtwp_cards_card2',
			'settings' => 'jtwp_cards_card2_description',
			'type' => 'textarea',
		) ) );
		
		// Card 2 Link
		$wp_customize->add_setting('jtwp_cards_card2_link');
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card2_link_control', array(
			'label' => 'Card Link',
			'description' => 'Relative path by default. External path must prefix https:// ',
			'section' => 'jtwp_cards_card2',
			'settings' => 'jtwp_cards_card2_link',
			'type' => 'text',
		) ) );
		
		// Card 2 Image
		$wp_customize->add_setting('jtwp_cards_card2_image');
		
		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'jtwp_cards_card2_image_control', array(
			'label' => 'Image',
			'description' => 'Resolution: 700 x 525px',
			'section' => 'jtwp_cards_card2',
			'settings' => 'jtwp_cards_card2_image',
			'width' => 700,
			'height' => 525,
		) ) );
		
		// Card 2 Button Text
		$wp_customize->add_setting('jtwp_cards_card2_button_text', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card2_button_text_control', array(
			'label' => 'Button Text',
			'section' => 'jtwp_cards_card2',
			'settings' => 'jtwp_cards_card2_button_text',
		) ) );
		
		// Card 2 Button Link
		$wp_customize->add_setting('jtwp_cards_card2_button_link');
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card2_button_link_control', array(
			'label' => 'Button Link',
			'description' => 'Relative path by default. External path must prefix https:// ',
			'section' => 'jtwp_cards_card2',
			'settings' => 'jtwp_cards_card2_button_link',
			'type' => 'text',
		) ) );
		
		
	// Card 3 Section
	
		$wp_customize->add_section('jtwp_cards_card3', array(
			'title' => 'Card 3',
			'panel' => 'jtwp_cards_section',
		));
		
		// Card 3 Display Setting
		$wp_customize->add_setting('jtwp_cards_card3_display', array(
			'default' => 'No',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card3_display_control', array(
			'label' => 'Visible?',
			'section' => 'jtwp_cards_card3',
			'settings' => 'jtwp_cards_card3_display',
			'type' => 'radio',
			'choices' => array('Yes' => 'Yes', 'No' => 'No'),
		) ) );
		
		// Card 3 Headline
		$wp_customize->add_setting('jtwp_cards_card3_headline', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card3_headline_control', array(
			'label' => 'Headline',
			'section' => 'jtwp_cards_card3',
			'settings' => 'jtwp_cards_card3_headline',
		) ) );
		
		// Card 3 Description
		$wp_customize->add_setting('jtwp_cards_card3_description', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card3_description_control', array(
			'label' => 'Description',
			'section' => 'jtwp_cards_card3',
			'settings' => 'jtwp_cards_card3_description',
			'type' => 'textarea',
		) ) );
		
		// Card 3 Link
		$wp_customize->add_setting('jtwp_cards_card3_link');
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card3_link_control', array(
			'label' => 'Card Link',
			'description' => 'Relative path by default. External path must prefix https:// ',
			'section' => 'jtwp_cards_card3',
			'settings' => 'jtwp_cards_card3_link',
			'type' => 'text',
		) ) );
		
		// Card 3 Image
		$wp_customize->add_setting('jtwp_cards_card3_image');
		
		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'jtwp_cards_card3_image_control', array(
			'label' => 'Image',
			'description' => 'Resolution: 700 x 525px',
			'section' => 'jtwp_cards_card3',
			'settings' => 'jtwp_cards_card3_image',
			'width' => 700,
			'height' => 525,
		) ) );
		
		// Card 3 Button Text
		$wp_customize->add_setting('jtwp_cards_card3_button_text', array(
			'default' => 'Button'
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card3_button_text_control', array(
			'label' => 'Button Text',
			'section' => 'jtwp_cards_card3',
			'settings' => 'jtwp_cards_card3_button_text',
		) ) );
		
		// Card 3 Button Link
		$wp_customize->add_setting('jtwp_cards_card3_button_link');
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card3_button_link_control', array(
			'label' => 'Button Link',
			'description' => 'Relative path by default. External path must prefix https:// ',
			'section' => 'jtwp_cards_card3',
			'settings' => 'jtwp_cards_card3_button_link',
			'type' => 'text',
		) ) );
		
		
	// Card 4 Section
	
		$wp_customize->add_section('jtwp_cards_card4', array(
			'title' => 'Card 4',
			'panel' => 'jtwp_cards_section',
		));
		
		// Card 4 Display Setting
		$wp_customize->add_setting('jtwp_cards_card4_display', array(
			'default' => 'No',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card4_display_control', array(
			'label' => 'Visible?',
			'section' => 'jtwp_cards_card4',
			'settings' => 'jtwp_cards_card4_display',
			'type' => 'radio',
			'choices' => array('Yes' => 'Yes', 'No' => 'No'),
		) ) );
		
		// Card 4 Headline
		$wp_customize->add_setting('jtwp_cards_card4_headline', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card4_headline_control', array(
			'label' => 'Headline',
			'section' => 'jtwp_cards_card4',
			'settings' => 'jtwp_cards_card4_headline',
		) ) );
		
		// Card 4 Description
		$wp_customize->add_setting('jtwp_cards_card4_description', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card4_description_control', array(
			'label' => 'Description',
			'section' => 'jtwp_cards_card4',
			'settings' => 'jtwp_cards_card4_description',
			'type' => 'textarea',
		) ) );
		
		// Card 4 Link
		$wp_customize->add_setting('jtwp_cards_card4_link');
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card4_link_control', array(
			'label' => 'Card Link',
			'description' => 'Relative path by default. External path must prefix https:// ',
			'section' => 'jtwp_cards_card4',
			'settings' => 'jtwp_cards_card4_link',
			'type' => 'text',
		) ) );
		
		// Card 4 Image
		$wp_customize->add_setting('jtwp_cards_card4_image');
		
		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'jtwp_cards_card4_image_control', array(
			'label' => 'Image',
			'description' => 'Resolution: 700 x 525px',
			'section' => 'jtwp_cards_card4',
			'settings' => 'jtwp_cards_card4_image',
			'width' => 700,
			'height' => 525,
		) ) );
		
		// Card 4 Button Text
		$wp_customize->add_setting('jtwp_cards_card4_button_text', array(
			'default' => 'Button'
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card4_button_text_control', array(
			'label' => 'Button Text',
			'section' => 'jtwp_cards_card4',
			'settings' => 'jtwp_cards_card4_button_text',
		) ) );
		
		// Card 4 Button Link
		$wp_customize->add_setting('jtwp_cards_card4_button_link');
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_cards_card4_button_link_control', array(
			'label' => 'Button Link',
			'description' => 'Relative path by default. External path must prefix https:// ',
			'section' => 'jtwp_cards_card4',
			'settings' => 'jtwp_cards_card4_button_link',
			'type' => 'text',
		) ) );
		
		
	// Callout Section
	
		$wp_customize->add_section('jtwp_callout_section', array(
			'title' => 'Callout Banner',
			'priority' => 112,
		));
		
		// Callout Headline
		$wp_customize->add_setting('jtwp_callout_headline', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_callout_headline_control', array(
			'label' => 'Headline',
			'section' => 'jtwp_callout_section',
			'settings' => 'jtwp_callout_headline',
		) ) );
		
		// Callout Description
		$wp_customize->add_setting('jtwp_callout_description', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_callout_description_control', array(
			'label' => 'Description',
			'section' => 'jtwp_callout_section',
			'settings' => 'jtwp_callout_description',
			'type' => 'textarea',
		) ) );
		
		// Callout Image
		$wp_customize->add_setting('jtwp_callout_image');
		
		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'jtwp_callout_image_control', array(
			'label' => 'Image',
			'description' => 'Resolution: 1200 x 675px',
			'section' => 'jtwp_callout_section',
			'settings' => 'jtwp_callout_image',
			'width' => 1200,
			'height' => 675,
		) ) );
		
		// Callout Button Text
		$wp_customize->add_setting('jtwp_callout_button_text', array(
			'default' => ''
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_callout_button_text_control', array(
			'label' => 'Button Text',
			'section' => 'jtwp_callout_section',
			'settings' => 'jtwp_callout_button_text',
		) ) );
		
		// Callout Button Link
		$wp_customize->add_setting('jtwp_callout_button_link');
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_callout_button_link_control', array(
			'label' => 'Button Link',
			'description' => 'Relative path by default. External path must prefix https:// ',
			'section' => 'jtwp_callout_section',
			'settings' => 'jtwp_callout_button_link',
			'type' => 'text',
		) ) );
		
		
	// Accordion Section
	
		$wp_customize->add_panel('jtwp_accordion_section', array(
			'title' => 'Accordion',
			'priority' => 113,
		));
	
		// Accordion Section Heading
		$wp_customize->add_section('jtwp_accordion_section_heading', array(
			'title' => 'General Settings',
			'panel' => 'jtwp_accordion_section',
		));
		
		$wp_customize->add_setting('jtwp_accordion_section_headline', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_accordion_section_headline_control', array(
			'label' => 'Headline',
			'section' => 'jtwp_accordion_section_heading',
			'settings' => 'jtwp_accordion_section_headline',
		) ) );
		
		// Accordion Section Description
		$wp_customize->add_setting('jtwp_accordion_section_description', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_accordion_section_description_control', array(
			'label' => 'Description',
			'section' => 'jtwp_accordion_section_heading',
			'settings' => 'jtwp_accordion_section_description',
			'type' => 'textarea',
		) ) );
		
		
	// Accordion Item 1 Section
	
		$wp_customize->add_section('jtwp_accordion_item1', array(
			'title' => 'Item 1',
			'panel' => 'jtwp_accordion_section',
		));
		
		// Accordion Item 1 Headline
		$wp_customize->add_setting('jtwp_accordion_item1_headline', array(
			'default' => 'Lorem Ipsum',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_accordion_item1_headline_control', array(
			'label' => 'Headline',
			'section' => 'jtwp_accordion_item1',
			'settings' => 'jtwp_accordion_item1_headline',
		) ) );
		
		// Accordion Item 1 Description
		$wp_customize->add_setting('jtwp_accordion_item1_description', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_accordion_item1_description_control', array(
			'label' => 'Description',
			'section' => 'jtwp_accordion_item1',
			'settings' => 'jtwp_accordion_item1_description',
			'type' => 'textarea',
		) ) );
		
		
	// Accordion Item 2 Section
	
		$wp_customize->add_section('jtwp_accordion_item2', array(
			'title' => 'Item 2',
			'panel' => 'jtwp_accordion_section',
		));
		
		// Accordion Item 2 Display Setting
		$wp_customize->add_setting('jtwp_accordion_item2_display', array(
			'default' => 'No',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_accordion_item2_display_control', array(
			'label' => 'Visible?',
			'section' => 'jtwp_accordion_item2',
			'settings' => 'jtwp_accordion_item2_display',
			'type' => 'radio',
			'choices' => array('Yes' => 'Yes', 'No' => 'No'),
		) ) );
		
		// Accordion Item 2 Headline
		$wp_customize->add_setting('jtwp_accordion_item2_headline', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_accordion_item2_headline_control', array(
			'label' => 'Headline',
			'section' => 'jtwp_accordion_item2',
			'settings' => 'jtwp_accordion_item2_headline',
		) ) );
		
		// Accordion Item 2 Description
		$wp_customize->add_setting('jtwp_accordion_item2_description', array(
			'default' => '',
		));
		
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jtwp_accordion_item2_description_control', array(
			'label' => 'Description',
			'section' => 'jtwp_accordion_item2',
			'settings' => 'jtwp_accordion_item2_description',
			'type' => 'textarea',
		) ) );

		
 }

add_action('customize_register', 'jtwp_custom_theme_settings');

 



?>