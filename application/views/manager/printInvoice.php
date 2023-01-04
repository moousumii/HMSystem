<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice - City Hostel</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <style>
    *{
        padding:0px;
        margin:0px;
    }
    /* cyrillic-ext */
            @font-face {
              font-family: 'Roboto Slab';
              font-style: normal;
              font-weight: 400;
              src: local('Roboto Slab Regular'), local('RobotoSlab-Regular'), 
              url(../assets/fonts/y7lebkjgREBJK96VQi37ZjTOQ_MqJVwkKsUn0wKzc2I.woff2) format('woff2');
              unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
            }
            /* cyrillic */
            @font-face {
              font-family: 'Roboto Slab';
              font-style: normal;
              font-weight: 400;
              src: local('Roboto Slab Regular'), local('RobotoSlab-Regular'),
               url(../assets/fonts/y7lebkjgREBJK96VQi37ZjUj_cnvWIuuBMVgbX098Mw.woff2) format('woff2');
              unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            }
            /* greek-ext */
            @font-face {
              font-family: 'Roboto Slab';
              font-style: normal;
              font-weight: 400;
              src: local('Roboto Slab Regular'), local('RobotoSlab-Regular'), 
              url(../assets/fonts/y7lebkjgREBJK96VQi37ZkbcKLIaa1LC45dFaAfauRA.woff2) format('woff2');
              unicode-range: U+1F00-1FFF;
            }
            /* greek */
            @font-face {
              font-family: 'Roboto Slab';
              font-style: normal;
              font-weight: 400;
              src: local('Roboto Slab Regular'), local('RobotoSlab-Regular'), 
              url(../assets/fonts/y7lebkjgREBJK96VQi37Zmo_sUJ8uO4YLWRInS22T3Y.woff2) format('woff2');
              unicode-range: U+0370-03FF;
            }
            /* vietnamese */
            @font-face {
              font-family: 'Roboto Slab';
              font-style: normal;
              font-weight: 400;
              src: local('Roboto Slab Regular'), local('RobotoSlab-Regular'), 
              url(../assets/fonts/y7lebkjgREBJK96VQi37Zr6up8jxqWt8HVA3mDhkV_0.woff2) format('woff2');
              unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
            }
            /* latin-ext */
            @font-face {
              font-family: 'Roboto Slab';
              font-style: normal;
              font-weight: 400;
              src: local('Roboto Slab Regular'), local('RobotoSlab-Regular'), 
              url(../assets/fonts/y7lebkjgREBJK96VQi37ZiYE0-AqJ3nfInTTiDXDjU4.woff2) format('woff2');
              unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
              font-family: 'Roboto Slab';
              font-style: normal;
              font-weight: 400;
              src: local('Roboto Slab Regular'), local('RobotoSlab-Regular'), 
              url(../assets/fonts/y7lebkjgREBJK96VQi37Zo4P5ICox8Kq3LLUNMylGO4.woff2) format('woff2');
              unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
            }
    .wrapper{
        max-width:750px;
        margin:0px auto;
        padding:30px;
        border:1px solid #DDD;
        font-size:14px;
        line-height:24px;
        color:#555;
        font-family: 'Roboto Slab', serif;

    }
    table{
        width: 100%;
    }
    .details-table, .details-table th, .details-table td, .final-table, .final-table th, .final-table td, .officeCopy, .officeCopy th, .officeCopy td{
        border:1px solid #DDD;
        border-collapse: collapse;
    }
    .details-table th, .details-table td, .final-table th, .final-table td, .officeCopy th, .officeCopy td{
        padding: 2px 5px;
        text-align: left;
    }
    .bkash, .developer{
        padding: 5px 5px;
        margin:0px;
        background-color: #dff0d8;
    }
    .bank-account{
        border: 1px solid #DDD;
    }
    .bank-account .heading{
        background-color: #dff0d8;
        padding: 5px 5px;
    }
    .dottedHr{
        border: 1px dashed #AAA;
        margin-top: 15px; 
        margin-bottom: 15px; 
    }
    .print-section{
        position:fixed;
        top:50%;
        right:0;
        padding: 20px;
        background-color: #5cb85c;
    }
    .btn{
        padding: 10px;
        border-radius: 4px;
        border-color: transparent;
        color:#fff;
    }
    .btn-print{
        background-color: #f0ad4e;
    }
    .btn-back{
        background-color: #337ab7;
    }
	
    @media print {
        .wrapper{
            max-width:700px;
            margin:0px auto;
            padding:30px;
            border:0px solid #DDD;
            font-size:14px;
            line-height:24px;
            color:#555;
            font-family: 'Raleway', sans-serif;
        }
        .no-print{
            display:none;
        }
    }
    </style>
</head>

