<!DOCTYPE html>
<html lang="zh-en">
<head>
    <title>aidjobbWorkPage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0, user-scalable = no">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="bar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- CDN的方式(直接連到網路) -->
</head>
<body> 
    <div class="container">
        <!-- 功能列 -->
        <div class="row"> 

            <div class="col-3" style="margin-top: 10px;">
                <img src="img/logo.png" width="200" height="60">
            </div>

            <div class="col-5 bar">
              <form >
                <br/>
                <input class="form-control me-1" type="search" placeholder="例:工程師" aria-label="Search" size="50">
            </form>
        </div>

        <div class='col-1 bar' >
            <br/>
            <button type="button" class="btn btn-outline-warning button" >搜尋</button>
        </div>

        <div class='col-3' >
            
            <div class="fs-1 bar-right" >
                
                <!-- 更多類別icon點擊 -->
                  <!-- <button type="button" class="btn btn-outline-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-stack" viewBox="0 0 17 17">
    <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
    <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
  </svg> -->

  <div class="btn-group">
   
   <button type="button" class="btn btn-outline-warning" onclick="location.href='option.php'">
       <i class="bi bi-stack"></i>
     <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
<path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
<path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
</svg> -->
     <!-- <span class="visually-hidden">Button</span> -->
   </button>
   <button type="button" class="btn btn-outline-warning" onclick="location.href='home.php'"> 
     首頁
     <!-- <span class="visually-hidden">Button</span> -->
   </button>
   <button type="button" class="btn btn-outline-warning" onclick="location.href='login.php'">
      管理者介面
     <span class="visually-hidden">Button</span>
   </button>
 </div>
                    <span class="visually-hidden">Button</span>
                  </button>

                <!-- <i class="bi bi-stack "></i>  -->
                <!-- label點按處 -->
                <!-- <span >首頁</span>
                <span class="label">登入</span> -->
            </div>
        </div>
    </div>
<br/>
    <div class="row">
         
          <div class="alert alert-warning" role="alert" style="text-align: center;">
               <h5>工作名稱</h5>
               <hr>
               <h5>工作內容</h5>
                  <p class="simpletext">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
          </div>
    </div>

    <div class="row">
     <div class="alert alert-warning" role="alert" style="text-align: center;">
          
          <h5 class="paid">薪水</h5>
          <hr>
               <p class="paid">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
          <hr>
          <h5 class="experience">工作經驗</h5>
          <hr>
               <p class="experience">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
          <hr>
          <h5 class="jobtype">工作性質</h5>
          <hr>
               <p class="jobtype">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
          <hr>
          <h5 class="worktime">工作時段</h5>
          <hr>
               <p class="worktime">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
          <hr>
          <h5 class="walfare">福利與待遇</h5>
          <hr>
               <p class="walfare">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
          
     </div>

     <div class="row">
         
          <div class="alert alert-warning" role="alert" style="text-align: center;">
               <h5>就業輔導</h5>
               <hr>
               <p class="walfare">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
          

          </div>

          
          
    </div>
          
    </div>