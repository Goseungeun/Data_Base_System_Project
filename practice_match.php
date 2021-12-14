<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
    <meta charset='utf-8' />
    <link href='css/main.css' rel='stylesheet' />
    <script src='css/main.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialDate: '2021-12-01',
                editable: true,
                selectable: true,
                businessHours: true,
                dayMaxEvents: true, // allow "more" link when too many events
                events: [{
                    title: 'B팀과 연습경기',
                    start: '2021-12-01'
                }, {
                    title: '혹한기훈련',
                    start: '2021-12-07',
                    end: '2021-12-10'
                }, {
                    title: '아지즈 교수님 생각하기',
                    start: '2021-12-16',
                    end: '2021-12-1'
                }]
            });

            calendar.render();
        });
    </script>
    <style>
        body {
            margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }
        
        #calendar {
            max-width: 1100px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="board_wrap">
        <div class="board_title">
            <strong>연습경기 일정 잡기</strong>
            <p>연습경기를 빠르고 직관적으로 잡을수있는 페이지</p>
        </div>
        <div class="board_list_wrap">
            <div class="board_list">
                <div class="top">
                    <div class="num">번호</div>
                    <div class="title">장소</div>
                    <div class="writer">글쓴이</div>
                    <div class="date">날자</div>
                    <div class="count">수락</div>
                </div>
                <div>
                    <div class="num">5</div>
                    <div class="title">장소</div>
                    <div class="writer">김이름</div>
                    <div class="date">2021.1.15</div>
                    <div class="count"><a href="#">수락</a></div>
                </div>
                <div>
                    <div class="num">4</div>
                    <div class="title">장소</div>
                    <div class="writer">김이름</div>
                    <div class="date">2021.1.15</div>
                    <div class="count"><a href="#">수락</a></div>
                </div>
                <div>
                    <div class="num">3</div>
                    <div class="title">장소</div>
                    <div class="writer">김이름</div>
                    <div class="date">2021.1.15</div>
                    <div class="count"><a href="#">수락</a></div>
                </div>
                <div>
                    <div class="num">2</div>
                    <div class="title">장소</div>
                    <div class="writer">김이름</div>
                    <div class="date">2021.1.15</div>
                    <div class="count"><a href="#">수락</a></div>
                </div>
                <div>
                    <div class="num">1</div>
                    <div class="title">장소</div>
                    <div class="writer">김이름</div>
                    <div class="date">2021.1.15</div>
                    <div class="count"><a href="#">수락</a></div>
                </div>
            </div>
            <div class="board_page">
                <a href="#" class="bt first">
                    <<</a>
                        <a href="#" class="bt prev">
                            <</a>
                                <a href="#" class="num on">1</a>
                                <a href="#" class="num">2</a>
                                <a href="#" class="num">3</a>
                                <a href="#" class="num">4</a>
                                <a href="#" class="num">5</a>
                                <a href="#" class="bt next">></a>
                                <a href="#" class="bt last">>></a>
            </div>
            <div class="bt_wrap">
                <a href="p.write.html" class="on">연습경기 잡기</a>
                <!--<a href="#">수정</a>-->
            </div>
        </div>
    </div>
</body>

</html>