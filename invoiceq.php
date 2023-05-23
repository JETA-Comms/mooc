<?php include_once "serverq.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JETA course invoice</title>
    <link rel="stylesheet" href="invoiceq.css">

</head>
<body>
    <div class="container">
        <div class="containers">
           <div class="content">
                <div class="header-left">
                    <div class="heading-2">
                        <h3 class="h3">E-INVOICE</h3>
                        <img src="JETA LOGO new.png" width="30%">
                    </div>
                    <div class="head">
                        <div class="heading">
                            <div class="heading-1">
                                <h2>JETA Communications Tech Hub</h2>
                            </div>
                            
                        </div>
                        <div class="address">
                            <div class="add">
                                <b>Plot 36,Great Estate (phase 1) <br>Ashore,Atan Ota,Ogun State Nigeria</b>
                            </div>
                            <div class="phail">
                                <p>Phone: 08101096623, 08171074476</p>
                                <p>Mail: jetacomms@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <b>Invoice No: <?php //echo $_SESSION('id'); ?></b>
                    <b>Date: <?php echo date('d/m/Y'); ?></b>
                </div>
           </div>

            <div class="table">
                <div class="bill">
                    <P>Bill To: <b><?php echo $_SESSION['surname']; ?> <?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['othername']; ?></b></P>
                    <p>Phone: <?php echo $_SESSION['phone']; ?></p>
                </div>
                <div class="coil">
                    <P>Email: <a href="mailto:<?php echo $_SESSION['email']; ?>"><?php echo $_SESSION['email']; ?></a></P>
                    <p>Course: <?php echo $_SESSION['course']; ?></p>
                </div>
            </div>
            <table class="table-hero">
                <tr>
                    <th>S/N</th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Unit price</th>
                    <th>Total price</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Application Form fee</td>
                    <td>1</td>
                    <td>1,000</td>
                    <td>1,000</td>
                    
                </tr>
                
            </table>
            <div class="grand-total">
                <p>SUB TOTAL: <strong>1,000</strong></p>
                <p>VAT:</p>
                <p>GRAND TOTAL: <strong>1,000</strong></p>
            </div>
            <div class="payment-section">
                <div class="account-details">
                    <div class="account">
                        <h3>ACCOUNT DETAILS</h3>
                    </div>
                    <p>Account Number: <strong>0052681732</strong></p>
                    <p>Account Name: <strong>JETA Communications</strong></p>
                    <p>Bank Name: <strong>Access Bank</strong></p>
                </div>
                <button class="sub">Pay With Card</button>
            </div>
            <div class="footer-part">
                <div class="footer-left">
                    <p>Thanks for choosing us!</p>
                </div>
                <div class="footer-right">
                    <p><em>We pledge to always give you <br>
                    cutting-edge services</em></p>
                    <span>JETA Communications</span>
                </div>
    
            </div>
        </div>
    </div>
        <div>
            <button onclick="window.print()">Print</button>
        </div>
    

           

</body>
</html>