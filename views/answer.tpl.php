<!DOCTYPE html>
<html>
<?php include("header.inc.php"); ?>

<body>
    <div class="container">
        <p class="number">問<?= $_SESSION['count'] ?></p>
        <h2><?= $question["question"] ?></h2>
        <p class="when">
        <?php 
            if($_SESSION['qualification'] == "fe-siken"){
                echo "<span>基本情報技術者試験&nbsp;</span>";
            }else{
                echo "<span>ITパスポート&nbsp;</span>";   
            }
            echo "<span>".$question["when"]."</span>" ;
            ?>
            </p>

        <ul>
            <div class="result-mark <?= $resultMark ?>"></div>
            <li>1.　<?= $question["choice1"] ?></li>
            <li>2.　<?= $question["choice2"] ?></li>
            <li>3.　<?= $question["choice3"] ?></li>
            <li>4.　<?= $question["choice4"] ?></li>
        </ul>
        <div class="check-answer">
            <span>あなたの回答: <?= $selectNumber ?></span>
            <span>正解: <?= $question["answer"] ?></span>
        </div>
        <form class="fixed-btn" action="question.php" method="post">
            <button type="submit" class="btn next-btn">次の問題へ進む</button>
        </form>

    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>