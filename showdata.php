<html>

<?php 
include 'connect.php';

$sql = "SELECT tblpersonalsoccer.*, tblteam.* FROM tblpersonalsoccer INNER JOIN tblteam ON tblpersonalsoccer.team_id = tblteam.team_id;";
$result = mysqli_query($conn,$sql) or die("sql ผิด");
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=devide-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.47.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <p class="text-2xl">แสดงข้อมูล</p>
            </center>
            <div class="stats shadow bg-base-300 rounded-2xl">
                <div class="stat">
                    <div class="stat-title">ข้อมูลนักเตะทั้งหมด</div>
                    <?php 
                $sql_stat = "SELECT COUNT(*) FROM tblpersonalsoccer";
                $result_state = mysqli_query($conn, $sql_stat);
                $row_state = mysqli_fetch_row($result_state);
                echo '<div class="stat-value">'.$row_state[0].'</div>';
                ?>
                    <div class="stat-desc">
                        <?php 
                        // Get the current day
                        $day = date("d");

                        // Get the current month
                        $month = date("m");

                        // Get the current year
                        $year = date("Y");
                        echo "ล่าสุดวันที่ " . $day . "-" . $month . "-" . $year;
                    ?>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-title">ข้อมูลนักเตะที่เพิ่มล่าสุด</div>
                    <?php 
                $sql_l_data = "SELECT * FROM tblpersonalsoccer";
                $result_l_data = mysqli_query($conn, $sql_l_data);
                $coun_l_data = 0;
                while ($row_last_data = mysqli_fetch_array($result_l_data)) {
                    $coun_l_data += 1;
                    if ($row_state[0] - $coun_l_data == 0) {
                        echo $row_last_data["per_name"] .' | '. $row_last_data["position"];
                        echo '<div class="stat-desc">'.$row_last_data["national"].'</div>';
                    }
                    
                }

                ?>

                </div>
            </div>
            <div class="justify-self-end">
                <a href="form-add-data.php">
                    <button class="btn gap-2">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        เพิ่มข้อมูล
                    </button>
                </a>
            </div>
            <div class="overflow-x-auto ">
                <table class="table table-compact w-full ">
                    <thead class="">

                        <tr>
                            <th class="bg-base-300 py-3 px-6">
                                รหัสนักเตะ
                            </th>
                            <th class="bg-base-300 py-3 px-6">
                                ชื่อนักเตะ
                            </th>
                            <th class="bg-base-300 py-3 px-6">
                                สัญชาติ
                            </th>
                            <th class="bg-base-300 py-3 px-6">
                                ตำแหน่ง
                            </th>
                            <th class="bg-base-300 py-3 px-6">
                                ทีมต้นสังกัด
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
					while ($row = mysqli_fetch_array($result)) {
						echo '<tr class="bg-white border-b hover" >';
						echo '<td class="py-4 px-6">' . $row["per_id"] .'</td>';
						echo '<td class="py-4 px-6">' . $row["per_name"] .'</td>';
						echo '<td class="py-4 px-6">' . $row["national"] .'</td>';
						echo '<td class="py-4 px-6">' . $row["position"] .'</td>';
						echo '<td class="py-4 px-6">' . $row["team_name"] .'</td>';
						echo '</tr>';
					}
					?>
                        </tr>


                    </tbody>

                </table>
            </div>
        </div>
</body>

</html>