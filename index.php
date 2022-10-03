<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Progress check</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="progress.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    </head>
    <body id="container">
        <div id="sub-container">
            <!--sharad-->
            <div class="card" style="width: 18rem;float:left">
                <div class="card-body" style="height: 18.3rem;">
                    <h5 class="card-title">Sharad</h5>
                    <br>
                    <p>
                        <a onclick="validation(1)" class="btn btn-primary" role="button" aria-expanded="false" aria-controls="collapseExample">
                            You Are Sharad-- click here to update
                        </a>
                    </p>
                    <br>
                    <p>
                        <a class="btn btn-primary"  href="sharad.php" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Want To Check Sharad Progress
                        </a>
                    </p>
                    <br>  
                </div>
            </div>
            <!--Maheshwar-->
            <div class="card" style="width: 18rem;float:left">
                <div class="card-body">
                    <h5 class="card-title">Maheshwar</h5>
                    <br>
                    <p>
                        <a onclick="validation(2)" class="btn btn-primary" role="button" aria-expanded="false" aria-controls="collapseExample">
                            You Are Maheshwar-- click here to update
                        </a>
                    </p>
                    
                    <br>
                    <p>
                        <a class="btn btn-primary"  href="maheshwar.php" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Want To Check Maheshwar Progress
                        </a>
                    </p>
                    <br>
                </div> 
            </div>
            <!--Abhishek-->
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Abhishek</h5>
                    <br>
                    <p>
                        <a onclick="validation(3)" class="btn btn-primary" role="button" aria-expanded="false" aria-controls="collapseExample">
                            You Are Abhishek-- click here to update
                        </a>
                    </p>
                    
                    <br>
                    <p>
                        <a class="btn btn-primary"  href="abhishek.php" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Want to Check Abhishek Progress
                        </a>
                    </p>
                    
                    <br>
                </div>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script type="text/javascript">
           
           function validation(x){
            if(x==1){
                intt = prompt("Hello sharad enter your password");
                if(intt=="sharar89"){
                    window.location.href="sharad_owner.php";
                }
                else{
                    alert("cannot access");
                }
            }
            if(x==2){
                intt = prompt("Hello Maheshwar enter your password");
                if(intt=="mahi9559"){
                    window.location.href="maheshwar_owner.php";
                }
                else{
                    alert("cannot access");
                }
            }
            if(x==3){
                intt = prompt("Hello Abhishek enter your password");
                if(intt=="abhishek"){
                    window.location.href="abhishek_owner.php";
                }
                else{
                    alert("cannot access");
                }
            }
            
           }

        </script>
    </body>
</html>