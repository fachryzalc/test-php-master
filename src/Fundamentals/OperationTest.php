<?php

namespace Fundamentals;

class OperationTest
{
    /**
     * ********************************************************************************************************
     * Buatlah sebuah program yang mencetak angka dari 1 sampai dengan 50, dengan ketentuan sebagai berikut:
     * 1. Bila angka merupakan kelipatan tiga akan mencetak kata “Foo” (tanpa tanda petik dua)
     * 2. Bila angka merupakan kelipatan lima akan mencetak “Bar”
     * 3. Bila angka merupakan kelipatan tiga dan lima kedua-duanya, maka akan mencetak “FooBar”.
     * ********************************************************************************************************
     */

    /**
     * Run your answer here
     *
     * @return array
     */
    public function run(): array
    {
        $angka = [];
        for ($i = 1; $i <= 50; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo $i . " Foobar <br>";
            } elseif ($i % 3 == 0) {
                echo $i . " Foo <br>";
            } elseif ($i % 5 == 0) {
                echo $i . " Bar <br>";
            } else {
                echo $i . "<br>";
            }
        }

        return $angka;
    }
}
