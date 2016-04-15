<?php
function get_nick($id = '')
{
  $ci = & get_instance();
  if($id == ''){return false;}
  return @$ci->db->query('SELECT nickname FROM `user` WHERE id ='.$id)->result_array()[0]['nickname'];
}
