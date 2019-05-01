<?php
header('Content-type: text/plain');
class Prime {
 private $len = 0;
 private $primenos = array();	
 public function get_primenos($n) 
    {
		
		$ct=0;  
		$m=0;  
		$ii=1;  
		$j=1;  
		$i=array();
			while($m<$n)  
			{  
				$j=1;  
				$ct=0;  
				while($j<=$ii)  
				{  
				if($ii%$j==0)  
					$ct++;  
					$j++;   
				}  
				if($ct == 2)  
				{  
				$i[]=$ii;  
				$m++;  
				}  
				$ii++;  
			}
			return $i;//list the prime nos
					
    }
	
	 public function __construct($n) 
    {
        
        $this->len = $n + 1;
        $this->primenos = $this->get_primenos($n);
		
    }


    public function get_value($i, $j)
    {
        if ($j < $i) {
            return $this->get_value($j, $i);
        } else {
            if ($i == 0) {
                return $j == 0 ? null : $this->primenos[$j - 1];
            } else {
                return $this->primenos[$i - 1] * $this->primenos[$j - 1];
				
            }
        }
    }


    public function display()
    {
        for($i = 0; $i < $this->len; $i++) {      
            print("\n");
            for($j = 0; $j < $this->len; $j++) {
                
                if ($j == 0 && $i == 0) {
                    print(sprintf("%' " . 6 . "s", " "));
                } else {
                    print(sprintf("%' " . 6 . "d", $this->get_value($i, $j)));
                }
            }
          print("\n");
        }
    }	
}

$Noofprimenos = 10;//Enter the  total no of prime nos to print
if (is_numeric($Noofprimenos)) {
    
        $multiprime = new Prime($Noofprimenos);
        $multiprime->display();
     
}