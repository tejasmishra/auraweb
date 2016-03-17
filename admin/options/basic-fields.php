<?php
Redux::setSection( $opt_name, array(
        'title'            => __( 'Checkbox', 'origin-theme' ),
        'id'               => 'basic-checkbox',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => __( 'For full documentation on this field, visit: ', 'origin-theme' ) . '<a href="//docs.reduxframework.com/core/fields/checkbox/" target="_blank">docs.reduxframework.com/core/fields/checkbox/</a>',
        'fields'           => array(
            array(
                'id'       => 'opt-checkbox',
                'type'     => 'checkbox',
                'title'    => __( 'Checkbox Option', 'origin-theme' ),
                'subtitle' => __( 'No validation can be done on this field type', 'origin-theme' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
                'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                'id'       => 'opt-multi-check',
                'type'     => 'checkbox',
                'title'    => __( 'Multi Checkbox Option', 'origin-theme' ),
                'subtitle' => __( 'No validation can be done on this field type', 'origin-theme' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
                //Must provide key => value pairs for multi checkbox options
                'options'  => array(
                    '1' => 'Opt 1',
                    '2' => 'Opt 2',
                    '3' => 'Opt 3'
                ),
                //See how std has changed? you also don't need to specify opts that are 0.
                'default'  => array(
                    '1' => '1',
                    '2' => '0',
                    '3' => '0'
                )
            ),
            array(
                'id'       => 'opt-checkbox-data',
                'type'     => 'checkbox',
                'title'    => __( 'Multi Checkbox Option (with menu data)', 'origin-theme' ),
                'subtitle' => __( 'No validation can be done on this field type', 'origin-theme' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
                'data'     => 'menu'
            ),
            array(
                'id'       => 'opt-checkbox-sidebar',
                'type'     => 'checkbox',
                'title'    => __( 'Multi Checkbox Option (with sidebar data)', 'origin-theme' ),
                'subtitle' => __( 'No validation can be done on this field type', 'origin-theme' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
                'data'     => 'sidebars'
            ),
        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'            => __( 'Radio', 'origin-theme' ),
        'id'               => 'basic-Radio',
        'subsection'       => true,
        'customizer_width' => '500px',
        'desc'             => __( 'For full documentation on this field, visit: ', 'origin-theme' ) . '<a href="//docs.reduxframework.com/core/fields/radio/" target="_blank">docs.reduxframework.com/core/fields/radio/</a>',
        'fields'           => array(
            array(
                'id'       => 'opt-radio',
                'type'     => 'radio',
                'title'    => __( 'Radio Option', 'origin-theme' ),
                'subtitle' => __( 'No validation can be done on this field type', 'origin-theme' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
                //Must provide key => value pairs for radio options
                'options'  => array(
                    '1' => 'Opt 1',
                    '2' => 'Opt 2',
                    '3' => 'Opt 3'
                ),
                'default'  => '2'
            ),
            array(
                'id'       => 'opt-radio-data',
                'type'     => 'radio',
                'title'    => __( 'Radio Option w/ Menu Data', 'origin-theme' ),
                'subtitle' => __( 'No validation can be done on this field type', 'origin-theme' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
                'data'     => 'menu'
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Sortable', 'origin-theme' ),
        'id'         => 'basic-Sortable',
        'subsection' => true,
        'desc'       => __( 'For full documentation on this field, visit: ', 'origin-theme' ) . '<a href="//docs.reduxframework.com/core/fields/sortable/" target="_blank">docs.reduxframework.com/core/fields/sortable/</a>',
        'fields'     => array(
            array(
                'id'       => 'opt-sortable',
                'type'     => 'sortable',
                'title'    => __( 'Sortable Text Option', 'origin-theme' ),
                'subtitle' => __( 'Define and reorder these however you want.', 'origin-theme' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
                'label'    => true,
                'options'  => array(
                    'Text One'   => 'Item 1',
                    'Text Two'   => 'Item 2',
                    'Text Three' => 'Item 3',
                )
            ),
            array(
                'id'       => 'opt-check-sortable',
                'type'     => 'sortable',
                'mode'     => 'checkbox', // checkbox or text
                'title'    => __( 'Sortable Text Option', 'origin-theme' ),
                'subtitle' => __( 'Define and reorder these however you want.', 'origin-theme' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
                'options'  => array(
                    'cb1' => 'Checkbox One',
                    'cb2' => 'Checkbox Two',
                    'cb3' => 'Checkbox Three',
                ),
                'default'  => array(
                    'cb1' => false,
                    'cb2' => true,
                    'cb3' => false,
                )
            ),
        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'            => __( 'Text', 'origin-theme' ),
        'desc'             => __( 'For full documentation on this field, visit: ', 'origin-theme' ) . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">docs.reduxframework.com/core/fields/text/</a>',
        'id'               => 'basic-Text',
        'subsection'       => true,
        'customizer_width' => '700px',
        'fields'           => array(
            array(
                'id'       => 'text-example',
                'type'     => 'text',
                'title'    => __( 'Text Field', 'origin-theme' ),
                'subtitle' => __( 'Subtitle', 'origin-theme' ),
                'desc'     => __( 'Field Description', 'origin-theme' ),
                'default'  => 'Default Text',
            ),
            array(
                'id'        => 'text-example-hint',
                'type'      => 'text',
                'title'     => __( 'Text Field w/ Hint', 'origin-theme' ),
                'subtitle'  => __( 'Subtitle', 'origin-theme' ),
                'desc'      => __( 'Field Description', 'origin-theme' ),
                'default'   => 'Default Text',
                'text_hint' => array(
                    'title'   => 'Hint Title',
                    'content' => 'Hint content about this field!'
                )
            ),
            array(
                'id'          => 'text-placeholder',
                'type'        => 'text',
                'title'       => __( 'Text Field', 'origin-theme' ),
                'subtitle'    => __( 'Subtitle', 'origin-theme' ),
                'desc'        => __( 'Field Description', 'origin-theme' ),
                'placeholder' => 'Placeholder Text',
            ),

        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Multi Text', 'origin-theme' ),
        'id'         => 'basic-Multi Text',
        'desc'       => __( 'For full documentation on this field, visit: ', 'origin-theme' ) . '<a href="//docs.reduxframework.com/core/fields/multi-text/" target="_blank">docs.reduxframework.com/core/fields/multi-text/</a>',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-multitext',
                'type'     => 'multi_text',
                'title'    => __( 'Multi Text Option', 'origin-theme' ),
                'subtitle' => __( 'Field subtitle', 'origin-theme' ),
                'desc'     => __( 'Field Decription', 'origin-theme' )
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Password', 'origin-theme' ),
        'id'         => 'basic-Password',
        'desc'       => __( 'For full documentation on this field, visit: ', 'origin-theme' ) . '<a href="//docs.reduxframework.com/core/fields/password/" target="_blank">docs.reduxframework.com/core/fields/password/</a>',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'password',
                'type'     => 'password',
                'username' => true,
                'title'    => 'Password Field',
                //'placeholder' => array(
                //    'username' => 'Username',
                //    'password' => 'Password',
                //)
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Textarea', 'origin-theme' ),
        'id'         => 'basic-Textarea',
        'desc'       => __( 'For full documentation on this field, visit: ', 'origin-theme' ) . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">docs.reduxframework.com/core/fields/textarea/</a>',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-textarea',
                'type'     => 'textarea',
                'title'    => __( 'Textarea Option - HTML Validated Custom', 'origin-theme' ),
                'subtitle' => __( 'Subtitle', 'origin-theme' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'origin-theme' ),
                'default'  => 'Default Text',
            )
        )
    ) );
?>