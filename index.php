<?php
// Starting session
session_start();
date_default_timezone_set('Europe/Rome'); 

if ($_SESSION["passphrase"]=='' || $_SESSION["passphrase"]==NULL || $_SESSION["passphrase"]=='0'){
$passphrase=$_POST['passphrase'];

if ($passphrase=='' || $passphrase==NULL){
$passphrase='0';
 } 
 
$_SESSION["passphrase"] = $passphrase;
 } 
?>	

<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="UTF-8">
		<title>CRYT Messenger - CRYT Blockchain Messaging System - Welcome to Future.</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="CryTrEx, CRYT, Pos, Blockchain, decentralized asset exchange, alias, account control, decentralized data storage system, decentralized voting system, decentralized anonymous privacy">
    <meta name="author" content="support@crytrex.com">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.ico" type="image/ico" />
		<!-- CSS -->
		<!-- Bootstrap -->
    <link href="assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="assets/fonts/cryptocoins.css" rel="stylesheet">
		<!-- Simple line icons -->
		<link href="assets/css/simple-line-icons.css" rel="stylesheet">
    <!-- Font awesome icons -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome-animation.min.css" rel="stylesheet">
		<!-- Custom Style -->
    <link href="assets/plugins/select2/select2.min.css" rel="stylesheet">
	<link href="assets/css/custom.css" rel="stylesheet">
    <link id="ui-current-skin" href="assets/css/skin-colors/skin-green.css" rel="stylesheet">
    <link href="assets/css/media.css" rel="stylesheet">
    <!-- Charts -->
    <link href="assets/plugins/rickshaw/rickshaw.min.css" rel="stylesheet">
    <!-- Custom Font -->
    <link href="assets/css/css.css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	</head>
  <body class="nav-md preloader-off">
    <div class="pace-cover"></div>
    <div id="st-container" class="st-container st-effect">
      <!-- MAIN PAGE CONTAINER -->
      <div class="container body">
        <div class="main_container">
          <!-- LEFT PRIMARY NAVIGATION -->
          <div class="col-md-3 left_col">
            <div class="scroll-view">
              <div class="navbar nav_title">
                <h1 class="logo_wrapper">
                  <a href="index" class="site_logo">
                    <img class="logo" src="assets/images/logo1.png" alt="CRYT logo">
                    <span class="logo-text"><img class="logo" src="assets/images/msgtop.png" alt="CRYT Messenger Logo"></span>
                  </a>
                </h1>
              </div>
              <div class="clearfix"></div>
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
				   <h3>CRYT Messenger</h3>
                  <ul class="nav side-menu">
							<?php if($_SESSION["passphrase"]!='0'){?>
                            <li><a href="#myModal" data-toggle="modal" title="Compose">
                                <i class="icon-note icons"></i> <span>Compose</span>
                            </a></li>
							<li><a href="logout.php" title="Logout">
                                <i class="icon-logout icons"></i> <span>Logout</span>
                            </a></li>
							<?php } else { ?>		
                            <li><a href="#login" data-toggle="modal" title="Compose">
                                <i class="icon-login icons"></i> <span>Login</span>
                            </a>		</li>	
							<?php } ?>	
                  </ul>
                </div>

                <div class="menu_section">
				   <h3>CRYT Chat</h3>
                  <ul class="nav side-menu">
                  <li><a href="?page=public"><i class="icon-people icons"></i> <span>Public</span> <span class="label label-success pull-right" id="countmsg"></span></a></li>
                  <li><a href="?page=inbox"><i class="icon-envelope-letter icons"></i> <span>Inbox</span> <span id="countmsgin"></span></a></li>
                  <li><a href="?page=outbox"><i class="icon-envelope-open icons"></i> <span>Outbox</span></a></li>
                  <li><a href="?page=support"><i class="icon-support icons"></i> <span>Support</span> <span id="countmsgin1"></span></a></li>
                  </ul>
                </div>


                <div class="menu_section">
				   <h3>Utils</h3>
                  <ul class="nav side-menu">
					<li><a data-toggle="tooltip" id="btnFullscreen"><i class="icon-size-fullscreen icons"></i> <span>Full Screen</span></a></li>
                  </ul>
                </div>

              </div>
              <!-- /sidebar menu -->

              <!-- /menu footer buttons -->
            </div>
          </div>
          <!-- TOP SECONDARY NAVIGATION --><header>
          <div class="top_nav">
            <div class="nav_menu">
              <ul class="nav navbar-nav navbar-left">
                <li class="toggle-li">
                  <div class="nav toggle burger-nav">
                    <a id="menu_toggle">
                      <div class="burger">
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="dropdown-menu-1-li">
                  <div class="dropdown-menu-1 dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-feed icons"></i> Nodes
                    <span class="fa fa-angle-down"></span></a>
                    <ul class="dropdown-menu archive">
                      <li id="nodestx">...</li>
                    </ul>
                  </div>
                </li>
				 <li class="dropdown-menu-1-li">
                  <div class="dropdown-menu-1 dropdown">
                    <a href="https://cryt.crytrex.com/explorer" target="_blank" class="dropdown-toggle"><i class="icon-grid icons"></i> CRYT Blocks Height: <span id="getstatetx">.....</span></a>
                  </div>
                </li>
              </ul>  <!-- top menu ul -->
              <ul class="nav navbar-nav navbar-right">

					<li><a href="#"><div id="google_translate_element"></div> 
