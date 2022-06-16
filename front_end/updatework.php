<!DOCTYPE html>
<html lang="zh-en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0, user-scalable = no">
    
     <link rel="stylesheet" href="bar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- CDN的方式(直接連到網路) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <title>aidjobbManagerUpdatePage</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-light  bg-warning">
          <div class="container-fluid">
           
            <a class="navbar-brand" >
               <img src="img/aidjob.png" alt="" width="60" height="60">
             </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav"  style="float:right">
               <ul class="navbar-nav me-auto">
                <li class="nav-brand">
                  <a class="nav-link active" aria-current="page" href="home.php">使用者頁面</a>
                </li>

                <li class="nav-brand">
                  <a class="nav-link navbar-fixed" href="#" >工作</a>
                </li>

                <li class="nav-brand">
                  <a class="nav-link navbar-fixed" href="#">就業輔導</a>
                </li>
                
                <li class="nav-brand">
                  <a class="nav-link navbar-fixed" href="insertwork.php">新增</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link navbar-fixed text-center" href="#">登出</a>
                </li>
                
                   

                       
               
                
                
              </ul>
            </div>
          </div>
        </nav>
        <br>

        <section>
        <div class="row">
          
               <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    
                                 
                              <br/>
                              <h3 style="text-align:center">工作修改</h3>
                              <br>
                              <div class="form-input mb-3" style="text-align:center" id="worktable">
                                   <div>
                                   <table cellspacing=1px>
                                   <tr>
											<td>工作ID:</td>
											<td>工作名稱:</td>
											<td>工作內容:</td>
											<td>工作類別ID:</td>
											<td>公司名稱:</td>
											<td>聯絡人ID:</td>
											<td>工作地點:</td>
                                                       <td>工作縣市:</td>
                                                       <td>工作地區:</td>
                                                       <td>工作時間:</td>
                                                       <td>工作種類:</td>
                                                       <td>薪水模式:</td>
                                                       <td>最低薪水:</td>
                                                       <td>最高薪水:</td>
										</tr>

                                                  <!-- <?php
										$num = 0;
										$temp=0;
										do{
											?> -->

											<tr>
												<td>
													<input type="text" size='13px' name="job_id[]" value="<?php echo $row['job_id']; ?> "readonly="readonly">
												</td>
												<td>
													<input type="text"size='13px' name="job_name[]" value="<?php echo $row['job_name']; ?>"readonly="readonly">
												</td>
												<td>
													<input type="text"size='13px' name="job_description[]" value="<?php echo $row['job_description']; ?>"readonly="readonly">
												</td>
												<td>
													<input type="text"size='13px' name="type_id[]" value="<?php echo $row['type_id']; ?>"readonly="readonly">
												</td>
												<td>
													<input type="text"size='13px' name="company_name[]" value="<?php echo $row['company_name']; ?>"readonly="readonly">
												</td> 
												<td>
													<input type="text"size='13px' name="contact_id[]" value="<?php echo $row['contact_id']; ?>">
												</td>
												<td>
													<input type="text"size='13px' name="work_place[]" value="<?php echo $row['work_place']; ?>">
												</td>
                                                            <td>
													<input type="text" size='13px' name="work_city[]" value="<?php echo $row['work_city']; ?> "readonly="readonly">
												</td>
												<td>
													<input type="text"size='13px' name="work_district[]" value="<?php echo $row['work_district']; ?>"readonly="readonly">
												</td>
												<td>
													<input type="text"size='13px' name="work_time[]" value="<?php echo $row['work_time']; ?>"readonly="readonly">
												</td>
												<td>
													<input type="text"size='13px' name="job_classification[]" value="<?php echo $row['job_classification']; ?>"readonly="readonly">
												</td>
												<td>
													<input type="text"size='13px' name="pay_period[]" value="<?php echo $row['pay_period']; ?>"readonly="readonly">
												</td> 
												<td>
													<input type="text"size='13px' name="min_wage[]" value="<?php echo $row['min_wage']; ?>">
												</td>
												<td>
													<input type="text"size='13px' name="max_wage[]" value="<?php echo $row['max_wage']; ?>">
												</td>
												<td>
													<button class="btn btn-danger" style="width:70px" type="submit" name="<?php echo 'd'.$temp ?>"value="<?php echo $num; ?>" onclick='onDeleteButton()'>刪除</button>
												</td>
                                                            
												<td >
												<button type="submit" name="<?php echo $temp?>" style="width:70px" class="btn btn-primary " onclick='onUpdateButton()'>修改</button><br />
											</td>
											</tr>
											<!-- <?php
											$temp+=1;
											$num+=1;
										}while($row=mysqli_fetch_assoc($ro));
										?> -->
									</table>
                                   </div>

                                   

                                   
                              </div>       
                    </div>
               </div>
          </section>
          
     
     </div>
     <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script> -->
   
</body>