<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/custom.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>
            $(function() {
                $(document).on("click", "a", function() {
                     var target = $("#main_frame", window.parent.document);
                     target.attr('src',$(this).attr('data-url'))
               });
            });
        </script>
    </head>
    <body>
        <nav class="navbar navbar-static-top navbar-dark bg-indigo ">
            <div class="container" style="display: block;">
                <header class="d-flex flex-wrap py-2">
                    <a class="d-flex align-items-center me-md-auto text-white navbar-brand text-decoration-none" data-url="main.html">K-League TM</a>
                
                    <ul class="nav justify-content-around">
                        <li class="nav-item px-2"><a data-url="team.php" class="btn btn-outline-light" aria-current="page">팀</a></li>
                        <li class="nav-item px-2"><a data-url="notice.html" class="btn btn-outline-light">팀 공지사항</a></li>
                        <li class="nav-item px-2"><a data-url="message.html" class="btn btn-outline-light">메세지</a></li>
                        <li class="nav-item px-2"><a data-url="practice_match.html" class="btn btn-outline-light">연습경기 일정</a></li>
                        <li class="nav-item px-2"><a data-url="mypage.html" class="btn btn-outline-light">MY PAGE</a></li>
                        <li class="nav-item px-2"><button class="btn btn-outline-light" type="button" onclick = "window.open('./login.php')">LOGOUT</button></li>
                    </ul>
                </header>
            </div>
        </nav>
    </body>
</html>