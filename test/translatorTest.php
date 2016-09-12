<?php

    require_once "src/translator.php";

    class translatorTest extends PHPUnit_Framework_TestCase
    {
        function test_e_to_3()
        {
            //Arrange
            $test_Translator = new Translator;
            $input_words = "three";
            //Act
            $result = $test_Translator->translate($input_words);
            //Assert
            $this->assertEquals("thr33", $result);
        }
        function test_o_to_0()
        {
            //Arrange
            $test_Translator = new Translator;
            $input_words = "beowulf";
            //Act
            $result = $test_Translator->translate($input_words);
            //Assert
            $this->assertEquals("b30wulf", $result);
        }

        function test_I_to_1()
        {
            //Arrange
            $test_Translator = new Translator;
            $input_words = "I am beowulf!";
            //Act
            $result = $test_Translator->translate($input_words);
            //Assert
            $this->assertEquals("1 am b30wulf!", $result);
        }

        function test_s_to_z()
        {
            //Arrange
            $test_Translator = new Translator;
            $input_words = "Super elastic squid";
            //Act
            $result = $test_Translator->translate($input_words);
            //Assert
            $this->assertEquals("Sup3r 3laztic squid", $result);
        }










    }





 ?>
