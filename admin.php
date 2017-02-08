<?php

    require_once("DataBase.php");

    if ( !empty($_POST)) {
        // keep track validation errors

         
        // keep track post values
        $id = $_POST['day'];
        $location = $_POST['nameOfLocation'];
        $address = $_POST['address'];
        $start = $_POST['startTime'];
        $end = $_POST['startEnd'];
        $valid = true;
        // insert data
        if ($valid) {
            $pdo = DataBase::dbConnect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = 'UPDATE schedule SET location = ?, address = ?, start = ?, end = ? WHERE id = ?';
            $update = $pdo->prepare($sql);
            $update->execute(array($location, $address, $start, $end, $id));
            DataBase::dbDisconnect();
            header("Location: truck-locator.php");
        }
    }

    require_once('header.php');

?>

<div class="main-part">
    <form style='float:none; margin-right:auto; margin-left:auto;' class=" col-md-4 admin-sch-form" action="admin.php" method="post">

        <select class="form-control" name="day">
            <option value="1" >Monday</option>
            <option value="2">Tuesday</option>
            <option value="3">Wednesday</option>
            <option value="4">Thursday</option>
            <option value="5">Friday</option>
            <option value="6">Saturday</option>
        </select>

        <div class="form-group">
            <label for="nameOfLocation">Name of Location</label>
            <input type="text" class="form-control" id="nameOfLocation" placeholder="">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="">
        </div>
        <div class="form-group">
            <label for="startTime">Start Time</label>
            <input type="text" class="form-control" id="startTime" placeholder="">
        </div>
        <div class="form-group">
            <label for="endTime">End Time</label>
            <input type="text" class="form-control" id="endTime" placeholder="">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

<?php require_once('footer.php'); ?>