<script type="text/javascript">  
        function googleTranslateElementInit() {  
            new google.translate.TranslateElement( 
                {pageLanguage: 'en'},  
                'google_translate_element' 
            );  
        }  
    </script>  
      
    <script type="text/javascript" src= 
"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"> 
    </script>      </a></li>
              </ul>
            </div>
          </div>
		  </header>
		  	
<link href="assets/plugins/mailbox/mailbox.css" rel="stylesheet">
<link href="assets/js/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>

         
          <!-- PAGE CONTENT -->
          <div class="right_col" role="main">
            <div class="header-title-breadcrumb element-box-shadow">
              <div class="container">
                  <div class="row">
                      <div class="col-md-7 col-sm-6 col-xs-12 text-left">
                        <h3><img src="assets/images/msgcryt.png" alt="CRYT Messenger" /></h3>
                      </div>
                      <div class="col-md-5 col-sm-6 col-xs-12">
                          <ol class="breadcrumb text-right">
							<?php if($_SESSION["passphrase"]!='0'){?>
						<li><h5>Your Account: <span id="getcrytaddr"></span></h5>
					    <h5>Balance: <span id="getcrytbalance"></span> CRYT</h5></li>
							<?php } else { ?>		
<li><i class="icon-question icons"></i> Welcome to CRYT Messenger<br />
You can Send, Receive and Chat with any other members<br>
with Messages sent over CRYT Blockchain</li>				
							<?php } ?>							  
                          </ol>                    
                      </div>
                  </div>
              </div>
            </div>
            <div class="spacer_15"></div>
            <div class="clearfix"></div>
            <div class="container">
              <div class="row">
                <div class="mail-box">
                  <div class="col-md-12 col-lg-3">
                    <aside class="sm-side">
                        <div class="inbox-body element-box-shadow">
							<?php if($_SESSION["passphrase"]!='0'){?>
                            <a href="#myModal" data-toggle="modal" title="Compose" class="btn btn-compose text-bold">
                                <i class="icon-note icons"></i> Compose
                            </a>
							<a href="logout.php" title="Logout" class="btn btn-danger text-bold">
                                <i class="icon-logout icons"></i> Logout
                            </a>
							<?php } else { ?>		
                            <a href="#login" data-toggle="modal"  title="Compose" class="btn btn-compose text-bold">
                                <i class="icon-login icons"></i> Login
                            </a>			
							<?php } ?>							  

                            <!-- Modal -->
                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                            <h4 class="modal-title"><i class="icon-note icons"></i> Compose</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" class="form-horizontal" id="directmsgform" name="directmsgform" >
                                                <div class="form-group form-focus">
                                                    <label class="col-lg-2 control-label">To</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" id="directmsgaddress" name="directmsgaddress" pattern="[^'\x22]+" maxlength="25" placeholder="" class="form-control" value="CRYT-BUYH-6XGS-3ZE8-7DX7X">
                                                    </div>
                                                </div>
                                                <div class="form-group form-focus">
                                                    <label class="col-lg-2 control-label">Message</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="directmsg" id="directmsg" maxlength="65" pattern="[^'\x22]+" class="form-control" placeholder="Write your message here..." required>
														<input type="hidden" name="directmsgpassphrase" id="directmsgpassphrase" value="<?php echo $_SESSION["passphrase"]; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success button-element" name="directform" id="directform" type="submit"><i class="icon-envelope-letter icons"></i> Send Message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
							                            <!-- Modal -->
                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="login" class="modal fade" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                            <h4 class="modal-title"><i class="icon-login icons"></i> Login</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" class="form-horizontal" method="POST">
                                                <div class="form-group form-focus">
                                                    <div class="col-lg-12">
                                                        <input type="password" class="form-control" placeholder="Your CRYT PassPhrase" name="passphrase" value="" id="passphrase" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-0 col-lg-12">
                                                        <button class="btn btn-success button-element" type="submit"><i class="icon-lock icons"></i> Secure Login</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->														
                        </div>
                        <div class="inbox-mail-nav element-box-shadow">
						 <h4 class="no-margin text-bold padding_30">Open Chat Groups </h4>
                          <ul class="nav nav-pills nav-stacked labels-info" >
<!-- CRYT GROUP edit group name and creatore to point existing and active wallets to allow public chat -->
<li><a href='?page=group&group=CRYT-BUYH-6XGS-3ZE8-7DX7X&creator=CRYT-8HMW-2CYN-ZHB8-5Q3Q5'><i class='fa fa-circle text-success'></i>Official CRYT Group<p>CRYT-BUYH-6XGS-3ZE8-7DX7X</p></a></li>
                         </ul>
                          <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                         <h5><i class="icon-info icons"></i> Tips</h5>
                              <p> <i class="icon-note icons text-success"></i> Send Message to specified Address</p>
                              <p> <i class="icon-present icons text-success"></i> Click send 1 CRYT to specified address </p>
                              <p> <i class="icon-credit-card icons text-alert"></i> Public Message Fees 1.01 CRYT </p>
                              <p> <i class="icon-credit-card icons text-alert"></i> Private Encrypted Message Fees 2.01 CRYT </p>
                              <p> <i class="icon-flag icons text-info"></i> Fees is for Transaction and Sent to Blockchain </p>
                          </ul>
                        </div>
                    </aside>
                  </div>
                  <div class="col-md-12 col-lg-9">
                    <aside class="lg-side">
                      <div class="clearfix"></div>
                      <div class="spacer_30"></div>
                      <div class="inbox-body element-box-shadow  padding_30">
					  <h5 class="no-margin text-bold" id="chatinfo"></h5>
                         <div class="spacer_30"></div>
                         <div class="clearfix"></div>
                         <div class="mailbox-table">
                          <table class="table table-inbox table-hover">
                            <tbody id="getchat">
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </aside>
                  </div>
                </div>
              </div>
            </div>
            <a href="#" class="scrollToTop"><i class="fa fa-chevron-up text-white" aria-hidden="true"></i></a>
      <!-- JS SCRIPTS -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrollbar.min.js"></script>
      <script src="assets/plugins/modernizr/modernizr.custom.js"></script>
      <script src="assets/plugins/classie/classie.js"></script>  
      <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
      <script src="assets/plugins/select2/select2.min.js"></script>
      <!-- Custom Theme Scripts -->
      <script src="assets/js/custom.min.js"></script>
	  <script type="text/javascript" src="qrcode.js"></script>
      <script type="text/javascript" src="crytjs.js"></script> 
<script src="assets/js/sweetalert/sweetalert.min.js"></script>
      <script>
	          $(function(){
            $("#directmsgform").on("submit", function(event) {
                event.preventDefault();
				$('#myModal').modal('toggle');
				$('#directform').prop('disabled', true);
                var inputdata = $("#directmsgform").serialize();
                $.ajax({
                    url: "directmsgform.php",
                    type: "post",
                    data: inputdata,
                    success: function(data) {                            

                        if (data==0) {
							swal({
                            title: "Success!",
                            text: "Chat Message Sent! Wait some Seconds until message will be Visible",
                            type: "success",
                            showConfirmButton: false,
                            timer: 5000,
                        });
                        }else if (data==1) {
							swal({
                            title: "Wops!",
                            text: "Something Wrong! Try Again.",
                            type: "error",
                            showConfirmButton: false,
                            timer: 5000
                        });
                        }else if (data==2) {
							swal({
                            title: "Wops!",
                            text: "Something Wrong! Try Again.",
                            type: "error",
                            showConfirmButton: false,
                            timer: 5000
                        });
                        }else {

							swal({
                            title: "Good job!",
                            text: "Chat Message Sent! Wait some Seconds until message will be Visible",
                            type: "success",
                            showConfirmButton: false,
                            timer: 5000,
                        });
                        }
                        document.getElementById("directmsgform").reset();
				$('#directform').prop('disabled', false);
                    },
					
                });
            });
        });
</script>	

<?php if ($_GET['page']=='' || $_GET['page']==NULL || $_GET['page']=='public'){ ?>
<script type="text/javascript">
		 $(document).ready( function() {
		    done77();
			loadchat();
        });
            
        function done77() {
            setInterval( function() {         
            loadchat(); 
            }, 10000);
        }
		
function loadchat() {
var acc = crytjs.secretPhraseToAccountId('<?php echo $_SESSION["passphrase"]; ?>');
$("#chatinfo").empty();
$("#chatinfo").append("Official CRYT Public Group - CRYT-BUYH-6XGS-3ZE8-7DX7X <a href='#' onClick='loadmsg(\"CRYT-BUYH-6XGS-3ZE8-7DX7X\");' data-toggle='modal' data-target='#myModal'><i class='icon-note icons'></i></a>");

$.getJSON('https://wallet.crytrex.com/nxt?requestType=getBlockchainTransactions&account=CRYT-BUYH-6XGS-3ZE8-7DX7X&type=1&subtype=0&withMessage=true&includeExpiredPrunable=false', function(data) {
$("#getchat").empty();
var countKey = Object.keys(data.transactions).length;
$("#countmsg").empty();
$("#countmsg").append(countKey);

$.each(data.transactions, function(index, element){
  unixtimestamp = element.blockTimestamp + 1500278400;
 // Months array
  months_arr = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 // Convert timestamp to milliseconds
 date = new Date(unixtimestamp*1000);
 // Year
 year = date.getFullYear();
 // Month
 month = months_arr[date.getMonth()];
 // Day
 day = date.getDate();
 // Hours
 hours = date.getHours();
 // Minutes
 minutes = "0" + date.getMinutes();
 // Seconds
 seconds = "0" + date.getSeconds();
 // Display date time in MM-dd-yyyy h:m:s format
 convdataTime = month+'-'+day+'-'+year+' '+hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);

if (element.attachment.message){
if (element.senderRS == 'CRYT-8HMW-2CYN-ZHB8-5Q3Q5' || element.senderRS == 'CRYT-M36K-8VEV-XYT9-5TXTK'){
type = '<span class="label label-success pull-right">CRYT Support Team</span>';
} else if (element.senderRS == acc) {
type = '<span class="label label-warning pull-right">YOU</span>';
} else {
type = '';
}
$("#getchat").append("<tr class=''><td class='view-message'><i class='icon-envelope-open icons'></i> "+ element.attachment.message +" "+type+"</td><td class='view-message text-right'><a href='#' onClick='loadmsg(\""+ element.senderRS +"\");' data-toggle='modal' data-target='#myModal'><i class='icon-note icons'></i></a> "+ element.senderRS +" <a href='#' onClick='tipscryt(\""+ element.senderRS +"\");'><i class='icon-present icons'></i></a></td><td class='view-message text-right'><i class='icon-clock icons'></i> "+ convdataTime +"</td></tr>");
}


else {
type = '<span class="label label-success pull-right">Encrypted</span>';

$("#getchat").append("<tr class=''><td class='view-message'><i class='icon-envelope-open icons'></i> Unable to show Encrypted Message Here "+type+"</td><td class='view-message text-right'><a href='#' onClick='loadmsg(\""+ element.senderRS +"\");' data-toggle='modal' data-target='#myModal'><i class='icon-note icons'></i></a> "+ element.senderRS +" <a href='#' class='btn btn-primary btn-xs button-element' onClick='tipscryt(\""+ element.senderRS +"\");'><i class='icon-present icons'></i></a></td><td class='view-message text-right'><i class='icon-clock icons'></i> "+ convdataTime +"</td></tr>");

}

                });
            });
			
        }		

		</script>
<?php } ?>

