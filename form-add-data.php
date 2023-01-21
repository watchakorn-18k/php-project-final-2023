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
    <title>TEST</title>
</head>
<style>
* {
    font-family: 'Kanit', sans-serif;
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
    p-10
  ">
        <div class="grid grid-cols-1 gap-4">
            <center>
                <p class="text-2xl">เพิ่มชื่อนักเตะ</p>
            </center>
            <form class="form-control" action="savedata.php" method="post">
                <div class="grid grid-cols-1 gap-6">
                    <div class="gap-0">
                        <label class="label">
                            <span class="label-text">ชื่อนักเตะ</span>
                        </label>
                        <label class="input-group">
                            <span>ชื่อนักเตะ</span>
                            <input type="text" name="soccer_name" placeholder="กรอกชื่อนักเตะ"
                                class="input input-bordered" />
                        </label>
                    </div>
                    <div class="gap-0">
                        <label class="label">
                            <span class="label-text">สัญชาติ</span>
                        </label>
                        <label class="input-group">
                            <span>สัญชาติ</span>
                            <input type="text" name="soccer_nation" placeholder="กรอกสัญชาติ"
                                class="input input-bordered" />
                        </label>
                    </div>
                    <div class="gap-0">
                        <label class="label">
                            <span class="label-text">ตำแหน่ง</span>
                        </label>
                        <label class="input-group">
                            <span>ตำแหน่ง</span>
                            <input type="text" name="soccer_position" placeholder="กรอกตำแหน่ง"
                                class="input input-bordered" />
                        </label>
                    </div>
                    <div class="gap-0">
                        <label class="label">
                            <span class="label-text">ทีมต้นสังกัด</span>
                        </label>
                        <select class="select w-full max-w-xs" name="soccer_team">
                            <option disabled selected>เลือกทีมต้นสังกัด</option>
                            <?php 
                            include "connect.php";
                            $sql_options ="select * from tblteam order by team_id";
                            $result_options = mysqli_query($conn,$sql_options) or die("sql ผิด");
                            while ($row = mysqli_fetch_array($result_options)) {
                                echo '<option value='.$row["team_id"]. '>'.$row["team_name"].'</option>';
                            }
                            mysqli_close($conn);
                            ?>
                        </select>
                    </div>
                    <input class="btn btn-active btn-primary" type="submit" value="บันทึก" />


                </div>
            </form>
        </div>
    </div>
</body>

</html>