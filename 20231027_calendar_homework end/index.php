<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>萬年曆作業</title>
  <style>
    body {

      background-repeat: no-repeat;
      background-size: cover;
      background-color: aliceblue;
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      transform: scale(0.80);
      /* backdrop-filter: blur(2px); */
   
    }

    .calendar-container {
      position: relative;
      width: 1000px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    table {


      opacity: 5;
      color: black;
      font-weight: bold;
      color: darkblue;

    }


    td {
      width: 300px;
      height: 10vh;

      padding: 10px;
      text-align: center;
      font-size: 25px;
      font-family: 'Sofia', sans-serif;
      /* -webkit-text-stroke: 1px black; */
    }

    tr {
      transition: font-size 0.3s ease;

    }

    tr :hover {
      color: lightcyan;
      background-color: lightblue;
      transform: scale(1.1);
      box-shadow: 5px 5px 10px white(0, 0, 0, 0.3);

      font-size: 22px;
    }

    .nav {
      background-color: #999;
      display: flex;
      opacity: 0.5;
      justify-content: space-around;
      width: 1000px;
      margin: auto;
      font-family: Arial, Helvetica, sans-serif;
    }

    .nav a {
      text-decoration: none;
      padding: 10px;
      font-size: 35px;
      font-family: 'Roboto', sans-serif;
    }

    .left-button, .right-button {
      font-size: 30px;
      color: white;
      transition: font-size 0.3s ease;
    }

    .right-button:hover {
      color: blue;

      transform: scale(1.1);
      box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);

      font-size: 35px;
    }

    .left-button:hover {
      color: blue;

      transform: scale(1.1);
      box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);

      font-size: 35px;
    }

    header {
      font-size: 20px;
      font-family: 'Sofia', sans-serif;
      color: ＃66666;
      padding-bottom: 10px;

    }

    div {
      display: flex;
      justify-content: space-between;
      ;
      align-items: center;
      flex-wrap: wrap;

    }

    #hover-image {
      position: absolute;
      width: 100px;
      /* 调整图像的宽度 */
      height: 150px;
      /* 调整图像的高度 */
      bottom: 20px;
      /* 设置初始位置 */
      left: 90%;
      /* 设置初始位置居中 */
      transform: translateX(-50%);
      /* 水平居中 */
      transition: transform 0.3s ease, bottom 0.3s ease;
      /* 添加平滑过渡效果 */
      cursor: pointer;
      /* 将光标设置为手型 */
    }

    #hover-image:hover {
      transform: translateX(-50%) translateY(-20px);
      /* 鼠标悬停时，图像飞起来 */
    }
    #hover-image2 {
      position: absolute;
      width: 100px;
      /* 调整图像的宽度 */
      height: 200px;
      /* 调整图像的高度 */
      bottom: 150px;
      /* 设置初始位置 */
      left: 100%;
      /* 设置初始位置居中 */
      transform: translateX(-50%);
      /* 水平居中 */
      transition: transform 0.3s ease, bottom 0.3s ease;
      /* 添加平滑过渡效果 */
      cursor: pointer;
      /* 将光标设置为手型 */
    }

    #hover-image2:hover {
      transform: translateX(-50%) translateY(-20px);
      /* 鼠标悬停时，图像飞起来 */
    }
   
    /*請在這裹撰寫你的CSS*/
    #year-input {
      background-color: aliceblue;
      font-size: 20px;
      font-family: 'Sofia', sans-serif;
    }

    #month-input {
      font-size: 20px;
      font-family: 'Sofia', sans-serif;
      background-color: aliceblue;
    }

    #go-button {
      font-size: 20px;
      font-family: 'Sofia', sans-serif;
     
    }

    #current-time {
      font-family: 'Sofia', sans-serif;
      font-size: 20px;
      padding-top: 20px;
    }
  </style>


  </style>
</head>