<script type="text/javascript">
        $(document).ready( function() {
		    done029();
			getAccount();
        });
            
        function done029() {
            setInterval( function() {         
            getAccount(); 
            }, 11000);
        }

		        function getAccount() {
				var acc = crytjs.secretPhraseToAccountId('<?php echo $_SESSION["passphrase"]; ?>');
                $.getJSON('https://wallet.crytrex.com/nxt?requestType=getAccount&account='+ acc +'&v='+Math.floor(Math.random() * 101)+'', function(empo) {
				$('#walletaddress').html(acc); 
				if (!empo.balanceNQT) {
                    $('#balance').html('<b>0</b>');
					$("#getcrytbalance").empty(); 
				    $("#getcrytbalance").append("0");
				    $("#getcrytaddr").empty(); 
				    $("#getcrytaddr").append(acc);
					} else {
                    $('#balance').html('<b>' + empo.balanceNQT/100000000 + '</b>');
					$("#getcrytbalance").empty(); 
				    $("#getcrytbalance").append(empo.balanceNQT/100000000);
				    $("#getcrytaddr").empty(); 
				    $("#getcrytaddr").append(acc);
}
                }); 
        }
		</script>
		
<script type="text/javascript">
function tipscryt(chataddress) {
 $.ajax({
        async: true,
        url : "sendcrytform.php",
        type : "post",
        dataType : "json",
        data : {'sendamount': '1', 'sendaddress': chataddress, 'sendpass' : '<?php echo $_SESSION["passphrase"]; ?>' },
        success: function(data) {
		if (data==0) {
							swal({
                            title: "Success!",
                            text: "1 CRYT Sent to "+ chataddress +"",
                            type: "success",
                            showConfirmButton: false,
                            timer: 3000,
                        });
                        }else if (data==1) {
							swal({
                            title: "Wops!",
                            text: "Something Wrong! Try Again.",
                            type: "error",
                            showConfirmButton: false,
                            timer: 3000
                        });
                        }else if (data==2) {
							swal({
                            title: "Wops!",
                            text: "Something Wrong! Try Again.",
                            type: "error",
                            showConfirmButton: false,
                            timer: 3000
                        });
                        }else {

							swal({
                            title: "Good job!",
                            text: "1 CRYT Sent to "+ chataddress +"",
                            type: "success",
                            showConfirmButton: false,
                            timer: 3000,
                        });
                        }
						}
    });				
	
        }	
				
