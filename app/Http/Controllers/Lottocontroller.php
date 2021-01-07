<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lottocontroller extends Controller
{
    function lotto(){
        $lucky_number = rand(1, 49);
        $lottery[] = array();
        for($i=0;$i<6;$i++){
            /* 第一種方式 */
            $number = rand(1,49);  // 宣告一個暫時的變數來存放產生的亂數
            if($number == $lucky_number){
                $i--;
                continue;
            }
            /* 解決數字重複產生的錯誤 */
            if(in_array($number, $lottery)){  // 如果判斷式成立，代表數字重複
                $i--;  // 重新再產生一個數字，計數減一
            }else{  // 如果數字沒有重複
                $lottery[$i] = $number;  // 把產生的數字存放到 lottery 陣列
            }     
        }
        return view('lotto', compact('lucky_number', 'lottery'));
    }
    


}
