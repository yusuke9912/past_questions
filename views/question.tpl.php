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
            <li>1.　<?= $question["choice1"] ?></li>
            <li>2.　<?= $question["choice2"] ?></li>
            <li>3.　<?= $question["choice3"] ?></li>
            <li>4.　<?= $question["choice4"] ?></li>
        </ul>

        <form class="fixed-btn" action="answer.php" method="post">
            <div class="btn-list">
                <button type="submit" class="btn" name="selectNumber" value="1">1</button>
                <button type="submit" class="btn" name="selectNumber" value="2">2</button>
                <button type="submit" class="btn" name="selectNumber" value="3">3</button>
                <button type="submit" class="btn" name="selectNumber" value="4">4</button>
            </div>
        </form>

    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>