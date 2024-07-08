<?php
        function total($arr,$n)
        {
            $total=0;
            for($i=0;$i<$n;$i++)
            $total += $arr[$i];
            return $total;
        }
        $arr=array(15,25,35,45,10);
        $n=sizeof($arr);
        echo "total of given array=",total($arr , $n);


?>  