</script>

<?php if ($_GET['page']=='inbox' || $_GET['page']=='outbox'){ ?>
<script type="text/javascript">
		 $(document).ready( function() {
		    done77();
			loadchat();
        });
            
        function done77() {
            setInterval( function() {         
            loadchat(); 
            }, 20000);
        }
		
function loadchat() {
var acc = crytjs.secretPhraseToAccountId('<?php echo $_SESSION["passphrase"]; ?>');
$("#chatinfo").empty();
<?php if ($_GET['page']=='inbox'){ ?>
$("#chatinfo").append("Your Incoming Messages");
<?php } else { ?>
$("#chatinfo").append("Your Outcoming Messages");
<?php } ?>	


$.getJSON('https://wallet.crytrex.com/nxt?requestType=getBlockchainTransactions&account='+ acc +'&type=1&subtype=0&withMessage=true&includeExpiredPrunable=false', function(data) {
$("#getchat").empty();
var countKey = Object.keys(data.transactions).length;
$("#countmsgin").empty();
if (countKey > 0) {
$("#countmsgin").append("<span class='label label-success pull-right'>New Message</span>");
} else {
$("#countmsgin").append("<span class='label label-danger pull-right'>No Message</span>");

}
$.each(data.transactions, function(index, element){

if (element.attachment.message && element.senderRS == acc){
} else if (element.attachment.message && element.recipientRS == acc) {
} else if (element.senderRS == acc) {
$.getJSON('https://wallet.crytrex.com/nxt?requestType=decryptFrom&account='+element.recipientRS+'&data='+element.attachment.encryptedMessage.data+'&nonce='+element.attachment.encryptedMessage.nonce+'&decryptedMessageIsText=true&secretPhrase=<?php echo $_SESSION["passphrase"]; ?>', function(data1) {
  unixtimestamp = element.blockTimestamp + 1500278400;
 // Months array
  months_arr = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 // Convert timestamp to milliseconds
 date = new Date(unixtimestamp*1000);
 // Year
 year = date.getFullYear();
 // Month
 month = months_arr[date.getMonth()];
 // Day
 day = date.getDate();
 // Hours
 hours = date.getHours();
 // Minutes
 minutes = "0" + date.getMinutes();
 // Seconds
 seconds = "0" + date.getSeconds();
 // Display date time in MM-dd-yyyy h:m:s format
 convdataTime = month+'-'+day+'-'+year+' '+hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
<?php if ($_GET['page']=='inbox'){ ?>

<?php } else { ?>
 // edit CRYT-8HMW-2CYN-ZHB8-5Q3Q5 and CRYT-M36K-8VEV-XYT9-5TXTK to your CRYT wallet address as Support or Admin
if (element.recipientRS == 'CRYT-8HMW-2CYN-ZHB8-5Q3Q5' || element.recipientRS == 'CRYT-M36K-8VEV-XYT9-5TXTK'){
type = '<span class="label label-success pull-right">CRYT Support Team</span> <span class="label label-info pull-right"><i class="icon-lock icons"></i> Crypted</span>';
} else {
type = '<span class="label label-info pull-right"><i class="icon-lock icons"></i> Crypted</span>';
}

$("#getchat").append("<tr class=''><td class='view-message'><i class='icon-envelope-open icons'></i> "+ data1.decryptedMessage +" "+type+"</td><td class='view-message text-right'>to: <a href='#' onClick='loadmsg(\""+ element.recipientRS +"\");' data-toggle='modal' data-target='#myModal'><i class='icon-note icons'></i></a> "+ element.recipientRS +" </td><td class='view-message text-right'><i class='icon-clock icons'></i> "+ convdataTime +"</td></tr>");
<?php } ?>	

});
} else if (element.recipientRS == acc) {
$.getJSON('https://wallet.crytrex.com/nxt?requestType=decryptFrom&account='+element.senderRS+'&data='+element.attachment.encryptedMessage.data+'&nonce='+element.attachment.encryptedMessage.nonce+'&decryptedMessageIsText=true&secretPhrase=<?php echo $_SESSION["passphrase"]; ?>', function(data2) {
  unixtimestamp = element.blockTimestamp + 1500278400;
 // Months array
  months_arr = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 // Convert timestamp to milliseconds
 date = new Date(unixtimestamp*1000);
 // Year
 year = date.getFullYear();
 // Month
 month = months_arr[date.getMonth()];
 // Day
 day = date.getDate();
 // Hours
 hours = date.getHours();
 // Minutes
 minutes = "0" + date.getMinutes();
 // Seconds
 seconds = "0" + date.getSeconds();
 // Display date time in MM-dd-yyyy h:m:s format
 convdataTime = month+'-'+day+'-'+year+' '+hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
<?php if ($_GET['page']=='inbox'){ ?>
 // edit CRYT-8HMW-2CYN-ZHB8-5Q3Q5 and CRYT-M36K-8VEV-XYT9-5TXTK to your CRYT wallet address as Support or Admin
if (element.senderRS == 'CRYT-8HMW-2CYN-ZHB8-5Q3Q5' || element.senderRS == 'CRYT-M36K-8VEV-XYT9-5TXTK'){
type = '<span class="label label-success pull-right">CRYT Support Team</span> <span class="label label-info pull-right"><i class="icon-lock icons"></i> Crypted</span>';
} else {
type = '<span class="label label-info pull-right"><i class="icon-lock icons"></i> Crypted</span>';
}

$("#getchat").append("<tr class=''><td class='view-message'><i class='icon-envelope-open icons'></i> "+ data2.decryptedMessage +" "+type+"</td><td class='view-message text-right'>from: <a href='#' onClick='loadmsg(\""+ element.senderRS +"\");' data-toggle='modal' data-target='#myModal'><i class='icon-note icons'></i></a> "+ element.senderRS +"  <a href='#' onClick='tipscryt(\""+ element.senderRS +"\");'><i class='icon-present icons'></i></a></td><td class='view-message text-right'><i class='icon-clock icons'></i> "+ convdataTime +"</td></tr>");
<?php } else { ?>

<?php } ?>	
});
}
else {
$("#getchat").prepend("<tr class=''><td class='view-message'><i class='icon-envelope-open icons'></i> No Message Found</td><td class='view-message text-right'><i class='icon-user icons'></i> "+ acc +"  </td><td class='view-message text-right'><i class='icon-clock icons'></i> Until Now</td></tr>");

}
                });
            });
			
        }		

		</script>
<?php } ?>
<script type="text/javascript">
function loadmsg(chataddress) {
document.getElementById("directmsgaddress").value = chataddress;		
        }		
		</script>
	

