<?php

    require_once("DataBase.php");



    <form class="admin-sch-form" action="DataBase.php" method="post">
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