<body>

  <script>
    function updateCurrentTime() {
      const currentTimeElement = document.getElementById('current-time');
      const updateInterval = 1000; // 每1秒更新一次

      function updateTime() {
        const now = new Date();
        const formattedTime = now.toLocaleString('en-US', {
          year: 'numeric',
          month: '2-digit',
          day: '2-digit',
          hour: '2-digit',
          minute: '2-digit',
          second: '2-digit',
        });

        currentTimeElement.textContent = formattedTime;
      }

      updateTime(); // 初始更新

      // 每秒安排更新
      setInterval(updateTime, updateInterval);
    }

    window.addEventListener('load', updateCurrentTime);
  </script>



  <?php
  if (isset($_GET['month']) && isset($_GET['year'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];
  } else {
    $month = date('m');
    $year = date("Y");
  }

  echo "<header>";
  echo "<i class='fa-solid fa-calendar-days'></i>&nbsp;";
  echo date("{$year}年{$month}月");
  echo "</header>";
  


  // Define an array of background images for each month (1-12)
  $backgroundImages = [
    '001.jpg', // January
    '002.jpg', // February
    '003.jpg', // March
    '004.jpg', // April
    '005.png', // May
    '006.jpg', // June
    '007.jpg', // July
    '008.jpg', // August
    '009.jpg', // September
    '010.jpg', // October
    '011.jpg', // November
    '012.png' // December
  ];

  // Create an array of events
  $events = [
    "{$year}-1-20" => '企鵝關注日',
    "{$year}-1-21" => '松鼠感謝日',
    "{$year}-2-02" => '土撥鼠日',
    "{$year}-2-19" => '世界鯨魚日',
    "{$year}-2-22" => '帶狗散步日',
    "{$year}-3-16" => '國際熊貓日',
    "{$year}-3-20" => '世界麻雀日',
    "{$year}-3-23" => '國際小狗日',
    "{$year}-4-02" => '國際雪貂日',
    "{$year}-4-12" => '國際倉鼠節',
    "{$year}-4-14" => '全國海豚日',
    "{$year}-4-27" => '世界貘日',
    "{$year}-5-20" => '世界蜜蜂日',
    "{$year}-5-23" => '世界烏龜日',
    "{$year}-6-21" => '長頸鹿日',
    "{$year}-7-14" => '鯊魚關注日',
    "{$year}-7-16" => '世界蛇日',
    "{$year}-7-29" => '國際老虎日',
    "{$year}-8-08" => '國際貓咪日',
    "{$year}-8-10" => '世界獅子日',
    "{$year}-8-12" => '世界大象日',
    "{$year}-8-26" => '國際狗狗日',
    "{$year}-9-17" => '寵物鳥日',
    "{$year}-10-01" => '國際浣熊日',
    "{$year}-10-05" => '石虎日',
    "{$year}-10-24" => '世界袋鼠日',
    "{$year}-11-29" => '好肉球日',
    "{$year}-12-04" => '國際獵豹日',
    "{$year}-12-14" => '猴子日',
  ];

  // Get the background image for the current month
  $thisMonthImage = $backgroundImages[intval($month) - 1];

  echo "<style>body { background-image: url('$thisMonthImage'); }</style>";

  $thisFirstDay = date("{$year}-{$month}-1");
  $thisFirstDate = date('w', strtotime($thisFirstDay));
  $thisMonthDays = cal_days_in_month(CAL_GREGORIAN, intval($month), intval($year));
  $thisLastDay = date("{$year}-{$month}-$thisMonthDays");
  $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
  $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
  ?>

  <div style='width:450px;display:flex;margin:auto;'>
    <?php
    $nextYear = $year;
    $prevYear = $year;
    if (($month + 1) > 12) {
      $next = 1;
      $nextYear = $year + 1;
    } else {
      $next = $month + 1;
    }

    if (($month - 1) < 1) {
      $prev = 12;
      $prevYear = $year - 1;
    } else {
      $prev = $month - 1;
    }
    $currentYear = date("Y");
    $currentMonth = date("m");
    $currentdays = date("d");
    $nextYear1 = $year + 1;
    $prevYear1 = $year - 1;
    ?>

    <div class="calendar-container">

      <div class="nav">
      <a class="left-button" href="?year=<?= $prevYear1; ?>&month=<?=$month; ?>"><i class="fa-solid fa-angles-left"></i></a>
        <a class="left-button" href="?year=<?= $prevYear; ?>&month=<?= $prev; ?>"><i class="fa-solid fa-chevron-left"></i></a>
        <input  type="number" id="year-input" placeholder="Year" min="1900" max="2100">
        <input type="number" id="month-input" placeholder="Month" min="1" max="12">
        <button id="go-button"class="btn btn-primary ">Go</button>
        <a href="?year=<?= $currentYear; ?>&month=<?= $currentMonth;; ?>&days=<?= $currentdays; ?>"><i class="fa-solid fa-calendar-day"></i></a>
        <a class="right-button" href="?year=<?= $nextYear; ?>&month=<?= $next; ?>"><i class="fa-solid fa-chevron-right"></i></a>
        <a class="left-button" href="?year=<?= $nextYear1; ?>&month=<?= $month; ?>"><i class="fa-solid fa-angles-right"></i></a>

      </div>
      <div id="current-time"></div>
      <div id="hover-image">

        <!-- <img src="./tumbler-8831_256.gif" alt="Hover Image"> -->
      </div>
      <table>
        <tr>
          <td>日</td>
          <td>一</td>
          <td>二</td>
          <td>三</td>
          <td>四</td>
          <td>五</td>
          <td>六</td>
        </tr>
        <?php
        $firstDay = date("w", strtotime("$year-$month-01"));

        $weeks = ceil(($thisMonthDays + $firstDay) / 7);

        for ($i = 1; $i <= $weeks; $i++) {
          echo "<tr>";
          for ($j = 0; $j < 7; $j++) {
            $dayNumber = ($i - 1) * 7 + $j - $firstDay + 1;
            $cellDateKey = "{$year}-{$month}-" . str_pad($dayNumber, 2, '0', STR_PAD_LEFT);

            $isToday = ($year == $currentYear && $month == $currentMonth && $dayNumber == $currentdays);

            if ($dayNumber <= 0 || $dayNumber > $thisMonthDays) {
              echo "<td></td>";
            } else {
              echo "<td style='background: " . ($isToday ? 'lightblue' : 'background:#A9A9A9;opacity: 0.6') . ";'>";
              echo $dayNumber;

              // Check if there's an event for this date
              if (array_key_exists($cellDateKey, $events)) {
                echo "<br><small>{$events[$cellDateKey]}</small>";
              }

              echo "</td>";
            }
          }
          echo "</tr>";
        }
        echo "</table>";
        ?>
        <div id="hover-image">
          <img src="./angry-2498_256.gif" alt="Hover Image">
        </div>
      
    </div>
  </div>
  <script>
    // 获取输入字段和按钮的引用
    const yearInput = document.getElementById('year-input');
    const monthInput = document.getElementById('month-input');
    const goButton = document.getElementById('go-button');

    // 添加事件监听器以在按钮点击时导航
    goButton.addEventListener('click', function() {
      const selectedYear = parseInt(yearInput.value);
      const selectedMonth = parseInt(monthInput.value);

      if (
        !isNaN(selectedYear) &&
        selectedYear >= 1900 &&
        selectedYear <= 2100 &&
        !isNaN(selectedMonth) &&
        selectedMonth >= 1 &&
        selectedMonth <= 12
      ) {
        // 验证输入的年份和月份有效后，导航到所选的年份和月份
        window.location.href = `?year=${selectedYear}&month=${selectedMonth}`;
      } else {
        alert('Please enter a valid year and month.');
      }
    });
  </script>

</body>

</html>