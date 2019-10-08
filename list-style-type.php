$this->add_control(
    'list_style',
    [
        'label' => __( 'List Style', 'plugin-domain' ),
        'type' => \Elementor\Controls_Manager::SELECT,
        'default' => 'none',
        'options' => [
            'square'  => __( 'Square', 'plugin-domain' ),
            'circle' => __( 'Circle', 'plugin-domain' ),
            'upper-roman' => __( 'Upper Roman', 'plugin-domain' ),
            'lower-alpha' => __( 'Lower Alpha', 'plugin-domain' ),
            'none' => __( 'None', 'plugin-domain' ),
        ],
        'selectors' => [
            '{{WRAPPER}} .yourULClass' => 'list-style-type: {{VALUE}}',
        ],

    ]
);
