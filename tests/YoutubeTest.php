<?php 
    require "./src/Youtube.php";

    use PHPUnit\Framework\TestCase;
    
    class YoutubeTest extends TestCase
    {
        private $youTube;

        protected function setUp()
        {
            $this->youTube = new YouTube();
        }
        
        public function testCase1()
        {
            $url = 'http://www.youtube.com/watch?v=_RRnyChxijA&feature=related&';
            $keyCode = $this->youTube->getKeyCode($url);
            $this->assertEquals('_RRnyChxijA', $keyCode);
        }
        
        public function testCase2()
        {
            $url = 'http://www.youtube.com/watch?v=-WolCnOLPg8&feature=related';
            $keyCode = $this->youTube->getKeyCode($url);
            $this->assertEquals('-WolCnOLPg8',$keyCode);
        }
        public function testCase3(){
            $url = 'http://www.youtube.com/watch?d=-WolCnOLPg8&feature=related';
            $keyCode = $this->youTube->getKeyCode($url);
            $this->assertEquals('-WolCnOLPg8',$keyCode); 
        }
        public function testCase4(){
            $url = 'http://www.youtube.com/watch?vWolCnOLPg8&feature=related';
            $keyCode = $this->youTube->getKeyCode($url);
            $this->assertEquals('-WolCnOLPg8',$keyCode); 
        }
        public function testCase5(){
            $url = 'http://www.youtube.com/watch?WolCnOLPg8v=_&feature=related';
            $keyCode = $this->youTube->getKeyCode($url);
            $this->assertEquals('-WolCnOLPg8',$keyCode); 
        }
    }
        
?>