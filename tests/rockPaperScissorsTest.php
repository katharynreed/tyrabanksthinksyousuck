<?php

    require_once "src/rockPaperScissors.php";

    class RockPaperScissors_Test extends PHPUnit_Framework_TestCase
    {
        // function test_play_game_rock() {
        //     $input1 = "scissors";
        //     $input2 = "rock";
        //     $test_rockPaperScissors = new RockPaperScissors;
        //
        // $result = $test_rockPaperScissors->play_game($input1, $input2);
        //
        // $this->assertEquals($result, "Rock wins!");
        // }
        //
        // function test_play_game_scissors() {
        //     $input1 = "paper";
        //     $input2 = "scissors";
        //     $test_rockPaperScissors = new RockPaperScissors;
        //
        //     $result = $test_rockPaperScissors->play_game($input1, $input2);
        //     $this->assertEquals($result, "Scissors wins!");
        // }
        //
        // function test_play_game_paper() {
        //     $input1 = "paper";
        //     $input2 = "rock";
        //     $test_rockPaperScissors = new RockPaperScissors;
        //
        //     $result = $test_rockPaperScissors->play_game($input1, $input2);
        //     $this->assertEquals($result, "Paper wins, weirdly.");
        // }

        function test_str_replace_json() {
            $search = 'cat';
            $replace = 'dog';
            $subject = 'I am walking my cat to the cathedral.';
            $test_rockPaperScissors = new RockPaperScissors;

            $result = $test_rockPaperScissors->str_replace_json($search, $replace, $subject);
            $this->assertEquals($result, "I am walking my dog to the doghedral.");
        }
    }
?>
