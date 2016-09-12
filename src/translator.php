<?php
    class Translator{
        function translate($input_words)
        {
            $input_array = array();
            $input_array = str_split($input_words);
            $words_array = explode(" ", $input_words);
            $output_leetspeak = array();

            foreach ($words_array as $word)
            {
                $counter = 0;
                $letters_array = str_split($word);
                foreach ($letters_array as $letter)
                {
                    if($counter !== 0 && ($letter === "s" || $letter === "S"))
                    {
                        $letter = "z";
                    }
                    if($letter === "e" || $letter === "E")
                    {
                        $letter = "3";
                    }
                    if($letter === "o" || $letter === "O")
                    {
                        $letter = "0";
                    }
                    if($letter === "I")
                    {
                        $letter = "1";
                    }
                    array_push($output_leetspeak, $letter);
                    $counter++;
                }
                array_push($output_leetspeak, " ");
            }
            $result = implode("", $output_leetspeak);
            return chop($result);
        }
    }
?>
