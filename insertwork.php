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
    <title>aidjobbManagerPage</title>
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
                  <a class="nav-link active" aria-current="page" href="#">使用者頁面</a>
                </li>

                <li class="nav-brand">
                  <a class="nav-link navbar-fixed" href="#" >工作</a>
                </li>

                <li class="nav-brand">
                  <a class="nav-link navbar-fixed" href="#">就業輔導</a>
                </li>

                <ul class="navbar-nav nav">
                    <li class="nav-item">
                         <a class="nav-link dropdown-toggle text-center" href="#">修改</a>
                              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                   <li><a class="dropdown-item" href="#">工作</a></li>
                                   <li><a class="dropdown-item" href="#">就業輔導</a></li>
                              </ul>   
                       </li>
                       
                       <li class="nav-item">
                         <a class="nav-link navbar-fixed text-center" href="#">登出</a>
                       </li>
                </ul>
                
                
              </ul>
            </div>
          </div>
        </nav>
        <br>

        <section>
        <div class="row">
          <div class="col-3"></div>

          <div class="col-6" >
               <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="card" style="vertical-align:middle;border-style: none;">
                         <div class="card-body" > 
                                 
                              <br/>
                              <h3 style="text-align:center">工作新增</h3>
                              <br>
                              <div class="form-input mb-3" style="text-align:center" id="worktable">
                                   <div>
                                   <span >資料表</span>
                                   <select>
                                        <option>選擇資料表</option>
                                        <option>Address</option>
                                        <option>Company_ok</option>
                                        <option>Contactperson_ok</option>
                                        <option>Course</option>
                                        <option>Job</option>
                                        <option>Type</option>
                                   </select>
                                   </div>

                                   <br>

                                   <div>
                                   <span >屬性</span>
                                   <select>
                                        <option>選擇屬性</option>
                                   </select>
                                   </div>
                              </div>
                         
                         <div class="form-input mb-3" style="text-align:center">
                              <span>內容</span><!-- icon -->
                              <input type="text" name="content" placeholder="請輸入內容" >
                         </div>
                         
                    
               <br/>
               <div class="submit" style="text-align:center">
               <button type="submit" class="btn btn-outline-warning button" style="width: 200px;">確認</button>
               </div>
          </div>

     </div>
</div>
     </div>
     </div>
</section>
          
     
     </div>
     <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script> -->
   
</body>