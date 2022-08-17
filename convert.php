function get_digit_0_Paddings($d){
    if( $d < 10 && $d > 0 ){
      // str_pad($d,2,"0",STR_PAD_LEFT);
      $d = preg_replace('~(?<!\d)\d(?!\d)~', '0$0', $d);
    }
    return $d;
  }
