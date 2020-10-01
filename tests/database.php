<!-- <?php
require '../blackjack.php';
use PHPUnit\Framework\TestCase;
class BlackJackTest extends TestCase
{
    public function testSuccessWinner(){
        $expected = 'PLAYER 1!';
        $input1 = 5;
        $input2 = 1;
        $case =  winner($input1, $input2);
        $this->assertEquals($expected, $case);
    }
      public function testFailureWinner(){
        $expected = 'PLAYER 2!';
        $input1 = 5;
        $input2 = 1;
        $case =  winner($input1, $input2);
        $this->assertEquals($expected, $case);
    }
    public function testMalformedWinner(){
        $input1 = 'hello';
        $input2 = 'bye';
        $this->expectException(TypeError::class);
        $case = winner($input, $input2);
    }
}

?> -->