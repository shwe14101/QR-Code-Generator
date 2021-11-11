

<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QR-CODE</title>
    <meta name="description" content="QR GENERATOR">
    <link rel="stylesheet" href="bootstrap.min.css">
 
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>




    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

    
        
<?php
$msg="";
$im="";
if(isset($_POST['submit']))
{
    $msg = $_POST['msg'];
    $im="https://chart.googleapis.com/chart?chs=600x500&cht=qr&chl=".$msg."&choe=UTF-8";
}

;?>
      

        
        <div class="content mt-3">
            <div class="animated fadeIn">

                

                    <div class=" col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>QR-CODE</strong> <small>DETAILS</small>
                            </div>
                            <form method="post">
                            <div class="card-body card-block">  
                                <div class="form-group">
                                    <label class=" form-control-label">Enter Message</label>
                                    <div class="input-group">
                                        <textarea name="msg" class="form-control"><?php echo $msg;?></textarea>
                                    </div>
                                </div>
                                
                                <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                                    
                                    <span id="payment-button-amount">Submit</span>
                                    
                                </button>                                                             
                            </div>
                            </form>
                        </div>
                    </div>
                    <center><?php if($im!=''){?><img src="<?php echo $im;?>" alt="" ><?php } ?></center>

               
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    

</body>

</html>
