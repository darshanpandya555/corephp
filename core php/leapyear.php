<?php
   function check($year){
    if($year>=1900 && $year<2017)
     {   
     if ($year % 400 == 0)
         print("It is a leap year");
      else if ($year % 100 == 0)
         print("It is not a leap year");
      else if ($year % 4 == 0)
         print("It is a leap year");
      else
         print("It is not a leap year");
   }
   else
   {
    print("please enter year 1900 and 2016 between");
   }
}
   $year = 1904;
   check($year);
?>