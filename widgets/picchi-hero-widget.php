<?php
class Picchi_Hero_Widget extends \Elementor\Widget_Base
{

    public function get_name(): string
    {
        return 'picchi_hero';
    }

    public function get_title(): string
    {
        return esc_html__('Picchi Hero', 'picchi-core');
    }

    public function get_icon(): string
    {
        return 'eicon-code';
    }

    public function get_categories(): array
    {
        return ['picchi-category'];
    }

    public function get_keywords(): array
    {
        return ['picchi', 'hero'];
    }

    protected function register_controls(): void
    {

        // Content Tab Start

        $this->start_controls_section(
            'content',
            [
                'label' => esc_html__('Content', 'picchi_core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        //Subtitle
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__('Subtitle', 'picchi_core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                // 'default' => esc_html__('Default title', 'picchi_core'),
                'placeholder' => esc_html__('Type your subtitle here', 'picchi_core'),
                'label_block' => true,
                'default' => 'welcome to our agency',
                'dynamic' => [
                    'active' => true,
                ],
               


            ]
        );
        //Title
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'picchi_core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                // 'default' => esc_html__('Default title', 'picchi_core'),
                'placeholder' => esc_html__('Type your title here', 'picchi_core'),
                'label_block' => true,
                'default' => 'gain the beautiful result',
                'dynamic' => [
                    'active' => true,
                ],


            ]
        );
        //Description
        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'picchi_core'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                // 'default' => esc_html__('Default title', 'picchi_core'),
                'placeholder' => esc_html__('Type your description here', 'picchi_core'),
                'label_block' => true,
                'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'dynamic' => [
                    'active' => true,
                ],


            ]
        );

        $this->end_controls_section();

        // Content Tab End


        // Content Tab Start

        $this->start_controls_section(
            'button',
            [
                'label' => esc_html__('Button', 'picchi_core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        //Button 1 text
        $this->add_control(
            'button1_text',
            [
                'label' => esc_html__('Button 1 Text', 'picchi_core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                // 'default' => esc_html__('Default title', 'picchi_core'),
                'placeholder' => esc_html__('Type button text here', 'picchi_core'),
                'label_block' => true,
                'default' => 'learn more',
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        //Button 1 URL
        $this->add_control(
            'button1_url',
            [
                'label' => esc_html__('Button 1 URL', 'picchi_core'),
                'type' => \Elementor\Controls_Manager::URL,
                // 'default' => esc_html__('Default title', 'picchi_core'),
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        //Button 2 text
        $this->add_control(
            'button2_text',
            [
                'label' => esc_html__('Button 2 Text', 'picchi_core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                // 'default' => esc_html__('Default title', 'picchi_core'),
                'placeholder' => esc_html__('Type button text here', 'picchi_core'),
                'label_block' => true,
                'default' => 'contact us',
                'separator' => 'before',
                'dynamic' => [
                    'active' => true,
                ]
                
            ]
        );
        //Button 2 URL
        $this->add_control(
            'button2_url',
            [
                'label' => esc_html__('Button 2 URL', 'picchi_core'),
                'type' => \Elementor\Controls_Manager::URL,
                // 'default' => esc_html__('Default title', 'picchi_core'),
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        //Subheading Style


    }

    protected function render(): void
    {
        //Contents
        $settings = $this->get_settings_for_display();
        $sub_title = $settings['sub_title'];
        $title = $settings['title'];
        $description = $settings['description'];
        //Buttons 1
        $button1_text = $settings['button1_text'];
        $button1_url = $settings['button1_url']['url'];
        $this->add_link_attributes('link1_attribute', $settings['button1_url']);
        //Buttons 2
        $button2_text = $settings['button2_text'];
        $button2_url = $settings['button2_url']['url'];
        $this->add_link_attributes('link2_attribute', $settings['button2_url']);


?>
        <div class="welcome-content ">
            <h4><?php echo $sub_title; ?></h4>
            <h2><?php echo $title; ?></h2>
            <p>
                <?php echo $description; ?>
            </p>
            <a <?php $this->print_render_attribute_string('link1_attribute'); ?> class="box-btn">
                <?php echo $button1_text ?></a>
            <a <?php $this->print_render_attribute_string('link2_attribute'); ?>
                class="border-btn"><?php echo $button2_text ?></a>

        </div>
<?php
    }

    protected function content_template(): void {}
}
