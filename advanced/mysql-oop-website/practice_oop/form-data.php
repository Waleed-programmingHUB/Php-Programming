<?php

include_once 'header.php';
include_once '../database_class.php';
$data = new Database();

?>

<section>
    <div class="form-data">
        <div class="header">
            <h3>
                Contact Us
            </h3>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="form-data">
            <div class="form-item">
                <label for="name">
                    Enter Name
                </label>
                <input type="text" class="input-element">
                <span id="msg-name"></span>
            </div>

            <div class="form-item">
                <label for="age">
                    Enter Age
                </label>
                <input type="number" class="input-element">
                <span id="msg-age"></span>
            </div> 
            
            <div class="form-item">
                <label for="city">
                    Select location
                </label>
                <select name="city" id="city">
                    <option selected>Select Current location</option>
                    <?php
                    $data->select_data('citytable',null ,null,null,null,null);
                        $res = $data->GetResult();

                        foreach ($res as list("city_id"=>$city_id,"city_name"=>$city_name)){
                            echo "<option value='$city_id'>$city_name</option>";
                        }
                    ?>
                </select>
                <span id="msg-city"></span>
            </div>
            <button type="submit" class="btn-style">Submit</button>
        </form>
    </div>
</section>

<?php include_once 'footer.php';?>
