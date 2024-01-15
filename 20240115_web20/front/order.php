<h3 class="ct">線上訂票</h3>
<div class="order">
    <div>
        <lable>電影:</lable>
        <select name="movie" id="movie"></select>
    </div>
    <div>
        <lable>日期:</lable>
        <select name="date" id="date"></select>
    </div>
    <div>
        <lable>場次:</lable>
        <select name="session" id="session"></select>
    </div>
    <div>
      <button>確定</button>
      <button>重置</button>
    </div>
</div>
<script>
getMovies();

function getMovies(){
    $.get("./api/get_movies.php",(movies)=>{
            $("#movie").html(movies);
    })
}
function getDates(){
    $.get("./api/get_dates.php",(dates)=>{
            $("#date").html(dates);
    })
}
function getSessions(){
    $.get("./api/get_sessions.php",(sessions)=>{
            $("#session").html(sessions);
    })
}

</script>