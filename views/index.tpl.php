<!DOCTYPE html>
<html>
<?php include("header.inc.php"); ?>

<body>
    <div class="container">
        <div class="center">
            <h1>情報処理技術者試験<br>過去問演習アプリ</h1>
            <form action="question.php" method="post">
                <button type="submit" class="btn big-btn">問題を解く</button>
                <table class="select-list">
                    <tr>
                        <td>資格</td>
                        <td>
                            <select name="qualification">
                                <option value="fe-siken">基本情報技術者試験</option>
                                <option value="itpassport">ITパスポート</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>出題時期</td>
                        <td>
                            <select name="year" id="selectYear">
                                <option value="r1aki">令和元年秋</option>
                                <option value="h31haru">平成31年春</option>
                                <!-- <option value="h30aki">平成30年秋</option> -->
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>問題数</td>
                        <td>
                            <select name="questionNum" id="selectNum">
                                <option value="5">5問</option>
                                <option value="10">10問</option>
                                <option value="15">15問</option>
                                <option value="20">20問</option>
                                <option value="25">25問</option>
                                <option value="30">30問</option>
                                <option value="40">40問</option>
                                <option value="50">50問</option>
                                
                            </select>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
