<?php

class testController
{
  
  function test(){

    V::assign( array( 'title'=>'头文字' ) );
    V::display( 'test.html' );
  }

}
