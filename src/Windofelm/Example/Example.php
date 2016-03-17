<?php


namespace Windofelm\Example;

class Example{

    public function title($text){

        return trim(
            mb_convert_case(
                str_replace(
                    [' I',' ı', ' İ', ' i'],
                    [' I',' I',' İ',' İ'],
                    $text
                ),
                MB_CASE_TITLE,
                "UTF-8"
            )
        );
    }
}