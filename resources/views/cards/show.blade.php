<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<div class="container">
<h1>One Card</h1>

<span>{{ $card->title }}</span>

@foreach($card->notes as $card)
   <div> {{$card->body}}</div>
    <hr/>



@endforeach

<h3>Add NEW: {{$card}}</h3>

<form method="POST" action="/cards/{{$card->card_id}}/notes">
    <textarea name="body" id="body-input" cols="30" rows="10"></textarea>
    <div>
        <button type="submit">Add New Card</button>
    </div>
</form>


<?php

    function postDate($post_date){

        $curent_Y = date('Y');//year
        $curent_M = date('m');//mount
        $curent_D = date('d');//day
        $curent_H = date('h');// hour
        $curent_I = date('i');//min
        $curent_S = date('s');//sec




        $years_mounts_days = explode(' ',$post_date);
        $year_mount_day[] = explode('-', $years_mounts_days[0]);
        $year_mount_day[] = explode(':',$years_mounts_days[1]);
        var_dump($year_mount_day);




        if($year_mount_day[0][2] == $curent_D){
            echo "<div class=''>Сегодня в ". $year_mount_day[1][0]."</div>";
        }
        elseif($curent_D - $year_mount_day[0][2] == 1){
            echo "<div class=''>Вчера</div>";
        }


        if($curent_D - $year_mount_day[0][2] > 1){
            $days_ago = $curent_D - $year_mount_day[2];
            echo "<div class=''>".$days_ago ."Дней Назад</div>";
        }




        return $post_date;

    }
?>

</div>