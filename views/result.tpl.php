<!DOCTYPE html>
<meta http-equiv="content-type" charset="utf-8">
<html>
<?php include("header.inc.php"); ?>

<body>
    <div class="container">
        <div class="center">
            <h2>結果</h2>
            <p class="show-result"><?= $_SESSION['questionNum'] ?>問中<?= $_SESSION['correct'] ?>問正解しました！</p>
            <a href="index.php" class="btn big-btn">タイトルに戻る</a>
            <h3>間違えた問題</h3>
            <ul class="incorrectQuestions">
                <?php
                foreach($_SESSION['incorrectKeys'] as $key){
                    echo "<a href='review.php?reviewNumber=".$key."'>".$questionList[$key]["when"]."</a><br>";
                    
                }
                ?>
            </ul>
        </div>
    </div>
</body>

</html>