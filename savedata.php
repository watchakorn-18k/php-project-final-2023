<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=devide-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.47.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
</head>
<style>
* {
    font-family: "Kanit", sans-serif;
}
</style>

<body class="bg-base-200">
    <div class="navbar bg-base-300">
    </div>
    <div class="
            border-base-300
            flex flex-wrap
            items-center
            justify-center
            p-10">

        <?php 
include "connect.php";
if(isset($_POST)) {
    $per_name = mysqli_real_escape_string($conn,$_POST["soccer_name"]);
    $national = mysqli_real_escape_string($conn,$_POST["soccer_nation"]);
    $position = mysqli_real_escape_string($conn,$_POST["soccer_position"]);
    $team_id = mysqli_real_escape_string($conn,$_POST["soccer_team"]);
    
    $sql_check = "select per_name from tblpersonalsoccer where per_name='$per_name'";
    $result_check = mysqli_query($conn,$sql_check) or die("sql ผิด");
    $count  = mysqli_num_rows($result_check);
    if ($count > 0) {
        echo '
        <div class="grid grid-cols-1 gap-4">
            <center>
                <p class="text-2xl text-error">นักเตะคนนี้มีอยู่ในระบบแล้ว</p>
            </center>
        </div>
    </div>
<script>
    let delayInMilliseconds = 1000;

    setTimeout(function () {
        window.history.back()
    }, delayInMilliseconds);
</script>';
    }
    else{
        $sql = "insert into tblpersonalsoccer(per_name,national,position,team_id) values('$per_name','$national','$position','$team_id')";
        $result_data = mysqli_query($conn,$sql) or die("sql ผิด");
        echo '
        <div class="grid grid-cols-1 gap-4">
        <center>
            <p class="text-2xl text-success">บันทึกข้อมูลเรียบร้อย</p>
            <p class="text-1xl">กำลังเปลี่ยนหน้าใน 5 วินาที...</p>
        </center>
    </div>
</div>
<script>
let delayInMilliseconds = 5000;

setTimeout(function () {
    window.location.href = "showdata.php";
}, delayInMilliseconds);
</script>
        ';
    }
  }
?>
</body>

</html>