<?php if ($_GET['page']=='support'){ ?>
<script type="text/javascript">
		 $(document).ready( function() {
		    done77();
			loadchat();
        });
            
        function done77() {
            setInterval( function() {         
            loadchat(); 
            }, 20000);
        }
		
function loadchat() {
 // edit CRYT-8HMW-2CYN-ZHB8-5Q3Q5 to your CRYT wallet address as Support or Admin
document.getElementById("directmsgaddress").value = 'CRYT-8HMW-2CYN-ZHB8-5Q3Q5';		

var acc = crytjs.secretPhraseToAccountId('<?php echo $_SESSION["passphrase"]; ?>');
$("#chatinfo").empty();
 // edit CRYT-8HMW-2CYN-ZHB8-5Q3Q5 to your CRYT wallet address as Support or Admin
$("#chatinfo").append("CRYT Support Chat - CRYT-8HMW-2CYN-ZHB8-5Q3Q5 <a href='#' onClick='loadmsg(\"CRYT-8HMW-2CYN-ZHB8-5Q3Q5\");' data-toggle='modal' data-target='#myModal'><i class='icon-note icons'></i></a>");


$.getJSON('https://wallet.crytrex.com/nxt?requestType=getBlockchainTransactions&account='+ acc +'&type=1&subtype=0&withMessage=true&includeExpiredPrunable=false', function(data) {
$("#getchat").empty();
var countKey = Object.keys(data.transactions).length;
$("#countmsgin1").empty();
if (countKey > 0) {
$("#countmsgin1").append("<span class='label label-info pull-right'>Chat with Devs</span>");
} else {
$("#countmsgin1").append("<span class='label label-info pull-right'>Chat with Devs</span>");

}
$.each(data.transactions, function(index, element){

if (element.attachment.message && element.senderRS == acc){
} else if (element.attachment.message && element.recipientRS == acc) {
 // edit CRYT-8HMW-2CYN-ZHB8-5Q3Q5 to your CRYT wallet address as Support or Admin
} else if (element.senderRS == acc && element.recipientRS == 'CRYT-8HMW-2CYN-ZHB8-5Q3Q5' || element.recipientRS == acc &&  element.senderRS == 'CRYT-8HMW-2CYN-ZHB8-5Q3Q5') {
if (element.senderRS == acc && element.recipientRS == 'CRYT-8HMW-2CYN-ZHB8-5Q3Q5') {
$.getJSON('https://wallet.crytrex.com/nxt?requestType=decryptFrom&account='+element.recipientRS+'&data='+element.attachment.encryptedMessage.data+'&nonce='+element.attachment.encryptedMessage.nonce+'&decryptedMessageIsText=true&secretPhrase=<?php echo $_SESSION["passphrase"]; ?>', function(data1) {
  unixtimestamp = element.blockTimestamp + 1500278400;
 // Months array
  months_arr = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 // Convert timestamp to milliseconds
 date = new Date(unixtimestamp*1000);
 // Year
 year = date.getFullYear();
 // Month
 month = months_arr[date.getMonth()];
 // Day
 day = date.getDate();
 // Hours
 hours = date.getHours();
 // Minutes
 minutes = "0" + date.getMinutes();
 // Seconds
 seconds = "0" + date.getSeconds();
 // Display date time in MM-dd-yyyy h:m:s format
 convdataTime = month+'-'+day+'-'+year+' '+hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);

type = '<span class="label label-info pull-right"><i class="icon-lock icons"></i> Crypted</span>';

$("#getchat").append("<tr class=''><td class='view-message'><i class='icon-envelope-open icons'></i> "+ data1.decryptedMessage +" "+type+"</td><td class='view-message text-right'>to: <a href='#' onClick='loadmsg(\""+ element.recipientRS +"\");' data-toggle='modal' data-target='#myModal'><i class='icon-note icons'></i></a> "+ element.recipientRS +" </td><td class='view-message text-right'><i class='icon-clock icons'></i> "+ convdataTime +"</td></tr>");
});
 // edit CRYT-8HMW-2CYN-ZHB8-5Q3Q5 to your CRYT wallet address as Support or Admin
} else if (element.recipientRS == acc &&  element.senderRS == 'CRYT-8HMW-2CYN-ZHB8-5Q3Q5') {
$.getJSON('https://wallet.crytrex.com/nxt?requestType=decryptFrom&account='+element.senderRS+'&data='+element.attachment.encryptedMessage.data+'&nonce='+element.attachment.encryptedMessage.nonce+'&decryptedMessageIsText=true&secretPhrase=<?php echo $_SESSION["passphrase"]; ?>', function(data2) {
  unixtimestamp = element.blockTimestamp + 1500278400;
 // Months array
  months_arr = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 // Convert timestamp to milliseconds
 date = new Date(unixtimestamp*1000);
 // Year
 year = date.getFullYear();
 // Month
 month = months_arr[date.getMonth()];
 // Day
 day = date.getDate();
 // Hours
 hours = date.getHours();
 // Minutes
 minutes = "0" + date.getMinutes();
 // Seconds
 seconds = "0" + date.getSeconds();
 // Display date time in MM-dd-yyyy h:m:s format
 convdataTime = month+'-'+day+'-'+year+' '+hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
  // edit CRYT-8HMW-2CYN-ZHB8-5Q3Q5 to your CRYT wallet address as Support or Admin
if (element.senderRS == 'CRYT-8HMW-2CYN-ZHB8-5Q3Q5'){
type = '<span class="label label-success pull-right">CRYT Support Team</span> <span class="label label-info pull-right"><i class="icon-lock icons"></i> Crypted</span>';
} else {
type = '<span class="label label-info pull-right"><i class="icon-lock icons"></i> Crypted</span>';
}

$("#getchat").append("<tr class=''><td class='view-message'><i class='icon-envelope-open icons'></i> "+ data2.decryptedMessage +" "+type+"</td><td class='view-message text-right'>from: <a href='#' onClick='loadmsg(\""+ element.senderRS +"\");' data-toggle='modal' data-target='#myModal'><i class='icon-note icons'></i></a> "+ element.senderRS +"  <a href='#' onClick='tipscryt(\""+ element.senderRS +"\");'><i class='icon-present icons'></i></a></td><td class='view-message text-right'><i class='icon-clock icons'></i> "+ convdataTime +"</td></tr>");
});
}
} else {

}
                });
            });
			
        }		

		</script>



