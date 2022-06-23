<?php 
session_start();
if(!$_SESSION['user']){
    header('Location:'.$_SERVER['HTTP_REFERER']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Шрифт Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Пакет JavaScript с Popper и CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image" href="img/favicon.svg" />
    <title>Задание 1</title>


    <style>
        .popup {
    display:none;
    background: #fff;
    width: 100%;
    width: 700px;
    height: 300px;
    border: 1px solid rgba(231, 241, 255, 0.9);
    border-radius: .25rem;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
    position: absolute;
    top: 20%;
    left:30%;;
    z-index: 99999;

}
.popup #close{
    margin-left: 98%;
    cursor: pointer;

}

.popup h3 {
    text-align: center;
}
.popup p{
    text-align: center;
}
#next-trainer{
    text-decoration: none;
    color: white;
   background: #11bf3f;
    display: inline-block;
margin-left: 43%;;
    padding: 10px 20px;
    border: 1px solid #11bf3f;
    border-radius: .25rem;
    text-align: center;
    transition: all 0.3s;
    
}
#next-trainer:hover{
    background:none;
    color: #11bf3f;
    border-color: #11bf3f;
}

.active {
    display: block;
}

        .task {
        min-height: 200px;
        background-color: #E0E0E0;
        border-radius: 16px;
        padding: 20px;
        margin-bottom: 15px;
        }
        .codee {
        min-height: 200px;
        background-color: #E0E0E0;
        border-radius: 16px;
        padding: 20px;
        }

        .container {
            display: flex;
        }

        iframe {
            width: 700px;
            height: 800px;
        }

        .code {
            width: 400px;
            height: 800px;
            border: 1px solid rgb(0, 0, 0);

        }

        .block {
            margin: 0 auto;
            width: 100%;
            max-width: 500px;
            height: 500px;
            background: #E0E0E0;
            border-radius: 16px;
            padding: 20px;


        }

        .block div {
            width: 50px;
            height: 50px;
            margin: 5px;
        }
    </style>

</head>

<body>
    <!-- header -->
    <?php
    require_once '../components/header.php';
    require_once '../vendor/connectDB.php';
    ?>
    <!-- / header -->
    <div class="container" style="margin-top: 70px;">
        <div class="row">
            <div class="col-8">
            <div class="task">
                    <h5>Задание:</h5>
                    <p>
                    Используйте подходящий тег заголовков (<code>&lt;h1&gt;</code>-<code>&lt;h6&gt;</code>), теги <code>&lt;p&gt;</code>, <code>&lt;br&gt;</code>, <code>&lt;i&gt;</code>, <code>&lt;b&gt;</code>. <br> 
                    </p>
                    <ul>
                        <li> <code>&lt;h1&gt;</code>-<code>&lt;h6&gt;</code>: представляют собой 6 уровней заголовков секций. <code>&lth1&gt;</code> это наибольший заголовок и <code>&lth6&gt;</code> - наименьший.
                        <li> <code>&lt;b&gt;</code>: Устанавливает жирное начертание шрифта.
                        <li> <code>&lt;p&gt;</code>: Определяет текстовый абзац.
                        <li> <code>&lt;i&gt;</code>: Устанавливает курсивное начертание шрифта.
                        <li> <code>&lt;br&gt;</code>: Устанавливает перевод строки в том месте, где этот тег находится.
                    </ul>



                </div>
                <div class="codee">
                    <code>
                    &lt;div class="стих"&gt<br>
                    &lt;h4> Стих &lt;/h4&gt<br>
                    <input class="param1" type="text"> <br>
                    ⠀⠀Я помню чудное мгновенье:&lt;br&gt;<br>
                    ⠀⠀Передо мной явилась ты,&lt;br&gt;<br>
                    ⠀⠀Как мимолётное виденье,&lt;br&gt;<br>
                    ⠀⠀Как гений чистой красоты.&lt;br&gt;<br>
                    
                    ⠀⠀ &lt;i>&lt;b>Пушкин, Александр Сергеевич.&lt;i&gt&lt;b&gt</b&gt;&lt;br&gt;<br>
                    &lt;/p&gt <br>
                    <input class="param2" type="text">
                        
                    </code>
                </div>
            </div>
            <div class="col-4">
                <div class="block">
                   <h4>Стих</h4>
                  <p> Я помню чудное мгновенье:<br>
                    Передо мной явилась ты,<br>
                    Как мимолётное виденье,<br>
                    Как гений чистой красоты.<br>
                    <b><i>Пушкин, Александр Сергеевич</i></b>
                </p>
                </div>
            </div>
        </div>
    </div>

    <div class="popup">
    <span id="close">X</span>
    <div>
            <h3>Задание выполнено! Поздравляем!</h3>
            <p>Вы можете перейти к выполнению следующего задания.</p>
            <a href="../corses.php" id="next-trainer">Дальше</a>
        </div>
    </div>
    <script src="../jquery-3.6.0.min.js"></script>
    <script>
        var score = 0;
        $('.param1').on('input', function () {
            if ($('.param1').val() == '<p>') {
                score++;
                console.log(score)
                ckeck();
            }
        })
        $('.param2').on('input', function () {
            if ($('.param2').val() == '</div>') {
                score++;
                console.log(score)
                ckeck();

            }
        })
        function ckeck() {
            if (score == 2) {
                $('.popup').fadeIn('slow');
                
            }
        }
        function ckeck() {
            if (score == 2) {
                
                $.ajax({
                    method:'POST',
                    url:"../vendor/checkResult.php",
                    data:{
                        'id':1
                    },
                    success:function(data){

                    }

                })
                $('.popup').fadeIn('slow');
                
            }
        }

        // POPUP
        $('#close').on('click',function(){
            $('.popup').fadeOut('slow');
        })
        $('#next-trainer').on('click',function(){

        });
        

    </script>
</body>

</html>