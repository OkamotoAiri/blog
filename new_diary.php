<?php
include('_header.php');

// $dataFile = 'message.dat';



if ($_SERVER['REQUEST_METHOD'] == 'POST' && 
    isset($_POST['title']) &&
    isset($_POST['text'])) {

    $title = trim($_POST['title']);
    // $text = $_POST['text'];
    $text = str_replace(array("\r\n","\r","\n"), "", $_POST['text']);

    if ($title !== '') {
        
        $postedAt = date('Y-m-d H:i');

        $newData = $title . "\t" .  $text  . "\t" . $postedAt . "\n" ;

        $fp = fopen('message.dat', 'a');
        fwrite($fp, $newData);
        fclose($fp);
        
    }
}

?>
    <br><br><br><br><br>
    <h2>投稿完了</h2>
        <div class="back-btn">
            <br><a href="diary.php" class="btn">戻る</a>
        </div>

<?php

include('_footer.php');