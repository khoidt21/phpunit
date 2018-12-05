<?php
    
    Class Youtube{
        
        public function getKeyCode($url)
        {
            // kiem tra link url dung dinh dang regex
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