<body>
    <div class="print-section no-print">
        <button onclick="window.print();" class="btn btn-print">Print</button>
        <button onclick="window.history.back();" class="btn btn-back">Back</button>
    </div>
    <?php //print_r($bill_info); ?>
    <div class="wrapper">
		<div class="print-top">
            <table style="font-size:18px;">
                <thead>
                    <tr>
                        <th style="width:33.33%;text-align:left;">Logo</th>
                        <th style="width:33.33%;text-align:center;">Invoice <br> <small>Student Copy</small></th>
                        <th style="width:33.33%;text-align:right;font-size:12px;">Help-Desk : 01671614060</th>
                    </tr>
                </thead>
            </table>
		</div>
        <hr>
        <table>
            <tbody>
                <tr>
                    <td><b>Border Name : </b><?= $seat_info->studentName; ?></td>
                    <td style="text-align:right;"><b>Invoice No. : </b><?php echo $bill_info->monthlyBillngDetailsId; ?></td>
                </tr>
                <tr>
                    <td><b>House No. : </b> <?= $seat_info->buildingNumber; ?> </td>
                    <td style="text-align:right;"><b>Issue Date : </b><?= date("d/m/Y", strtotime($bill_info->monthlyBillingInfoAddedDate)); ?></td>
                </tr>
                <tr>
                    <td><b>Room No. : </b> <?= $seat_info->roomNumber; ?></td>
                    <td style="text-align:right;"><b>Last Date : </b>__ __ __ </td>
                </tr>
                <tr>
                    <td><b>ID : </b><?= $seat_info->stdIdNo; ?></td>
                    <td style="text-align:right;"><b>Invoice Period : </b><?= date("F, Y", strtotime($bill_info->monthlyBillingMonth)); ?></td>
                </tr>
            </tbody>
        </table>
        <!--<table>
            <tbody>
                <tr>
                    <td><b>Border Name : </b> Keshob Chakbartty Chowdhury</td>
                    <td style="text-align:right;"><b>Invoice No. : </b>2465746134</td>
                </tr>
                <tr>
                    <td><b>House No. : </b> CH-1976523 </td>
                    <td><b>Room No. : </b> 307</td>
                    <td><b>ID : </b> 108007</td>
                </tr>
                <tr>
                    <td><b>Issue Date : </b>ABCD 05/07/2017</td>
                    <td><b>Last Date : </b>05/07/2017 </td>
                    <td><b>Invoice Period : </b>November 2017</td>
                </tr>
            </tbody>
        </table>-->
        <?php $monthlyFee=($bill_info->billing_details_monthelyRent+$bill_info->billing_details_additionalCharge+$bill_info->billing_details_admissionFee+$bill_info->billing_details_securityMoney)-$bill_info->billing_details_specialDiscount;

           // $subTotal=($monthlyFee+($bill_info->billingDetailsStudentPreviousDue))-$bill_info->billingDetailsStudentBillDiscount;
            $subTotal=($bill_info->billing_details_monthelyRent+($bill_info->billingDetailsStudentPreviousDue))-$bill_info->billingDetailsStudentBillDiscount;
         ?>
        <table class="details-table" style="margin-top: 10px;">
            <thead>
                <tr>
                    <th>SL No. </th>
                    <th>Description</th>
                    <th>Monthly Fee</th>
                    <th>Previous Due</th>
                    <th>Late Fee</th>
                    <th>Discount</th>
                    <th>Sub Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1 </td>
                    <td>Monthly Bill for <?php echo date("F, Y", strtotime($bill_info->monthlyBillingMonth)); ?></td>
                    <td><?= $bill_info->billing_details_monthelyRent; ?>/-<?//= $monthlyFee; ?></td>
                    <td><?php echo $bill_info->billingDetailsStudentPreviousDue ?>/-</td>
                    <td>0/-</td>
                    <td><?= $bill_info->billingDetailsStudentBillDiscount; ?>/-</td>
                    <td><?= $subTotal ?>/-</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="5"></th>
                    <th>Total</th>
                    <th><?= $subTotal ?>/-</th>
                </tr>
            </tfoot>
        </table>
        <table class="final-table" style="margin-top: 25px;">
            <thead>
                <tr>
                    <th>Other Bill </th>
                    <th>Internet Bill</th>
                    <th>Food Bill</th>
                    <th>Electricity Bill</th>
                    <th>Total Amount Due</th>
                </tr>
            </thead>
            <?php $totalBill=($bill_info->billingDetailsStudentOtherAmount+$bill_info->billingDetailsStudentWifiBill+$bill_info->billingDetailsStudentFoodAmount+$bill_info->billingDetailsStudentElecticBill+$bill_info->billing_details_additionalCharge); ?>
            <tbody>
                <tr>
                    <td><?= ($bill_info->billingDetailsStudentOtherAmount+$bill_info->billing_details_additionalCharge); ?>/- </td>
                    <td><?= $bill_info->billingDetailsStudentWifiBill; ?>/-</td>
                    <td><?= $bill_info->billingDetailsStudentFoodAmount; ?>/-</td>
                    <td><?= $bill_info->billingDetailsStudentElecticBill; ?>/-</td>
                    <td><?= $totalBill; ?>/-</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Net Payable</th>
                    <th><?= $totalBill+$subTotal; ?>/-</th>
                </tr>
            </tfoot>
        </table>
        <div class="bkash" style="margin-top: 15px; border: 1px solid #DDD;">
            <h3>Bank Account Number: <span style="float:right;">City Hostel A/C:2446-9010-20072, Mohila College Branch, Sylhet. </span></h3>
        </div>
        <div class="" style="margin-top: 15px; border: 1px solid #DDD;">
            <h3 style="text-align:center;"><?=$bill_info->billMessage; ?></h3>
        </div>
        <h3 style="margin-top: 15px;">শর্তাবলীঃ</h3>
        <ul class="conditions" style="list-style: square; font-size: 16px; margin-left: 20px;">
            <li>প্রত্যেক মাসের ৫ তারিখের মধ্যে হোস্টেল ভাড়া দিতে হবে, না দিলে প্রতিদিন ১০০ টাকা করে জরিমানা ধরা হবে।  </li>
            <li>হোস্টেল সিট ছাড়তে হলে হোস্টেল ইনচার্জ কে ২ মাস আগে জানাতে হবে।  </li>
            <li>হোস্টেলের ভিতরে সিট পরিবর্তন ফী ১০০০ টাকা দিতে হবে এখন থেকে।  </li>
            <li>সময় মত হোস্টেল ভাড়া না দিলে, হোস্টেলের বিভিন্ন সেবা বন্ধ করে দেয়া হবে। </li>
        </ul>
        
        <!-- <div class="bank-account" style="margin-top: 15px;">
            <div class="heading" style="border-bottom: 1px solid #DDD;">
                <h3 style="text-align: center;">Use Bank Account</h3>
            </div>
            <div class="body" style="margin-top: 10px;margin-bottom: 10px;">
                <table>
                    <tbody>
                        <tr>
                            <td style="width:20%;"></td>
                            <td style="text-align:center;width:30%;margin-right:10px;">
                                <div class="bank-item" style="width:200px;text-align:center; border: 1px solid #DDD; padding: 10px 25px;">
                                    <p>
                                        <b>City Hostel</b> <br>
                                        A/C 2446 9010 20072 <br>
                                        Pubali Bank Limited <br>
                                        Mohila College Branch <br>
                                        Sylhet
                                    </p>
                                </div>
                            </td>
                            <td style="text-align:center;width:30%;margin-left:10px;">
                                <div class="bank-item" style="width:200px;text-align:center; border: 1px solid #DDD; padding: 10px 25px;">
                                    <p>
                                        <b>City Hostel</b> <br>
                                        A/C 0023 0210009509 <br>
                                        Mutual Trust Bank Ltd. <br>
                                        Zindabazar Branch <br>
                                        Sylhet
                                    </p>
                                </div>
                            </td>
                            <td style="width:20%;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> -->
        <!-- <div class="developer" style="margin-top: 10px;text-align:center; border: 1px solid #DDD;">
            <h4>System Developed By - StarLab IT (01719450855)</h4>
        </div> -->
        
        <hr class="dottedHr">

        <div style="width: 100%;">
            <div class="heading" style="border: 1px solid #DDD; margin-bottom: 5px; ">
                <h3 style="text-align: center;"> Hostel Office Copy </h3>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td>
                            <table class="officeCopy">
                                <thead>
                                    <tr>
                                        <th>Border Name</th>
                                        <th><?= $seat_info->studentName; ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>House No.</td>
                                        <td><?= $seat_info->buildingNumber; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Room No. </td>
                                        <td><?= $seat_info->roomNumber; ?></td>
                                    </tr>
                                    <tr>
                                        <td>ID</td>
                                        <td><?= $seat_info->stdIdNo; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>                            
                            <table class="officeCopy">
                                <thead>
                                    <tr>
                                        <th>Invoice No</th>
                                        <th> <?php echo $bill_info->monthlyBillngDetailsId; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Invoice Period</th>
                                        <th> <?= date("F, Y", strtotime($bill_info->monthlyBillingMonth)); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Last Date</th>
                                        <th> </th>
                                    </tr>
                                    <tr>
                                        <th>Late Fee</th>
                                        <th>0</th>
                                    </tr>
                                </thead>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="officeCopy">
                                <tbody>
                                    <tr class="officeCopy" >
                                        <td>Previous Due</td>
                                        <td style="text-align:right; "><?php echo $bill_info->billingDetailsStudentPreviousDue ?>/-</td>
                                    </tr>
                                    <tr class="officeCopy" >
                                        <td>Discount</td>
                                        <td style="text-align:right; "><?= $bill_info->billingDetailsStudentBillDiscount; ?>/-</td>
                                    </tr>
                                    <tr class="officeCopy" >
                                        <td>Net Payable</td>
                                        <td style="text-align:right; "><?= $totalBill+$subTotal; ?>/-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>                            
                            <table class="officeCopy">
                                <thead>
                                    
                                    <tr style="height:87px;">
                                        <th style="padding-top:40px;">Signature</th>
                                        <th style="padding-top:40px;">Signature </th>
                                    </tr>
                                </thead>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="developer" style="margin-top: 10px;text-align:center; border: 1px solid #DDD;">
            <h4>System Developed By - StarLab IT (01719450855)</h4>
        </div>
    </div>
</body>
</html>