<?php } ?>		


		
<?php if ($_GET['page']=='group' && $_GET['group']!=NULL || $_GET['group']!=''){ ?>
<script type="text/javascript">
		 $(document).ready( function() {
		    done77();
			loadchat();
        });
            
        function done77() {
            setInterval( function() {         
            loadchat(); 
            }, 10000);
        }
		
function loadchat() {
var groupaddr = '<?php echo $_GET['group']; ?>';
var creatoraddr = '<?php echo $_GET['creator']; ?>';
document.getElementById("directmsgaddress").value = groupaddr;		

var acc = crytjs.secretPhraseToAccountId('<?php echo $_SESSION["passphrase"]; ?>');
$("#chatinfo").empty();
$("#chatinfo").append("Official CRYT Public Group - "+ groupaddr +" <a href='#' onClick='loadmsg(\""+ groupaddr +"\");' data-toggle='modal' data-target='#myModal'><i class='icon-note icons'></i></a>");

$.getJSON('https://wallet.crytrex.com/nxt?requestType=getBlockchainTransactions&account='+ groupaddr +'&type=1&subtype=0&withMessage=true&includeExpiredPrunable=false', function(data) {
$("#getchat").empty();
var countKey = Object.keys(data.transactions).length;
$("#countmsg").empty();
$("#countmsg").append(countKey);

$.each(data.transactions, function(index, element){
  unixtimestamp = element.blockTimestamp + 1500278400;
 // Months array
  months_arr = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 // Convert timestamp to milliseconds
 date = new Date(unixtimestamp*1000);
 // Year
 year = date.getFullYear();
 // Month
 month = months_arr[date.getMonth()];
 // Day
 day = date.getDate();
 // Hours
 hours = date.getHours();
 // Minutes
 minutes = "0" + date.getMinutes();
 // Seconds
 seconds = "0" + date.getSeconds();
 // Display date time in MM-dd-yyyy h:m:s format
 convdataTime = month+'-'+day+'-'+year+' '+hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);

if (element.attachment.message){
if (element.senderRS == creatoraddr){
type = '<span class="label label-success pull-right">Group Admin</span>';
} else if (element.senderRS == acc) {
type = '<span class="label label-warning pull-right">YOU</span>';
} else {
type = '';
}
$("#getchat").append("<tr class=''><td class='view-message'><i class='icon-envelope-open icons'></i> "+ element.attachment.message +" "+type+"</td><td class='view-message text-right'><a href='#' onClick='loadmsg(\""+ element.senderRS +"\");' data-toggle='modal' data-target='#myModal'><i class='icon-note icons'></i></a> "+ element.senderRS +" <a href='#' onClick='tipscryt(\""+ element.senderRS +"\");'><i class='icon-present icons'></i></a></td><td class='view-message text-right'><i class='icon-clock icons'></i> "+ convdataTime +"</td></tr>");
}


else {
type = '<span class="label label-success pull-right">Encrypted</span>';

$("#getchat").append("<tr class=''><td class='view-message'><i class='icon-envelope-open icons'></i> Unable to show Encrypted Message Here "+type+"</td><td class='view-message text-right'><a href='#' onClick='loadmsg(\""+ element.senderRS +"\");' data-toggle='modal' data-target='#myModal'><i class='icon-note icons'></i></a> "+ element.senderRS +" <a href='#' class='btn btn-primary btn-xs button-element' onClick='tipscryt(\""+ element.senderRS +"\");'><i class='icon-present icons'></i></a></td><td class='view-message text-right'><i class='icon-clock icons'></i> "+ convdataTime +"</td></tr>");

}

                });
            });
			
        }		

		</script>
