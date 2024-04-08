<!-- <?php session_start();?> -->

<html>
    <head>
     <script type="text/javascript" src="js/adapter.min.js"></script>
     <script type="text/javascript" src="js/vue/2.1.10/vue.min.js"></script>
     <script type="text/javascript" src="js/instascan.min.js"></script>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <style>
        
        .navbar {
            overflow: hidden;
            background-color: #21ad21;
            color: white;
            padding: 16px;
        }
       
        .welcome{
            font-size: 1.2em;
        }
        .logout {
            float: right;
            display: flex;
            align-items: center;
        }

        .logout img {
            margin-right: 5px;
        }

        .logout button {
            background-color: transparent;
            border: none; /* Remove button border */
            color: inherit; /* Inherit font color from navbar */
            cursor: pointer;
            color: white; /* Indicate clickable element */
        }
    
    </style>
    </head>
    <body>
    <div class="navbar">
        <span class="welcome">Welcome Teacher</span>
        <div class="logout">
            <img src="temp\log-out.png" alt="Logout icon" width="20" height="20">
            <a href="logout.php"> <button> Logout</button>
        </div>
    </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <video id="preview" width="100%"></video> 
                   <?php
                    //   if(isset($_SESSION['error'])){
                    //     echo"
                    //        <div class='alert alert-danger'>
                    //        <h4>Error!</h4>
                    //        ".$_SESSION['error']."
                    //        </div>
                    //     ";
                    //   }
                    //   if(isset($_SESSION['success'])){
                    //     echo"
                    //        <div class='alert alert-success'>
                    //        <h4>Success!</h4>
                    //        ".$_SESSION['success']."
                    //        </div>
                    //     ";
                    //   }
                   ?>
                </div>
                <div class="col-md-6">
                <form action="insert1.php" method="post" class="form-horizontal">
                     <label>SCAN QR CODE</label>
                    <input type="text" name="text" id="text" readonly="" placeholder="scan qrcode" class="form-control">
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>RollNumber</td>
                            <td>TIME IN</td>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                        $server="localhost";
                        $username="root";
                        $password="";
                        $dbname="qrcodedb";
                     
                        $conn=new mysqli($server,$username,$password,$dbname);
                     
                        if($conn->connect_error){
                         echo "Connection failed" .$conn->connect_error;
                        }

                           $sql="SELECT RollNumber,TimeIn FROM table_attendance WHERE DATE(TimeIn)=CURDATE()";
                           $query = $conn->query($sql);
                           while ($row = $query->fetch_assoc()){

                          

                       ?>
                           <tr>
                            
                              <td><?php echo $row['RollNumber'];?></td>
                              <td><?php echo $row['TimeIn'];?></td>
                           </tr>
                       <?php
                        }
                        ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
          <button type="submit" class="btn btn-success pull-right" onclick="Export()">
                <i class="fa fa-file-excel-o fa-fw"></i> Export to Excel
            </button>
            <script>
                function Export()
                {
                    var conf = confirm("Please confirm if you wish to proceed in exporting the attendance in to Excel File");
                    if(conf == true){
                        window.open("export.php",'_blank');
                    }
                }
                </script>
        <script>
            let scanner=new Instascan.Scanner({video:document.getElementById('preview')});
            Instascan.Camera.getCameras().then(function(cameras){
                if(cameras.length>0){
                    scanner.start(cameras[0]);
                } else{
                    alert('No cameras found');
                }
            }).catch(function(e){
                console.error(e);
            });

            scanner.addListener('scan',function(c){
                document.getElementById('text').value=c;
                document.forms[0].submit();
            });
        </script>
    </body>
</html>