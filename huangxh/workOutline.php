<?php
          #連線資料
          include_once 'connect.php';

          $sql = "SELECT `job_name`,`company_name`,`work_city`,`work_district`,`pay_period`,`min_wage`,`max_wage` FROM `job`,`company` WHERE";

          if (isset($_POST['work_city'])){ //如果有選city
            $cities = array();
            $cities = $_POST['work_city'];
            $sql .= " (`work_city`= \"".$cities[0]."\"";
            for($i = 1; $i < count($cities);$i++){
              $sql.="OR `work_city` = \"".$cities[$i]."\"";
            }
            $sql.=")";
          }

          if (isset($_POST['job_type'])){ //如果有選career
            $types = array();
            $types = $_POST['job_type'];
            if(isset($_POST['work_city'])){  
              $sql.="AND";
            }
            $sql.= " (`type.type` = \"".$types[0]."\"";
            for($i = 1; $i < count($types);$i++){
              $sql.="OR `type.type` = \"".$types[$i]."\"";
            }
            $sql.=")";
          }

          if (isset($_POST['pay_period'])){ //如果有選pay_period
            $pay_ways = array();
            $pay_ways = $_POST['pay_period'];
            $first = true;
            foreach($pay_ways as $pay_way){
              if(!isset($_POST[$pay_way.'min_wage'])){ //正常填寫範圍
                $set_wage = "SELECT min(min_wage) FROM `job`";
                $min_wage = mysqli_query($link,$set_wage);
              }
              else{
                $min_wage = $_POST[$pay_way.'min_wage'];
              }
              if(isset($_POST[$pay_way.'max_wage'])){
                $set_wage = "SELECT max(min_wage) FROM `job`";
                $max_wage = mysqli_query($link,$set_wage);
              }
              else{
                $max_wage = $_POST[$pay_way.'max_wage'];
              }
              if($first == true){  //第一個
                if((isset($_POST['work_city'])||isset($_POST['job_type']))){$sql.="AND";} //前有條件，+AND
                $sql.="((job.pay_period = \"".$pay_way."\"";
              }
              if($first == false){ //非第一個
                $sql.="OR (job.pay_period = \"".$pay_way."\" ";
              }
              
              #薪資條件
              $sql.="AND";
              $sql = "$min_wage <= job.min_wage AND $max_wage >= job.max_wage)";
              
              $first = false;
            }
            $sql.=")";
          }

          $result =  mysqli_query($link,$sql);

          $options = array();
          while($row = mysqli_fetch_array($result)){
            $options[] = $row;
          }            
          foreach($options as $option){
            echo print_r($option ,true);
          }
      ?>