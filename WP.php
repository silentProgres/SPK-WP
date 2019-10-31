<?php

class WP
{

    function fixedBobot($bobot)
    {
        $jmlBobot = array();
        $bobotFix = array();
        foreach ($bobot as $fix) {
            array_push($jmlBobot, $fix[1]);
        }
        $jmlBobot = array_sum($jmlBobot);
        foreach ($bobot as $b) {
            array_push($bobotFix, $b[1] / $jmlBobot);
        }
        return $bobotFix;
    }

    function pemVectoran($data, $bobot)
    {
        $hasilVector = array();
        $hasil2 = array();
        $hasil = array();
        //var_dump($bobot);
        for ($i = 0; $i < count($data); $i++) {
            //array_push($hasilVector, $data[$i][$j]);
            $hasilVector[$i][0] = $data[$i][0];
            $hasilVector[$i][1] = substr(pow($data[$i][1], $bobot[0]), 0, 5);
            $hasilVector[$i][2] = substr(pow($data[$i][2], $bobot[1]), 0, 5);
            $hasilVector[$i][3] = substr(pow($data[$i][3], $bobot[2]), 0, 5);
            $hasilVector[$i][4] = substr(pow($data[$i][4], $bobot[3]), 0, 5);
            $hasilVector[$i][5] = substr(pow($data[$i][5], $bobot[4]), 0, 5);
        }
        //echo gettype($hasilVector[])
        for ($i = 0; $i < count($data); $i++) {
            $hasil[$i] = array($hasilVector[$i][0] => $hasilVector[$i][1] * $hasilVector[$i][2] * $hasilVector[$i][3] * $hasilVector[$i][4] * $hasilVector[$i][5]);
            // $hasil2[$i] = $hasilVector[$i][1] * $hasilVector[$i][2] * $hasilVector[$i][3] * $hasilVector[$i][4] * $hasilVector[$i][5];
        }


        //var_dump(sort($hasil[1]));
        return $hasil;
    }

    function peRankingan($data)
    {
        $dummy = array();
        for ($i = 0; $i < count($data); $i++) {
            array_push($dummy, $data[$i]);
        }
        return $dummy;
    }
}
