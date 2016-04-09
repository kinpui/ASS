<?php

function get_search_css()
{
  /* 日期控件需要使用css */
  return 'bootstrap-datetimepicker.min.css';
}

/**
 *获取需要用到的js
 **/
function get_search_js()
{
  return array('js_array'=>(
      array(
      'function.js',
      'bootstrap-datetimepicker.min.js',
      'bootstrap-datetimepicker.zh-CN.js','select.date.js'
      )
    )
  );
}

/**
 * 获取搜索控件中需要使用到的所有数据
 * return array
 **/
function get_search_data()
{
  /* 获取需要使用的data */

  $data = array();
  $ci = & get_instance();

  /* 加载公用查询函数 */
  $ci->load->model('Publics');

  /* 获取数码类型信息 */
  $data['digital_type'] = $ci->Publics->get_digital_type();

  /* 获取送修状态信息 */
  $data['state']        = $ci->Publics->get_state();

  /* 获取区域信息 */
  $data['region']       = $ci->Publics->get_region();

  return $data;
}
