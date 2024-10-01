<html>
<head>
</head>
<style>
		@page {
			size: A4;
			margin: 30px;
			margin-bottom: 10px;
			  
			}
			
		table {
            border: 1px solid #000000;
            border-collapse: collapse;
            padding: 5px;
			width: 890px;
			border: 0;
        }
        
        table th {
            border: 1px solid #000000;
            padding: 5px;
            background: #ffffff;
            color: #313030;
        }
        
        table td {
            border: 1px solid #000000;
            vertical-align: top;
            text-align: left;
			font-size: 11px;
            padding: 2.5px;
            background: #ffffff;
            color: #313030;
        }

		textarea {
        resize: none;
		font-size: 11px;
		}
		
		.column {
			float: left;
			width: 33.33%;
			padding-top: 20px;
			padding-left: 15px;
			}
			.column1 {
			float: left;
			width: 53.33%;
			padding: 10px;
			padding-left: 20px;
			}

		/* Clearfix (clear floats) */
		.row::after {
			content: "";
			clear: both;
			display: table;
			}
</style>

<body>
<table>
<tbody>
		<tr>
		<td colspan="2" style="width: 38px; border-left: hidden; border-top: hidden;">
		<p>&nbsp;</p>
		</td>
		<td colspan="2" style="width: 38px; border-top: hidden;">
		<p>&nbsp;</p>
		</td>
		<td colspan="39" style="width: 624px; border-top: hidden; border-right: hidden;">
		<p>&nbsp;</p>
		</td>
		</tr>
		<tr>
		<td colspan="11" style="width: 197.5px; border-bottom: hidden; font-weight: bold;">
		Shipper's Name and Address
		<p>&nbsp;</p>
		</td>
		<td colspan="15" style="width: 197.5px; font-weight: bold;">
		Shipper's Account Number
		<textarea style="width:98%; height: 80%;" type="text" name="shipper_account_number"></textarea>
		</td>
		<td colspan="17" rowspan="2" style="width: 395px; height: 10px;">
		<p>Not negotiable</p>
		<h1 style="margin-top: -13px;">Air Waybill</h1>
		<p style="margin-top: -17px;"><strong>(Air Consignment note) </strong><em>issued by</em></p>
							<p class="row">
								<div class="column">
									<img src="/images/HNS-International-Logo.png" style="height: 50px; width: 140px; margin-top: -30px"></img>
								</div>
								<p class="column1" style="margin-top: -30px; margin-bottom: -5px;">
								<b style="font-size: 16px;">HNS INTERNATIONAL</b><br>
								<b>Corporate Office:</b> 246, Tejgaon I/A,<br>
								Dhaka - 1208, Bangladesh.<br>
								Tel: +880 2 55045148-9.<br>
								Email: info@hns-international.com<br>Web: www.hns-international.com

								</p>
							</p>
		</td>
		</tr>
		<tr>
		<td colspan="26" rowspan="2" style="width: 395px; height: 10px;">
		<textarea style="width: 100%; height: 100%;" type="text" name="shipper_name_and_address"></textarea>
		</td>

		<tr>
		<td colspan="17" style="width: 395px;">
		<p>Copies 1,2 and 3 of this Air Waybill are originals and have the same validity</p>
		</td>

		</tr>
		<tr>
		<td colspan="11" style="width: 197.5px; border-bottom: hidden; font-weight: bold;">
		Consignee's Name and Address
		<p>&nbsp;</p>
		</td>
		<td colspan="15" style="width: 197.5px; height: 48px; font-weight: bold;">
		Consignee's Account Number
		<textarea style="width: 98%;" type="text" name="consignee_account_number"></textarea>
		</td>
		<td colspan="17" rowspan="2" style="width: 395px;">
		<p style="text-align: justify;">It is agreed that the goods described herein are accepted in apparent good order and condition (exept as noted) for carriage SUBJECT TO THE CONDITIONS OF CONTRACT ON THE REVERSE HEREOF. ALL GOODS MAY BE CARRIED BY ANY OTHER MEANS INCLUDING ROAD OR ANY OTHER CARRIER UNLESS SPECIFIC CONTRARY INSTRUCTIONS ARE GIVEN HEREON BY THE SHIPPER, AND SHIPPER AGREES THAT THE SHIPMENT MAY BE CARRIED VIA INTERMEDIATE STOPPING PLACES WHICH THE CARRIER DEEMS APPROPRIATE. THE SHIPPER'S ATTENTION IS DRAWN TO THE NOTICE CONCERNING CARRIER'S LIMITATION OF LIABILITY. Shipper may increase such limitation of liability by declaring a higher value for carriage and paying a supplemental charge if required.</p>
		</td>

		</tr>
		<tr>
			<td colspan="26" style="width: 395px; height: 120px;">
			<textarea style="width: 100%; height: 100%;" type="text" name="consignee_name_and_address"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="26" style="width: 395px; font-weight: bold;">
			Issuing Carrier's Agent Name and City
			<textarea style="width: 99%; height: 80%;" type="text" name="issuing_carrier_agent_name_and_city"></textarea>
			</td>
			<td colspan="17" rowspan="2" style="width: 395px; font-weight: bold;">
			Accounting Information
			<textarea style="width: 100%; height: 79px;" type="text" name="accounting_information"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="11" style="width: 197.5px; font-weight: bold;">
			Agent's IATA Code
			<textarea style="width:98%; height: 80%;" type="text" name="agent_iata_code"></textarea>
			</td>
			<td colspan="15" style="width: 197.5px; font-weight: bold;">
			Account No.
			<textarea style="width:98%; height: 80%;" type="text" name="account_number"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="26" rowspan="2" style="width: 395px; font-weight: bold;">
			Airport of Departure (Addr. of First Carrier) and Requested Routing
			<textarea style="width:99%; height: 30px;" type="text" name="account_number"></textarea>
			</td>
			<td colspan="8" style="border-bottom: hidden; font-weight: bold;">
			Reference Number
			<textarea style="width:99%; height: 30px;" type="text" name="reference_number"></textarea>
			</td>
			<td colspan="8" style="width: 150px; text-align: center; font-weight: bold;">
			<p>Optional Shipping Information</p>
			</td>
			<td style="border-bottom: hidden;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="8" style="width: 113px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="8" width="189">
			<p>&nbsp;</p>
			</td>
			<td style="width: 47px">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="2" style="width: 38px; font-weight: bold;">
			<p>To</p>
			<textarea style="width:99%; height: 30px;" type="text" name="to_r"></textarea>
			</td>
			<td colspan="4" style="width: 76px; border-bottom: hidden; font-weight: bold;">
			<p>By First Carrier</p>
			</td>
			<td colspan="7" style="width: 76px; font-size: 7px; text-align: center; font-weight: bold;">
			<p>Routing and Destination</p>
			</td>
			<td colspan="5" rowspan="2" style="width: 40px; font-weight: bold;">
			<p>To</p>
			<p>&nbsp;</p>
			</td>
			<td colspan="3" rowspan="2" style="width: 40px; font-weight: bold;">
			<p>By</p>
			<p>&nbsp;</p>
			</td>
			<td colspan="4" rowspan="2" style="width: 40px; font-weight: bold;">
			<p>To</p>
			<p>&nbsp;</p>
			</td>
			<td rowspan="2" style="width: 40px; font-weight: bold;">
			<p>By</p>
			<p>&nbsp;</p>
			</td>
			<td colspan="3" rowspan="2" style="width: 38px; font-weight: bold;">
			<p>Currency</p>
			<p>&nbsp;</p>
			</td>
			<td colspan="2" rowspan="2" style="width: 28px; font-weight: bold;">
			<p>CHGS<br>Code</p>
			<p>&nbsp;</p>
			</td>
			<td style="width: 28px; font-weight: bold;">
			<p>WT/VAL</p>
			</td>
			<td colspan="2" style="width: 19px; font-weight: bold;">
			<p>Other</p>
			</td>
			<td colspan="8" style="width: 189px; text-align: center; font-weight: bold;">
			<p>Declared Value for Carriage</p>
			<p>&nbsp;</p>
			</td>
			<td rowspan="2" style="width: 47px; font-weight: bold;">
			<p>Declared Value for Customs</p>
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="11" style="width: 151px;">
			<p>&nbsp;</p>
			</td>
			<td style="width: 17px; font-weight: bold; text-align: center;">
			<p>PPD</p>
			<p>&nbsp;</p>
			</td>
			<td colspan="2" style="width: 17px; font-weight: bold;">
			<p>COLL</p>
			<p>&nbsp;</p>
			</td>
			<td colspan="2" style="width: 16px; font-weight: bold;">
			<p>PPD</p>
			<p>&nbsp;</p>
			</td>
			<td colspan="2" style="width: 16px; font-weight: bold;">
			<p>COLL</p>
			<p>&nbsp;</p>
			</td>
			<td colspan="4" style="width: 170px;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="10" rowspan="2" style="width: 161px; font-weight: bold;">
			<p style="text-align: center;">Airport of Destination</p>
			<p>&nbsp;</p>
			</td>
			<td colspan="6" style="width: 63px; text-align:center; font-weight: bold;">
			<p>Flight/Date</p>
			</td>
			<td colspan="8" style="width: 63px; text-align:center; font-weight: bold;">
			<p>For Carrier Use Only</p>
			</td>
			<td colspan="2" style="width: 63px; text-align:center; font-weight: bold;">
			<p>Flight/Date</p>
			</td>
			<td colspan="9" rowspan="2" style="width: 113px; text-align:center; font-weight: bold;">
			<p>Amount of Insurance</p>
			<p>&nbsp;</p>
			</td>
			<td colspan="8" rowspan="2" style="width: 236px;">
			<p style="text-align: justify; font-size: 8px;">INSURANCE &ndash; If Carrier offers insurance, and such insurance is requested in&nbsp; accordance with the conditions thereof, indicate amount to be insured in figures in box marked "Amount of Insurance"</p>
			</td>

		</tr>
		<tr>
			<td colspan="9" style="width: 94px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="7" style="width: 95px;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="43" style="width: 699px; border-bottom: none;">
			<p>Handling information</p>
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="41" style="width: 588px; font-size: 8.5px; border-top: none;">
			(For U.S.A. use only) These commodities, technology or software were exported from the Unated States in accordance with the Export Administration Regulations. Diversion contrary to USA law prohibited
			</td>
			<td colspan="4" style="width: 112px; text-align: center;">
			SCI
			</td>
		</tr>
		<tr>
			<td rowspan="2" style="text-align: center; width: 32px; font-weight: bold;" >
			No of<br>
			Pieces RCP
			</td>
			<td colspan="8" rowspan="2" style="text-align: center; width: 82px; font-weight: bold;">
			Gross<br>
			Weight
			</td>
			<td rowspan="2" style="text-align: center; width: 9px; font-weight: bold;">
			kg<br>lb
			</td>
			<td rowspan="4" style="width: 9px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="6" style="text-align: center; width: 66px; font-weight: bold;">
			Rate Class
			</td>
	
			<td colspan="7" rowspan="2" style="text-align: center; width: 66px; font-weight: bold;">
			Chargeable<br>Weight
			</td>
			<td rowspan="4" style="width: 9px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="4" rowspan="2" style="width: 85px; font-weight: bold;">
			&nbsp;&nbsp;Rate<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Charge
			</td>
			<td rowspan="4" style="width: 9px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="5" rowspan="2" style="text-align: center; width: 104px; font-weight: bold;">
			Total
			</td>
			<td rowspan="4" width="10">
			<p>&nbsp;</p>
			</td>
			<td colspan="7" rowspan="2" style="text-align: center; width: 208px; font-weight: bold;">
			Nature and Quantity of Goods<br>
			(incl. Dimensions or Volume)
			</td>
		</tr>
		<tr>
			<td style="width: 9px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="5" style="text-align: center; width: 57px; font-weight: bold;">
			<p>Commodity<br>Item No.</p>
			</td>
		</tr>
		<tr>
			<td style="width: 32px; height: 250px;">

			</td>
			<td colspan="8" rowspan="2" style="width: 82px;">
	
			</td>
			<td rowspan="2" style="width: 9px;">

			</td>
			<td rowspan="2" style="width: 9px;">

			</td>
			<td colspan="5" rowspan="2" style="width: 57px;">

			</td>
			<td colspan="7" rowspan="2" style="width: 66px;">

			</td>
			<td colspan="4" rowspan="2" style="width: 85px;">
		
			</td>
			<td colspan="5" rowspan="2" style="width: 104px;">
	
			</td>
			<td colspan="7" rowspan="2" style="width: 208px;">
		
			</td>
		</tr>
		<tr>

	
		</tr>
		<tr>
			<td colspan="5" style="width: 88px; text-align: center;">
			<p><strong>Prepaid</strong></p>
			</td>
			<td colspan="7" style="width: 88px; text-align: center; font-weight: bold;">
			<p>Weight Charge</p>
			</td>
			<td colspan="8" style="width: 88px; text-align: center;">
			<p><strong>Collect</strong></p>
			</td>
			<td colspan="23" rowspan="6" style="width: 435px; font-weight: bold;">
			<p>Other Charges</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="9" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="11" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="5" style="width: 88px; border-bottom: hidden;">
			<p>&nbsp;</p>
			</td>
			<td colspan="7" style="width: 88px; text-align: center; font-weight: bold;">
			<p>Valuation Charge</p>
			</td>
			<td colspan="8" style="width: 88px; border-bottom: hidden;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="9" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="11" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="5" style="width: 88px; border-bottom: hidden;">
			<p>&nbsp;</p>
			</td>
			<td colspan="7" style="width: 88px; font-weight: bold;">
			<p style="text-align: center">Tax</p>
			</td>
			<td colspan="8" style="width: 88px; border-bottom: hidden;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="9" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="11" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="width: 47px; border-bottom: hidden;">
			<p>&nbsp;</p>
			</td>
			<td colspan="13" style="width: 170px; text-align: center; font-weight: bold;">
			<p>Total Other Charges Due Agent</p>
			</td>
			<td colspan="4" style="width: 47px; border-bottom: hidden;">
			<p>&nbsp;</p>
			</td>
			<td colspan="23" rowspan="5" style="width: 435px">
			<p style="text-align: justify;">Shipper certifies that the particulars on the face hereof are correct and that insofar as any part of the consignment contains dangerous goods, such part is properly described by name and is in proper condition for carriage by according to the applicable Dangerous Goods Regulations.</p>
			<p>&nbsp;</p>
			<hr style="border-top: dotted 1px;"/>
			<p style="text-align: center; font-weight: bold;">Signature of Shipper or his Agent</p>
			</td>
		</tr>
		<tr>
			<td colspan="9" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="11" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="width: 47px; border-bottom: hidden;">
			<p>&nbsp;</p>
			</td>
			<td colspan="13" style="width: 170px; text-align: center; font-weight: bold;">
			<p>Total Other Charges Due Carrier</p>
			</td>
			<td colspan="4" style="width: 47px; border-bottom: hidden;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="9" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="11" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="9" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="11" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="9" style="width: 132px; text-align: center; font-weight: bold;">
			<p>Total Prepaid</p>
			</td>
			<td colspan="11" style="width: 132px; text-align: center; font-weight: bold;">
			<p>Total Collect</p>
			</td>
			<td colspan="23" rowspan="4" style="width: 435px; text-align: center; font-weight: bold;">
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<hr style="border-top: dotted 1px;"/>
			<p>Executed on (date)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; at (place)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Signature of issuing Carier or its Agent</p>
			</td>
		</tr>
		<tr>
			<td colspan="9" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="11" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="9" style="width: 132px; text-align: center; font-weight: bold;">
			<p>Currency Conversion Rates</p>
			</td>
			<td colspan="11" style="width: 132px; text-align: center; font-weight: bold;">
			<p>CC Charges in Dest. Currency</p>
			</td>
		</tr>
		<tr>
			<td colspan="9" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="11" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="9" rowspan="2" style="width: 132px; text-align: center; font-weight: bold;">
			<p>For Carrier's Use only<br>at Destination</p>
			</td>
			<td colspan="11" style="width: 132px; text-align: center; font-weight: bold;">
			<p>Charges at Destination</p>
			</td>
			<td colspan="10" style="width: 132px; text-align: center; font-weight: bold;">
			<p>Total Collect Charges</p>
			</td>
			<td colspan="13" rowspan="2" style="width: 303px;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="11" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="10" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
		</tr>
		</tbody>
</table>
<body>
</html>