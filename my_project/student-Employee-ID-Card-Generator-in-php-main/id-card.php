<?php 
        $notfound = false;
        include 'config.php';
        $html = '';
        if(isset($_POST['search'])){

             $id_no = $_POST['id_no'];

             $sql = "Select * from cards where id_no='$id_no' ";

             $result = mysqli_query($conn, $sql);
 
 
             if(mysqli_num_rows($result)>0){
             $html="<div class='card' style='width:230px; padding:0;' >";
     
               $html.="";
                         while($row=mysqli_fetch_assoc($result)){
                             
                            $name = $row["name"];
                            $id_no = $row["id_no"];
                            $grade = $row['grade'];
                            $dob = $row['dob'];
                            $email = $row['email'];
                            $f_name = $row['exp_date'];
                            $phone = $row['phone'];
                            $address = $row['address'];
                            $image = $row['image'];
                            $date = date('M d, Y', strtotime($row['date']));
                          
                             
                             $html.="
                                    <!-- second id card  -->
                                        <div class='m-box' id='mycard'>
                                        <div class='header-img'>
                                            <h1>APS UNIVERSITY REWA</h1>
                                            <img src='$image'>
                                        </div>
                                        <div class='details'>
                                            <div>ID Number :</div>
                                            <div>$id_no</div>
                                        </div>
                                        <div class='details'>
                                            <div>Student Name :</div>
                                            <div class='std_name'>$name</div>
                                        </div>
                                        <div class='details'>
                                            <div>Father Name :</div>
                                            <div>$f_name</div>
                                        </div>
                                        <div class='details'>
                                            <div>Phone :</div>
                                            <div>$phone</div>
                                        </div>
                                        <div class='details'>
                                            <div>Address :</div>
                                            <div>$address</div>
                                        </div>
                                        <div class='footer'>
                                            $grade
                                        </div>
                                    </div>
                                        ";
                                        
                           
                         }
     
                echo "</div>";
             }
            
        }

             ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <link rel="stylesheet" href="css/dashboard.css">
    
    <link rel="icon" type="image/png" href="images/favicon.png"/>

    <title>Card Generation | Coding Cush Technology</title>
       <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">



<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

body{
   font-family:'arial';
   }

.lavkush img {
  border-radius: 8px;
  border: 2px solid blue;
}
span{

    font-family: 'Orbitron', sans-serif;
    font-size:16px;
}
hr.new2 {
  border-top: 1px dashed black;
  width:350px;
  text-align:left;
  align-items:left;
}
 /* second id card  */
 p{
     font-size: 13px;
     margin-top: -5px;
 }
 .container {
    position: relative;
    width: 30vw;
    height: 45vh;
    margin: auto;
    background-color: white;
    box-shadow: 0 1px 10px rgb(146 161 176 / 50%);
    overflow: hidden;
    border-radius: 10px;
}

.header {
    border: 2px solid black;
    width: 100%;
    height: 15vh;
    margin: 20px auto;
    background-color: white;
    box-shadow: 0 1px 10px rgb(146 161 176 / 50%);
    border-radius: 10px;
    /* background-image: url(assets/images/BDM2.png); */
    overflow: hidden;
    font-family: 'Poppins', sans-serif;
}

.header h1 {
    color: rgb(27, 27, 49);
    text-align: right;
    margin-right: 20px;
    margin-top: 15px;
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
    display: flex;
    justify-content: center;
}

.header p {
    color: rgb(157, 51, 0);
    text-align: right;
    margin-right: 22px;
    margin-top: -10px;
}

.container-2 {
    /* border: 2px solid red; */
    width: 73vh;
    height: 10vh;
    margin: 0px auto;
    margin-top: -20px;
    display: flex;
}

.box-1 {
    border: 4px solid black;
    width: 90px;
    height: 95px;
    margin: -40px 25px;
    border-radius: 3px;
}

.box-1 img {
    width: 82px;
    height: 87px;
}

.box-2 {
    /* border: 2px solid purple; */
    width: 33vh;
    height: 8vh;
    margin: 7px 0px;
    padding: 5px 7px 0px 0px;
    text-align: left;
    font-family: 'Poppins', sans-serif;
}

.box-2 h2 {
    font-size: 1.3rem;
    margin-top: -5px;
    color: rgb(27, 27, 49);
    ;
}

.box-2 p {
    font-size: 0.7rem;
    margin-top: -5px;
    color: rgb(179, 116, 0);
}

.box-3 {
    /* border: 2px solid rgb(21, 255, 0); */
    width: 8vh;
    height: 8vh;
    margin: 8px 0px 8px 30px;
}

.box-3 img {
    width: 8vh;
}

.container-3 {
    /* border: 2px solid rgb(111, 2, 161); */
    width: 73vh;
    height: 12vh;
    margin: 0px auto;
    margin-top: 10px;
    display: flex;
    font-family: 'Shippori Antique B1', sans-serif;
    font-size: 0.7rem;
}

.info-1 {
    /* border: 1px solid rgb(255, 38, 0); */
    width: 17vh;
    height: 12vh;
}

