//<![CDATA[
$('.select-all')[0].onclick = function(){

  var box = $('.checkbox');
  for(var i = 0,l = box.length;i<l;i++)
  {
    box[i].checked = 'checked';
  }
}
//]]>
