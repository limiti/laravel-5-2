<!-- Latest compiled and minified CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
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
<div id="js_inner">
    <h1>JS</h1>
    <table></table>
</div>


<script>




$.ajax({
    url: 'http://laravel-5-2.loc/cards',
    success: function(responce){

        $.each(responce,function(iterator,element){


            $('#js_inner').append('<ul><div  class="a'+iterator+'" ><h1>'+ element.title +'</h1></div></ul>');

            inner(element.notes,iterator);

           // console.log(responce);

        });

    }
});


    function inner(elems , iterator){

        $.each(elems,function(i,e){
            $('.a'+iterator).append('<li class="b" style="  background: #09F9C2;">'+ e.body + ':card_id - '+ e.id +'</li>');
        });

    }
</script>