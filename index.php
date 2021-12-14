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
</head>

<body>
    <nav class="navbar navbar-static-top navbar-dark bg-indigo ">
        <div class="container" style="display: block;">
            <header class="d-flex flex-wrap py-2">
                <a class="d-flex align-items-center me-md-auto text-white navbar-brand text-decoration-none" href="index.php">K-League TM</a>
                <ul class="nav justify-content-around">
                    <li class="nav-item px-2"><a href="./team.php" class="btn btn-outline-light" aria-current="page">팀</a></li>
                    <li class="nav-item px-2"><a href="./notice.php" class="btn btn-outline-light">팀 공지사항</a></li>
                    <li class="nav-item px-2"><a href="./message.php" class="btn btn-outline-light">메세지</a></li>
                    <li class="nav-item px-2"><a href="./practice_match.php" class="btn btn-outline-light">연습경기 일정</a></li>
                    <li class="nav-item px-2"><a href="./mypage.php" class="btn btn-outline-light">MY PAGE</a></li>
                    <li class="nav-item px-2"><button class="btn btn-outline-light" type="button" onclick = "location.href = 'logout.php'">LOGOUT</button></li>
                </ul>
            </header>
        </div>
    </nav>

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <main class="px-3 mb-auto mt-auto">

            <div class="p-4 p-md-5 mb-4 text-white rounded bg-indigo">
                <div class="col-md-6 px-0">
                  <h1 class="display-4 fst-italic">K-League TM</h1>
                  <p class="lead my-3">선수, 감독, 팀관의 관계를 비대면으로 하게해주는 프로그램</p>
                </div>
            </div>
            
                
            <div class="container px-4 py-5 text-center" id="featured-3">
                <h2 class="pb-2 border-bottom"><b>K-League TM의 주요 기능</b></h2>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                  <div class="feature col">
                    <div class="feature-icon bg-indigo bg-gradient">
                      <i class="fas fa-running fa-10x m-5" style="color: white; "></i>
                    </div>
                    <h2><br>Player</h2>
                    <p>팀에 지원기능, 개인정보 수정기능, 연습경기 일정확인 기능등이 있습니다.</p>
                  </div>
                  <div class="feature col">
                    <div class="feature-icon bg-indigo bg-gradient">
                        <i class="fas fa-user-tie fa-10x m-5" style="color: white; "></i>
                    </div>
                    <h2><br>Coach</h2>
                    <p>팀선수 관리기능, 팀정보 관리기능, 연습경기 잡는기능 등이 있습니다.</p>
                  </div>
                  <div class="feature col">
                    <div class="feature-icon bg-indigo bg-gradient">
                        <i class="fas fa-users  fa-10x m-5" style="color: white; "></i>
                    </div>
                    <h2><br>Team</h2>
                    <p>팀 공지사항, 팀랭킹등을 보여줄 수 있습니다.</p>
                  </div>
                </div>
              </div>
        </main>
    </div>
</body>

</html>