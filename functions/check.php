<?php

class Functions {

    public function checkErrorMessage($value1, $value2) {

        if(!empty($value1) && !empty($value2)) {

            echo $value1;
            unset($value1);
        } elseif (!empty($value1) && empty($value2)) {

            echo $value1;
            unset($value1);
        }

    }

}