<?php } ?>





          <!-- PAGE FOOTER -->
          <footer>
		  <div class="text-center">
<script src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Mobile 2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2678760727259403"
     data-ad-slot="6727546348"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<br />
<br />
            <div class="text-center">
            &copy;2020 CRYT Messenger              powerd by:              <a href="https://cryt.crytrex.com" target="_blank"><img src="assets/images/logo.png" alt="CRYT Blockchain" width="202" height="50" border="0"></a> All Right Reserved.            </div>
            <div class="clearfix"></div>
			            <div class="text-center">
<a href="https://twitter.com/CRYT_Official" title="Twitter" target="_blank"><button class="social-media-circle twiter-social"><i class="fa fa-twitter" aria-hidden="true"></i></button></a>
<a href="https://www.facebook.com/crytrexcom/" title="Facebook" target="_blank"><button class="social-media-circle facebook-social"><i class="fa fa-facebook" aria-hidden="true"></i></button></a>
<a href="https://github.com/CryTrExcom" title="GitHub" target="_blank"><button class="social-media-circle github-social"><i class="fa fa-github" aria-hidden="true"></i></button></a>
<a href="https://www.reddit.com/user/CryTrEx" title="Reddit" target="_blank"><button class="social-media-circle flickr-social"><i class="icon-social-reddit icons" aria-hidden="true"></i></button></a>
<a href="https://www.youtube.com/channel/UCIPzMmaTYMlhPvY6aYUyTFQ" title="YouTube" target="_blank"><button class="social-media-circle youtube-social"><i class="fa fa-youtube" aria-hidden="true"></i></button></a>
<a href="https://discord.gg/gfkQZ9E" title="Discord" target="_blank"><button class="social-media-circle tumblr-social"><i class="icon-speech icons" aria-hidden="true"></i></button></a>
			  </div>
          </footer>
        </div>
        </div>
<!-- JS SCRIPTS -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-67830028-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-67830028-1');
</script>
    </div>
  </body>
</html>
<script type="text/javascript">
        $(document).ready( function() {
		    done02123();
			nodes();

        });
            
        function done02123() {
            setInterval( function() {         
            nodes(); 
            }, 60000);
        }

        function nodes() {
            $.getJSON('https://wallet.crytrex.com/nxt?requestType=getInboundPeers&includePeerInfo=true', function(data) {
                $("#nodestx").empty();
                $.each(data.peers, function(index, element){
                    $("#nodestx").prepend("<a href='#'><span class='pull-left'>"+ element.address +"</span> <span class='label label-success pull-right'>Version: "+ element.version +"</span></a>");
                });
            });
        }
		
    </script>
<script type="text/javascript">
        $(document).ready( function() {
		    done0212();
			getstate();
        });
            
        function done0212() {
            setInterval( function() {         
            getstate(); 
            }, 10000);
        }

		        function getstate() {
                $.getJSON('https://wallet.crytrex.com/nxt?&requestType=getState', function(empo) { 		
                    $('#getstatetx').html('<b>' + empo.numberOfBlocks + '</b>'); 
                }); 
        }

		
    </script>