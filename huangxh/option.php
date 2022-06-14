//city
<?php
                    #連線資料
                    include_once 'connect.php';
     
                    #存在於db的選項
                    $sql = "SELECT DISTINCT `work_city` FROM `job`";
                    $result = mysqli_query($link,$sql); //全部資料

                    $options = array();
                    while($row = mysqli_fetch_array($result)){
                         $options[] = $row[0];
                    }    
                    echo " <ul class=\"list-group\"  valign=\"center\">";
                    foreach($options as $option){
                         echo "<li class=\"list-group-item\" >";
                         echo "<input class=\"form-check-input me-1\" type=\"checkbox\" name = \"work_city[]\"value=\"$option\" aria-label=\"...\" >";
                         echo print_r($option,true);
                         echo "</li>";
                    }
                    echo "</ul>";
                    mysqli_free_result($result);
?>
//薪資
<?php     
                    #存在於db的選項
                    $sql = "SELECT DISTINCT `pay_period` FROM `job`";
                    $result = mysqli_query($link,$sql); //全部資料

                    $options = array();
                    while($row = mysqli_fetch_array($result)){
                         $options[] = $row[0];
                    }    
                    echo " <ul class=\"list-group\"  valign=\"center\">";
                    foreach($options as $option){
                         echo "<li class=\"list-group-item\" >";
                         echo "<input class=\"form-check-input me-1\" type=\"checkbox\" name = \"pay_period[]\"value=\"$option\" aria-label=\"...\" >";
                         echo print_r($option,true);
                         echo "<span><input style=\"width:120px\" type=\"number\" name = \"$option.min_wage\" min=\"0\" step=\"100\"> ~ <input style=\"width:120px\" type=\"number\" name = \"$option.max_wage[]\" min=\"0\" step=\"100\"></span> 元";
                         echo "</li>";
                    }
                    echo "</ul>";
                    mysqli_free_result($result);
               ?>
//職業類別
<?php
                         #存在於db的選項
                         $sql = "SELECT DISTINCT `type` FROM `type`";
                         $result = mysqli_query($link,$sql); //全部資料

                         $options = array();
                         while($row = mysqli_fetch_array($result)){
                              $options[] = $row[0];
                         }    
                         echo " <ul class=\"list-group\"  valign=\"center\">";
                         foreach($options as $option){
                              echo "<li class=\"list-group-item\" >";
                              echo "<input class=\"form-check-input me-1\" type=\"checkbox\" name = \"career[]\"value=\"$option\" aria-label=\"...\" >";
                              echo print_r($option,true);
                              echo "</li>";
                         }
                         echo "</ul>";
                         mysqli_free_result($result);

                         #關閉連線
                         mysqli_close($link);
?>