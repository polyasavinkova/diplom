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
    <title>Задание 5</title>


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
                    <p>Используя свойство justify-content и flex-direction  и переместите крадраты вертикально вниз</p>
                    <ul>
                        <li> justify-content  внияет на вертикальное выравнивание,
                        <li> align-item на вертикальное выравнивание
                    </ul>



                </div>
                <div class="codee">
                    <code>
                        # square {<br>
                        display: flex;<br>
                        flex-direction:<input class="param1" type="text">; <br> 
                        justify-content:<input class="param2" type="text">; <br> 
                        }<br>
                        
                        
                        
                    </code>
                </div>
            </div>
            <div class="col-4">
                <div class="block">
                    <div style="background: #FF7D7D;"></div>
                    <div style="background: #90FF7D;"></div>
                    <div style="background: #FFDB7D;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup">
    <span id="close">X</span>
    <div>
            <h3>Задание выполнено! Поздравляем!</h3>
            <p>Вы можете перейти к выполнению следующего задания.</p>
            <a href="../tasks/trainer2.php" id="next-trainer">Дальше</a>
        </div>
    </div>
    <script src="../jquery-3.6.0.min.js"></script>
    <script>
        var score = 0;
        $('document').ready(function(){
            $('.block').css('display', 'flex');
        })
        $('.param1').on('input', function () {
            if ($('.param1').val() == 'column') {
                $('.block').css('flex-direction', $('.param1').val());
                score++;
                ckeck();
            }
        })
        $('.param2').on('input', function () {
            if ($('.param2').val() == 'flex-end') {
                $('.block').css('justify-content', $('.param2').val());
                score++;
                ckeck();

            }
        })
        function ckeck() {
            if (score == 2) {
                
                $.ajax({
                    method:'POST',
                    url:"../vendor/checkResult.php",
                    data:{
                        'id':5
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



