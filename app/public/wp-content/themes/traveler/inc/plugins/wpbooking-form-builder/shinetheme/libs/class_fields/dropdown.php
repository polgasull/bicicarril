<?php
/**
 * Created by wpbooking.
 * Developer: nasanji
 * Date: 12/23/2016
 * Version: 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if(!class_exists('WB_Form_Builder_Dropdown')){
    class WB_Form_Builder_Dropdown extends WB_Form_Builder_Abstract_fields{

        static $_inst = false;

        protected $field_id = 'dropdown';
        protected $field_group = 'basic';

        function __construct()
        {

            parent::__construct();
        }

        public function get_info($key)
        {
            $this->field_info = array(
                'title' => esc_html__('Dropdown',ST_TEXTDOMAIN),
                'desc' => esc_html__('Dropdown field',ST_TEXTDOMAIN)
            );
            return parent::get_info($key); // TODO: Change the autogenerated stub
        }
        public function get_field_settings()
        {
            $this->field_settings = array(
                array(
                    'id' => 'title',
                    'label' => esc_html__('Title',ST_TEXTDOMAIN),
                    'type' => 'text',
                    'require' => true
                ),
                array(
                    'id' => 'name',
                    'label' => esc_html__('Name',ST_TEXTDOMAIN),
                    'type' => 'text',
                    'desc' => esc_html__('The name in input tag:',ST_TEXTDOMAIN).' &lt;input type="text" <strong>name</strong>="field_name" &gt;',
                    'require' => true
                ),
                array(
                    'id' => 'option_value',
                    'label' => esc_html__('Option Value',ST_TEXTDOMAIN),
                    'type' => 'select_option',
                ),
                array(
                    'id' => 'required',
                    'label' => esc_html__('Required',ST_TEXTDOMAIN),
                    'type' => 'checkbox',
                ),
                array(
                    'id' => 'advance',
                    'label' => esc_html__('Advanced Options',ST_TEXTDOMAIN),
                    'type' => 'link',
                ),
                array(
                    'id' => 'desc',
                    'label' => esc_html__('Description (optional)',ST_TEXTDOMAIN),
                    'type' => 'text',
                    'adv_field' => true
                ),
                array(
                    'id' => 'extra_class',
                    'label' => esc_html__('Extra Class (optional)',ST_TEXTDOMAIN),
                    'type' => 'text',
                    'adv_field' => true
                ),
                array(
                    'id' => 'custom_id',
                    'label' => esc_html__('Custom Field ID (optional)',ST_TEXTDOMAIN),
                    'type' => 'text',
                    'adv_field' => true
                )

            );

            return parent::get_field_settings(); // TODO: Change the autogenerated stub
        }

        function get_frontend_html($data)
        {
            parent::get_frontend_html($data); // TODO: Change the autogenerated stub

            $html = '<div class="form-group '.$data['class'].'">
                        <label for="' . $data['custom_id'] . '">' . $data['label'] . ' ' . (($data['required']) ? '<span class="required">*</span>' : '') . '</label>';
            if(!empty($data['option_value']) && is_array($data['option_value'])){
                $html .= '<select class="form-control" id="'.$data['custom_id'].'" name="'.$data['name'].'">';
                $html .= '<option value="">'.esc_html__('-- Select --',ST_TEXTDOMAIN).'</option>';
                foreach($data['option_value'] as $key => $val){
                    $html .= '<option value="'.$key.'">'.$val.'</option>';
                }
                $html .= '</select>';
            }
            else{
                $html .= '<span>'.esc_html__('Please input option value form in setting',ST_TEXTDOMAIN).'</span>';
            }
            $html .= '<span class="desc">'.$data['desc'].'</span>
                    </div>';
            return $html;
        }

         function get_admin_html($data, $order_id){
            parent::get_admin_html($data, $order_id);
            $value = isset( $_POST[ $data['name']] ) ? $_POST[ $data['name'] ] : get_post_meta( $order_id, $data['name'], true );
            $html = '<div class="form-row">
                        <label class="form-label"
                               for="' . $data['custom_id'] . '">' . $data['label'] . ' ' . (($data['required']) ? '<span class="required">*</span>' : '') . '</label>
                        <div class="controls">';
                if(!empty($data['option_value']) && is_array($data['option_value'])){
                $html .= '<select class="form-control form-control-admin" id="'.$data['custom_id'].'" name="'.$data['name'].'">';
                $html .= '<option value="" '.selected( $value, '', false ).'>'.esc_html__('-- Select --',ST_TEXTDOMAIN).'</option>';
                    foreach($data['option_value'] as $key => $val){
                        $html .= '<option '.selected( $value, $key, false ).' value="'.$key.'">'.$val.'</option>';
                    }
                $html .= '</select>';
            }

            $html .= '</div>
                    </div>';
            return $html;
        }

        static function inst()
        {
            if (!self::$_inst)
                self::$_inst = new self();

            return self::$_inst;
        }

    }
    WB_Form_Builder_Dropdown::inst();
}