<?php
function get_nick($ci,$id = '')
{
  if($id == ''){return false;}
  return @$ci->db->query('SELECT nickname FROM `user` WHERE id ='.$id)->result_array()[0]['nickname'];
}
