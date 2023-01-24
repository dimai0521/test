<?php
    function threeYears() {
      // 始めの日時を取得
      $start = new DateTime('2023-01-01 00:00');
  
      // 終わりの日時を取得
      $end   = new DateTimeImmutable('2025-12-31 23:59'); 

      // １２月３０〜１月３日までに日曜日があるとtrueとfalseを入れ替える
      $switch = false;

      for($i = $start; $i < $end; $i->modify('+1 hour')) {
        // 曜日を配列に格納
          $week  = ['日', '月', '火', '水', '木', '金', '土'];
          $date  = $i->format('Ymd(');
          $youbi = $i->format($week[$start->format('w')]);
          $hour  = $i->format(')h A ');
          $message = 'Aillz年末休暇';
          if($i->format('h') === '12') {
            $hour = $i->format(')00 A ');
          }
         //　土曜日

      if($i->format('w') === '6') {
            if($i->format('md') >= '1230' && $i->format('H') === '00') {
              echo '<p>' . $date . '<span class="sat">' . $youbi . '</span>' . $hour . '<span class="message">' . $message . '</span></p>';
              $switch = true;
            } elseif($i->format('md') <= '0103' && $i->format('H') === '00') {
                echo '<p>' . $date . '<span class="sat>' . $youbi . '</span>' . $hour . '<span class="message">' . $message . '</span></p>';
                $switch = true;
            } elseif($switch === true) {
                if($i->format('md') === '0104' && $i->format('H') === '00') {
                  echo '<p>' . $date . '<span class="sat">' . $youbi . '</span>' . $hour . '<span class="message">' . $message . '</span></p>';
                  $switch = false;
                } else {
                  echo '<p>' . $date . '<span class="sat">' . $youbi . '</span>' . $hour . '</p>';
                }
            } else {
              echo '<p>' . $date . '<span class="sat">' . $youbi . '</span>' . $hour . '</p>';
            }
      } elseif($i->format('w') === '0') {
         //  日曜日
            if($i->format('md') >= '1230' && $i->format('H') === '00') {
              echo '<p class="sun">' . $date . '<span>' . $youbi . '</span>' . $hour . '<span class="message">' . $message . '</span></p>';
              $switch = true;
            } elseif($i->format('md') <= '0103' && $i->format('H') === '00') {
              echo '<p class="sun">' . $date . '<span>' . $youbi . '</span>' . $hour . '<span class="message">' . $message . '</span></p>';
              $switch = true;
            } elseif($switch === true) {
                if($i->format('md') === '0104' && $i->format('H') === '00') {
                  echo '<p class="sun">' . $date . '<span>' . $youbi . '</span>' . $hour . '<span class="message">' . $message . '</span></p>';
                  $switch = false;
                } else {
                  echo '<p class="sun">' . $date . '<span>' . $youbi . '</span>' . $hour . '</p>';
                }
            } else {
                echo '<p class="sun">' . $date . '<span>' . $youbi . '</span>' . $hour . '</p>';
            }
      } else {
         //  平日
            if($i->format('md') >= '1230' && $i->format('H') == '00') {
            echo '<p>' . $date . '<span>' . $youbi . '</span>' . $hour . '<span class="message">' . $message . '</span></p>';
          } elseif($i->format('md') <= '0103' && $i->format('H') === '00') {
              echo '<p>' . $date . '<span>' . $youbi . '</span>' . $hour . '<span class="message">' . $message . '</span></p>';
            } elseif($switch === true) {
            if($i->format('md') === '0104' && $i->format('H') === '00') {
              echo '<p>' . $date . '<span>' . $youbi . '</span>' . $hour . '<span class="message">' . $message . '</span></p>';
              $switch = false;
            } else {
              echo '<p>' . $date . '<span>' . $youbi . '</span>' . $hour . '</p>';
            }
          } else {
            echo '<p>' . $date . '<span>' . $youbi . '</span>' . $hour . '</p>';
          }
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fizzbuzz</title>
    <style>
      p  {margin: 0px;}
      .sat {color: blue;}
      .sun {color: red;}
      .message {color: pink;
                font-weight: bold;}
    </style>
</head>
<body>
    <?php echo threeYears(); ?>
</body>
</html>

  
       
      
 
  