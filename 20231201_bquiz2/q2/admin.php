<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷管理後台</title>
    <link rel="stylesheet" href="../css//bootstrap.css">
</head>

<body>
    <header class="container">
        <h1 class="text-center">問卷管理</h1>
    </header>
    <main class="container">
        <fieldset>
            <legend>新增問卷</legend>
            <form action="add_que.php" method="post">
                <div class="d-flex">
                    <div class="col-3 bg-light p-2">問卷名稱</div>
                    <div class="col-6 p-2">
                        <input type="text" name="subject" id="">
                    </div>
                </div>
                <div class="bg-light">
                    <div class="p-2" id="option">
                        <label for="">選項</label>
                        <input type="text" name="opt[]">
                        <input type="button" value="更多" onclick="more()">
                    </div>
                </div>
                <div>
                    <input type="submit" value="新增">
                    <input type="reset" value="清空">
                </div>
            </form>
        </fieldset>
    </main>
    <footer>
        <div id="savedQuestionnaire"></div>
    </footer>
    <script src="../js//jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script>
        function more() {
            let opt = `   <div class="p-2">
                            <label for="">選項</label>
                            <input type="text" name="opt[]">
                        </div>`
            $("#option").before(opt)
        }

        $(document).ready(function () {
            // 每次載入頁面時檢查 localStorage 中是否有保存的問卷名稱
            displaySavedQuestionnaire();
        });

        $('form').submit(function () {
            // 儲存問卷名稱到 localStorage
            let subject = $('input[name="subject"]').val();
            saveQuestionnaire(subject);
        });

        function saveQuestionnaire(subject) {
            let savedQuestionnaire = localStorage.getItem('savedQuestionnaire');
            if (!savedQuestionnaire) {
                savedQuestionnaire = [];
            } else {
                savedQuestionnaire = JSON.parse(savedQuestionnaire);
            }

            savedQuestionnaire.push(subject);
            localStorage.setItem('savedQuestionnaire', JSON.stringify(savedQuestionnaire));

            displaySavedQuestionnaire();
        }

        function displaySavedQuestionnaire() {
            let savedQuestionnaire = localStorage.getItem('savedQuestionnaire');
            if (savedQuestionnaire) {
                savedQuestionnaire = JSON.parse(savedQuestionnaire);
                let savedQuestionnaireHtml = '<h3>曾經新增過的問卷名稱：</h3><ul>';
                savedQuestionnaire.forEach(function (subject) {
                    savedQuestionnaireHtml += '<li>' + subject + '</li>';
                });
                savedQuestionnaireHtml += '</ul>';
                $('#savedQuestionnaire').html(savedQuestionnaireHtml);
            }
        }
    </script>
</body>

</html>
