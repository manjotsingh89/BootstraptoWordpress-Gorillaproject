<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'redux_demo';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Theme Options', 'your-textdomain-here' ),
        'customizer'           => true,
    );

    Redux::setArgs( $opt_name, $args );

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Basic Fields', 'your-textdomain-here' ),
        'id'     => 'logourl22',
        'desc'   => esc_html__( 'Basic field with no subsections.', 'your-textdomain-here' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => esc_html__( 'Logo Url', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add logo there.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the logo in media library then copy paste the url here',
                )
            )
        )
    ) );
    
    
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Footer', 'your-textdomain-here' ),
        'id'     => 'Footer',
        'desc'   => esc_html__( 'Basic field with no subsections.', 'your-textdomain-here' ),
        'icon'   => 'el el-edit',
        'fields' => array(
            array(
                'id'       => 'Footer1link',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Footer 1 Link', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Footer 1 Link there.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Footer 1 Link here',
                )
            ),
            array(
                'id'       => 'Footer2link',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Footer 2 Link', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Footer 2 Link there.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Footer 2 Link here',
                )
            )
        )
    ) );
    
    
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Header Menu', 'your-textdomain-here' ),
        'id'     => 'headermenu',
        'desc'   => esc_html__( 'Basic field with no subsections.', 'your-textdomain-here' ),
        'icon'   => 'el el-list-alt',
        'fields' => array(
            array(
                'id'       => 'Header1link',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Header 1 Link', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Header 1 Link content here.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Header 1 Link here',
                )
            ),
            array(
                'id'       => 'Header2link',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Header 2 Link', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Header 2 Link Content here.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Header 2 Link here',
                )
            )
        )
    ) );
    
    
    
   
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Slider options', 'your-textdomain-here' ),
        'id'     => 'sliderarea',
        'desc'   => esc_html__( 'Basic field with no subsections.', 'your-textdomain-here' ),
        'icon'   => 'el el-picture',
        'fields' => array(
            array(
                'id'       => 'Slider1',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__( 'Add Slider 1 Url', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Slider 1 Url', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Add Slider 1 Url Here', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Slider in media library then copy paste the url here',
                )
            ),
           

array( 
    'id' => 'FIELD_ID',
    'type' => 'text',
    'data' => array(
        'box1' => 'Slider Text top',
        'box2' => 'Slider text Middle',
        'box3' => 'Slider text bottom',
    )
    ),
            
            array(
                'id'       => 'Slider2',
                 'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__( 'Add Slider 2 Url', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Slider 2 Url', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Add Slider 2 Url Here', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Slider in media library then copy paste the url here',
                )
            ),
            array( 
    'id' => 'FIELD_ID2',
    'type' => 'text',
    'data' => array(
        'box4' => 'Slider 2 Text top',
        'box5' => 'Slider 2 text bottom',
    )
    ),
            array(
                'id'       => 'Slider3',
                 'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__( 'Add Slider 3 Url', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Slider 3 Url', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Add Slider 3 Url Here', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Slider in media library then copy paste the url here',
                )
            ),
             array( 
    'id' => 'FIELD_ID3',
    'type' => 'text',
    'data' => array(
        'box6' => 'Slider 3 Text top',
        'box7' => 'Slider 3 text bottom',
    )
    ),
    
    array(
                'id'       => 'modalbtntext',
                'type'     => 'text',
                'title'    => esc_html__( 'Modal Button Text', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Text here.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the text to show on modal button',
                )
            ),
            array(
                'id'       => 'modalbtnurl',
                'type'     => 'text',
                'title'    => esc_html__( 'Modal Button video Url', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Video Url here.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Video Url to show on modal button',
                )
            ),
            array(
                'id'       => 'modalbtndescription',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Modal Button Video Description', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Video Video Description here.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Video Description to show on modal button',
                )
            )
        )
    ) );
    
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Bootstrap Modals', 'your-textdomain-here' ),
        'id'     => 'modalscontent22',
        'desc'   => esc_html__( 'Modal Data with no subsections.', 'your-textdomain-here' ),
        'icon'   => 'el el-edit',
        'fields' => array(
            array(
                'id'       => 'privacymodal22',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Privacy Modal', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Privacy Modal content here.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Privacy Modal content here',
                )
            ),
            array(
                'id'       => 'Impressummodal22',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Impressum Modal', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Impressum Modal content here.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Impressum Modal content here',
                )
            ),
            array(
                'id'       => 'gorilla-project-teaser22',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Gorilla project teaser Modal', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Gorilla project teaser Modal content here.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Gorilla project teaser Modal content here',
                )
            ),
            array(
                'id'       => 'oneIntro22',
                'type'     => 'textarea',
                'title'    => esc_html__( 'oneIntro Modal', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add oneIntro Modal content here.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the oneIntro Modal content here',
                )
            ),
             array(
                'id'       => 'one-intro-wC22',
                'type'     => 'textarea',
                'title'    => esc_html__( 'One-intro-wC Modal', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add One-intro-wC Modal content here.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the One-intro-wC Modal content here',
                )
            ),
            array(
                'id'       => 'two-Helicopter22',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Two Helicopter Modal', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Two Helicopter Modal content here.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Two Helicopter Modal content here',
                )
            ),
            array(
                'id'       => 'two-Helicopter-W-c22',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Two Helicopter-wC Modal', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Two Helicopter-wC Modal content here.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Two Helicopter-wC Modal content here',
                )
            ),
            array(
                'id'       => 'joinourmovement22',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Join Our Movement Modal', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Add Join Our movement Modal content here.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'Add the Join Our movement Modal content here',
                )
            )
        )
    ) );