.id {
    /* border: 1px solid rgb(2, 92, 17); */
    width: 17vh;
    height: 5vh;
}

.id h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.dob {
    /* border: 1px solid rgb(0, 46, 105); */
    width: 17vh;
    height: 5vh;
    margin: 8px 0px 0px 0px;
}

.dob h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.info-2 {
    /* border: 1px solid rgb(4, 0, 59); */
    width: 17vh;
    height: 12vh;
}

.join-date {
    /* border: 1px solid rgb(2, 92, 17); */
    width: 17vh;
    height: 5vh;
}

.join-date h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.expire-date {
    /* border: 1px solid rgb(0, 46, 105); */
    width: 17vh;
    height: 5vh;
    margin: 8px 0px 0px 0px;
}

.expire-date h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.info-3 {
    /* border: 1px solid rgb(255, 38, 0); */
    width: 17vh;
    height: 12vh;
}

.email {
    /* border: 1px solid rgb(2, 92, 17); */
    width: 22vh;
    height: 5vh;
}

.email h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.phone {
    /* border: 1px solid rgb(0, 46, 105); */
    width: 17vh;
    height: 5vh;
    margin: 8px 0px 0px 0px;
}

.info-4 {
    /* border: 2px solid rgb(255, 38, 0); */
    width: 22vh;
    height: 12vh;
    margin: 0px 0px 0px 0px;
    font-size:15px;
}

.phone h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.sign {
    /* border: 1px solid rgb(0, 46, 105); */
    width: 17vh;
    height: 5vh;
    margin: 41px 0px 0px 20px;
    text-align: center;
}

        .m-box{
            position: relative;
            height: 360px;
            width: 230px;
            box-shadow: 0px 0px 5px #999;
            border-radius: 6px;
            overflow: hidden;
        }
        .m-box .header-img{
            position: absolute;
            top: 0;
            left: 0;
            height: 90px;
            width: 100%;
            background-color: orangered;
            padding: 5px;
        }
        .m-box .header-img h1{
            color: #fff;
            font-size:15px;
            text-align: center;
            font-family: system-ui;
            letter-spacing: 0.5px;
        }
        .m-box .header-img img{
            position: absolute;
            bottom: -50px;
            left: 50%;
            transform: translateX(-50%);
            height: 100px;
            width: 100px;
            clip-path: circle(50% at 50% 50%);
        }
        .m-box .header-img::before{
            content: '';
            position: absolute;
            bottom: -55px;
            left: 50%;
            transform: translateX(-50%);
            height: 100px;
            width: 100px;
            border: 5px solid #fff;
            border-radius: 65px;
            border: 1px solid orangered;
        }
        .m-box .details{
            position: relative;
            top: 160px;
            height: 25px;
            width: 100%;
            margin: 5px 0;
            font-family: system-ui;
            font-size: 11px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .m-box .details div{
            height: 100%;
            width: 60%;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding-left: 10px;
            font-weight: 600;
            text-transform: capitalize;
        }
        .m-box .details div:first-child{
            width: 40%;
            padding-left: 5px;
        }
        .m-box .footer{
            position: absolute;
            bottom: 0;
            left: 0;
            height: 30px;
            width: 100%;
            background-color: orangered;
            text-align:center;
            line-height:30px;
            font-size:12px;
            font-weight:800;
            letter-spacing:0.3px;
            color:#fff;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
  </head>
  <body>

 <!-- Navigation bar start  -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-image: linear-gradient(to right, rgb(0,300,255), rgb(93,4,217));">
  <a class="navbar-brand" href="#"><img src="assets/images/codingcush-logo.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<!-- Navigation bar end  -->

  <br>

<div class="row" style="margin: 0px 20px 5px 20px">
  <div class="col-sm-6">
    <div class="card jumbotron">
      <div class="card-body">
        <form class="form" method="POST" action="id-card.php">.
        <label for="exampleInputEmail1">Student Id Card No.</label>
        <input class="form-control mr-sm-2" type="search" placeholder="Enter Id Card No." name="id_no">
        <small id="emailHelp" class="form-text text-muted">Every student's should have unique Id no.</small>
        <br>
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="search">Generate</button>
        </form>
      </div>
    </div>
    <button id="demo" class="downloadtable btn btn-primary" onclick="downloadtable()"> Download Id Card</button>

  </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header" >
                Here is your Id Card
            </div>
            <div class="card-body" id="mycard">
                <?php echo $html ?>
            </div>
        <br>
        
     </div>
  </div>
<hr>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>

    function downloadtable() {

        var node = document.getElementById('mycard');
        var stdName = document.querySelector(".std_name");

        domtoimage.toPng(node)
            .then(function (dataUrl) {
                var img = new Image();
                img.src = dataUrl;
                downloadURI(dataUrl, stdName.innerText);
            })
            .catch(function (error) {
                console.error('oops, something went wrong', error);
            });

    }



    function downloadURI(uri, name) {
        var link = document.createElement("a");
        link.download = name;
        link.href = uri;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        delete link;
    }



</script>
  </body>
</html>