<?php
    
    Class Youtube{
        
        public function getKeyCode($url)
        {
            $pattern  = '/v=(\w+)/';
            $matches  = array();
            preg_match($pattern, $url, $matches);
            if( isset($matches[1]) )
            {
                return $matches[1];
            }
            return false;
        }
    }
?>

