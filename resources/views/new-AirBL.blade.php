<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bill Of Lading | Create BL</title>
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
		
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


	<!-- Include CKEditor 5 from CDN -->
	<script src="https://cdn.jsdelivr.net/npm/ckeditor5-classic-plus@41.3.0/build/ckeditor.js"></script>
	<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.1/ckeditor5.css" />
	<script src="../../dist/js/popupairbl.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

	.center {
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 50%;
	}

	textarea {
        resize: none;
		font-size: 11px;
	}
	
	.container {
        text-align: center;
		display: block;
        margin-bottom: 10px;
    }


    button {
		padding: 10px 20px;
        font-size: 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }

	.ck-editor__editable_inline {
		min-height: 400px;
		min-width: none;
	}

	.element {
		max-width: fit-content;
		margin-left: auto;
		margin-right: auto;
	}

	/* Basic styles for popup */
	.popup {
		display: none;
		position: fixed;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		background: rgba(0, 0, 0, 0.5);
		justify-content: center;
		align-items: center;
	}

	.popup-content {
		background: white;
		padding: 20px;
		border-radius: 5px;
		width: 80%;
		max-width: 600px;
	}

	.close-button {
		position: absolute;
		top: 10px;
		right: 20px;
		font-size: 24px;
		cursor: pointer;
	}

	.hidden {
		display: none;
	}

	.text-tiny {
		font-size: 0.7em;
	}

	.text-small {
		font-size: 0.85em;
	}

	.text-big {
		font-size: 1.4em;
	}

	.text-huge {
		font-size: 1.8em;
	}
	.icon-button {
			background: none;
			border: none;
			cursor: pointer;
			padding: 0;
			margin: 0;
		}

		.icon-button img {
			width: 20px; /* Adjust size as needed */
			height: 20px; /* Adjust size as needed */
		}

		.icon-button:focus {
			outline: none; /* Remove default focus outline */
		}

		.icon-button:hover {
			transform: translateY(-1px);
		}
		.icon-button:active {
			background-color: #F0F0F1;
			border-color: rgba(0, 0, 0, 0.15);
			box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
			color: rgba(0, 0, 0, 0.65);
			transform: translateY(0);
		}

		.button-7 {
		background-color: #0095ff;
		border: 1px solid transparent;
		border-radius: 3px;
		box-shadow: rgba(255, 255, 255, .4) 0 1px 0 0 inset;
		box-sizing: border-box;
		color: #fff;
		cursor: pointer;
		display: inline-block;
		font-family: -apple-system,system-ui,"Segoe UI","Liberation Sans",sans-serif;
		font-size: 13px;
		font-weight: 400;
		line-height: 1.15385;
		margin: 0;
		outline: none;
		padding: 8px .8em;
		position: relative;
		text-align: center;
		text-decoration: none;
		user-select: none;
		-webkit-user-select: none;
		touch-action: manipulation;
		vertical-align: baseline;
		white-space: nowrap;
	}

	.button-7:hover,
	.button-7:focus {
		background-color: #07c;
	}

	.button-7:focus {
		box-shadow: 0 0 0 4px rgba(0, 149, 255, .15);
	}

	.button-7:active {
		background-color: #0064bd;
		box-shadow: none;
	}

	.back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 20px;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .back-btn:hover {
            color: #0056b3;
        }
</style>

<body>
<a href="/airbl-list" class="back-btn"><i class="fas fa-arrow-left"></i> Back</a>
<div class="element">
    <form action="{{ route('airbl-list.store') }}" method="POST">
        @csrf
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
		<td colspan="11" style="width: 197.5px; border-bottom: hidden;">
		<b>Shipper's Name and Address</b>
						<!-- Button to open the popup -->
						<button class="icon-button" id="openPopup" type="button" style="margin-left: 60px; margin-top: 7px;"><img src="/icons/add-list.png" alt="Icon"></button>

								<!-- Popup Modal -->
								<div id="popup" class="popup">
								<div class="popup-content">
									<span class="close-button" id="closePopup">&times;</span>
									<h2>Shipper's Name and Address</h2>
									<textarea  class="ck-editor__editable_inline" id="editor"></textarea><br>
									<button class="button-7" id="saveButton" type="button">Save</button>
									<button class="button-7" id="closePopupButton" type="button">Close</button>
								</div>
							</div>
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
		<!--<textarea style="width: 100%; height: 100%;" type="text" name="shipper_name_and_address"></textarea>-->
		<input class="hidden" type="text" id="geteditor" name="shipper_name_and_address">
		<div id="displayArea"></div>
		</td>

		<tr>
		<td colspan="17" style="width: 395px;">
		<p>Copies 1,2 and 3 of this Air Waybill are originals and have the same validity</p>
		</td>

		</tr>
		<tr>
		<td colspan="11" style="width: 197.5px; border-bottom: hidden;">
		<b>Consignee's Name and Address</b>
						<!-- Button to open the popup -->
						<button class="icon-button" id="openPopup1" type="button" style="margin-left: 60px; margin-top: 7px;"><img src="/icons/add-list.png" alt="Icon"></button>

								<!-- Popup Modal -->
								<div id="popup1" class="popup">
								<div class="popup-content">
									<span class="close-button" id="closePopup1">&times;</span>
									<h2>Consignee's Name and Address</h2>
									<textarea  class="ck-editor__editable_inline" id="editor1"></textarea><br>
									<button class="button-7" id="saveButton1" type="button">Save</button>
									<button class="button-7" id="closePopupButton1" type="button">Close</button>
								</div>
							</div>
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
			<!--<textarea style="width: 100%; height: 100%;" type="text" name="consignee_name_and_address"></textarea>-->
			<input class="hidden" type="text" id="geteditor1" name="consignee_name_and_address">
			<div id="displayArea1"></div>
			</td>
		</tr>
		<tr>
			<td colspan="26" style="width: 395px; height: 75px;">
			<b>Issuing Carrier's Agent Name and City</b><br>
						<!-- Button to open the popup -->
						<button class="icon-button" id="openPopup2" type="button" style="margin-left: 200px; margin-top: -15px;"><img src="/icons/add-list.png" alt="Icon"></button>

								<!-- Popup Modal -->
								<div id="popup2" class="popup">
								<div class="popup-content">
									<span class="close-button" id="closePopup2">&times;</span>
									<h2>Issuing Carrier's Agent Name and City</h2>
									<textarea  class="ck-editor__editable_inline" id="editor2"></textarea><br>
									<button class="button-7" id="saveButton2" type="button">Save</button>
									<button class="button-7" id="closePopupButton2" type="button">Close</button>
								</div>
							</div>
			<!--<textarea style="width:98%; height: 78%;" type="text" name="issuing_carrier_agent_name_and_city"></textarea>-->
			<input class="hidden" type="text" id="geteditor2" name="issuing_carrier_agent_name_and_city">
			<div id="displayArea2"></div>
			</td>
			<td colspan="17" rowspan="2" style="width: 395px;">
			<b>Accounting Information</b><br>
						<!-- Button to open the popup -->
						<button class="icon-button" id="openPopup3" type="button" style="margin-top: -15px; margin-left: 130px;"><img src="/icons/add-list.png" alt="Icon"></button>

								<!-- Popup Modal -->
								<div id="popup3" class="popup">
								<div class="popup-content">
									<span class="close-button" id="closePopup3">&times;</span>
									<h2>Accounting Information</h2>
									<textarea  class="ck-editor__editable_inline" id="editor3"></textarea><br>
									<button class="button-7" id="saveButton3" type="button">Save</button>
									<button class="button-7" id="closePopupButton3" type="button">Close</button>
								</div>
							</div>
			<input class="hidden" type="text" id="geteditor3" name="accounting_information">
			<div id="displayArea3"></div>
			<!--<textarea style="width:98%; height: 95px;" type="text" name="account_information"></textarea>-->
			</td>
		</tr>
		<tr>
			<td colspan="11" style="width: 197.5px; font-weight: bold;">
			Agent's IATA Code
			<textarea style="width: 98%;" type="text" name="agent_iata_code"></textarea>
			</td>
			<td colspan="15" style="width: 197.5px; font-weight: bold;">
			Account No.
			<textarea style="width: 98%;" type="text" name="account_number"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="26" rowspan="2" style="width: 395px; font-weight: bold;">
			Airport of Departure (Addr. of First Carrier) and Requested Routing
			<textarea style="width:99%; height: 95%;" type="text" name="airport_of_departure"></textarea>
			</td>
			<td colspan="8" style="border-bottom: hidden; font-weight: bold;">
			Reference Number
			<textarea style="width:99%; height: 95%;" type="text" name="reference_number"></textarea>
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
			<td colspan="2" rowspan="2" style="width: 38px;">
			<b>To</b>
			<textarea style="width:99%; height: 95%;" type="text" name="to_a"></textarea>
			</td>
			<td colspan="4" style="width: 76px; border-bottom: hidden; font-weight: bold;">
			<p>By First Carrier</p>
			</td>
			<td colspan="7" style="width: 76px; font-size: 7px; text-align: center; font-weight: bold;">
			<p>Routing and Destination</p>
			</td>
			<td colspan="5" rowspan="2" style="width: 40px; font-weight: bold;">
			To
			<textarea style="width:99%; height: 95%;" type="text" name="to_b"></textarea>
			</td>
			<td colspan="3" rowspan="2" style="width: 40px; font-weight: bold;">
			By
			<textarea style="width:99%; height: 95%;" type="text" name="by_a"></textarea>
			</td>
			<td colspan="4" rowspan="2" style="width: 40px; font-weight: bold;">
			To
			<textarea style="width:99%; height: 95%;" type="text" name="to_c"></textarea>
			</td>
			<td rowspan="2" style="width: 40px; font-weight: bold;">
			By
			<textarea style="width:99%; height: 95%;" type="text" name="by_b"></textarea>
			</td>
			<td colspan="3" rowspan="2" style="width: 38px; font-weight: bold;">
			Currency
			<textarea style="width:99%; height: 95%;" type="text" name="currency"></textarea>
			</td>
			<td colspan="2" rowspan="2" style="width: 28px; font-weight: bold;">
			CHGS<br>Code
			<textarea style="width:99%; height: 95%;" type="text" name="chgs_code"></textarea>
			</td>
			<td colspan="2" style="width: 28px; font-weight: bold;">
			<p>WT/VAL</p>
			</td>
			<td colspan="2" style="width: 19px; font-weight: bold;">
			<p>Other</p>
			</td>
			<td colspan="4" rowspan="2"style="width: 189px; text-align: center; font-weight: bold;">
			Declared Value for Carriage
			<textarea style="width:99%; height: 95%;" type="text" name="declared_value_for_carriage"></textarea>
			</td>
			<td colspan="5" rowspan="2" style="width: 47px; text-align: center; font-weight: bold;">
			Declared Value for Customs
			<textarea style="width:99%; height: 95%;" type="text" name="declared_value_for_customs"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="11" style="width: 151px;">
			<textarea style="width:99%; height: 97%;" type="text" name="by_first_carrier"></textarea>
			</td>
			<td style="width: 17px; font-weight: bold; text-align: center;">
			PPD
			<textarea style="width:99%; height: 95%;" type="text" name="ppd_v"></textarea>
			</td>
			<td colspan="1" style="width: 17px; font-weight: bold;">
			COLL
			<textarea style="width:99%; height: 95%;" type="text" name="coll_v"></textarea>
			</td>
			<td colspan="1" style="width: 16px; font-weight: bold;">
			PPD
			<textarea style="width:99%; height: 95%;" type="text" name="ppd_o"></textarea>
			</td>
			<td colspan="1" style="width: 16px; font-weight: bold;">
			COLL
			<textarea style="width:99%; height: 95%;" type="text" name="coll_o"></textarea>
			</td>
		
		</tr>
		<tr>
			<td colspan="10" rowspan="2" style="width: 161px; font-weight: bold;">
			<p style="text-align: center;">Airport of Destination</p>
			<textarea style="width:99%; height: 95%;" type="text" name="airport_of_destination"></textarea>
			</td>
			<td colspan="7" style="width: 63px; text-align:center; font-weight: bold;">
			<p>Flight/Date</p>
			</td>
			<td colspan="9" style="width: 63px; text-align:center; font-weight: bold;">
			<p>For Carrier Use Only</p>
			</td>
			<td colspan="2" style="width: 63px; text-align:center; font-weight: bold;">
			<p>Flight/Date</p>
			</td>
			<td colspan="8" rowspan="2" style="width: 113px; text-align:center; font-weight: bold;">
			Amount of Insurance
			<textarea style="width:99%; height: 95%;" type="text" name="ammount_of_insurance"></textarea>
			</td>
			<td colspan="8" rowspan="2" style="width: 236px;">
			<p style="text-align: justify; font-size: 8px;">INSURANCE &ndash; If Carrier offers insurance, and such insurance is requested in&nbsp; accordance with the conditions thereof, indicate amount to be insured in figures in box marked "Amount of Insurance"</p>
			</td>

		</tr>
		<tr>
			<td colspan="11" style="width: 94px;">
			<textarea style="width:99%; height: 95%;" type="text" name="flight_no"></textarea>
			</td>
			<td colspan="7" style="width: 95px;">
			<textarea style="width:99%; height: 95%;" type="text" name="flight_date"></textarea>
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
			<textarea style="width:99%; height: 100%;" type="text" name="no_of_pieces_rcp"></textarea>
			</td>
			<td colspan="8" rowspan="2" style="width: 82px;">
			<textarea style="width:99%; height: 244px;" type="text" name="gross_weight"></textarea>
			</td>
			<td rowspan="2" style="width: 9px;">
			<textarea style="width:99%; height: 244px;" type="text" name="kg_lb"></textarea>
			</td>
			<td rowspan="2" style="width: 11px;">
			<textarea style="width:99%; height: 244px;" type="text" name="rate_class"></textarea>
			</td>
			<td colspan="5" rowspan="2" style="width: 57px;">
			<textarea style="width:99%; height: 244px;" type="text" name="commodity_item_no"></textarea>
			</td>
			<td colspan="7" rowspan="2" style="width: 66px;">
			<textarea style="width:99%; height: 244px;" type="text" name="chargeable_weight"></textarea>
			</td>
			<td colspan="4" rowspan="2" style="width: 85px;">
			<textarea style="width:99%; height: 244px;" type="text" name="rate_charge"></textarea>
			</td>
			<td colspan="5" rowspan="2" style="width: 104px;">
						<!-- Button to open the popup -->
						<button class="icon-button" id="openPopup4" type="button" style="margin-top: -30px; margin-left: 5px;"><img src="/icons/add-list.png" alt="Icon"></button>

								<!-- Popup Modal -->
								<div id="popup4" class="popup">
								<div class="popup-content">
									<span class="close-button" id="closePopup4">&times;</span>
									<h2>Total</h2>
									<textarea  class="ck-editor__editable_inline" id="editor4"></textarea><br>
									<button class="button-7" id="saveButton4" type="button">Save</button>
									<button class="button-7" id="closePopupButton4" type="button">Close</button>
								</div>
							</div>
			<input class="hidden" type="text" id="geteditor4" name="total">
			<div id="displayArea4" style="margin-top: -7px;"></div>
			</td>
			<td colspan="7" rowspan="2" style="width: 208px;">
						<!-- Button to open the popup -->
						<button class="icon-button" id="openPopup5" type="button" style="margin-top: -30px; margin-left: 4px;"><img src="/icons/add-list.png" alt="Icon"></button>

								<!-- Popup Modal -->
								<div id="popup5" class="popup">
								<div class="popup-content">
									<span class="close-button" id="closePopup5">&times;</span>
									<h2>Nature and Quantity of Goods
									(incl. Dimensions or Volume)</h2>
									<textarea  class="ck-editor__editable_inline" id="editor5"></textarea><br>
									<button class="button-7" id="saveButton5" type="button">Save</button>
									<button class="button-7" id="closePopupButton5" type="button">Close</button>
								</div>
							</div>
			<input class="hidden" type="text" id="geteditor5" name="nature_and_quantity_of_goods">
			<div id="displayArea5" style="margin-top: -7px;"></div>
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
			<textarea style="width:100%; height: 100%;" type="text" name="prepaid"></textarea>
			</td>
			<td colspan="11" style="width: 132px;">
			<textarea style="width:100%; height: 100%;" type="text" name="collect"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="5" style="width: 88px; border-bottom: hidden;">
			<p>&nbsp;</p>
			</td>
			<td colspan="7" style="width: 111px; text-align: center; font-weight: bold;">
			<p>Valuation Charge</p>
			</td>
			<td colspan="8" style="width: 88px; border-bottom: hidden;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="9" style="width: 132px;">
			<textarea style="width:100%; height: 100%;" type="text" name="valuation_charge_a"></textarea>
			</td>
			<td colspan="11" style="width: 132px;">
			<textarea style="width:100%; height: 100%;" type="text" name="valuation_charge_b"></textarea>
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
			<textarea style="width:100%; height: 100%;" type="text" name="tax_a"></textarea>
			</td>
			<td colspan="11" style="width: 132px;">
			<textarea style="width:100%; height: 100%;" type="text" name="tax_b"></textarea>
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
			<textarea style="width:100%; height: 100%;" type="text" name="total_other_charges_due_agent_a"></textarea>
			</td>
			<td colspan="11" style="width: 132px;">
			<textarea style="width:100%; height: 100%;" type="text" name="total_other_charges_due_agent_b"></textarea>
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
			<textarea style="width:100%; height: 100%;" type="text" name="total_other_charges_due_carrier_a"></textarea>
			</td>
			<td colspan="11" style="width: 132px;">
			<textarea style="width:100%; height: 100%;" type="text" name="total_other_charges_due_carrier_b"></textarea>
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
			<textarea style="width:100%; height: 100%;" type="text" name="total_prepaid"></textarea>
			</td>
			<td colspan="11" style="width: 132px;">
			<textarea style="width:100%; height: 100%;" type="text" name="total_collect"></textarea>
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
			<textarea style="width:100%; height: 100%;" type="text" name="currency_conversion_rates"></textarea>
			</td>
			<td colspan="11" style="width: 132px;">
			<textarea style="width:100%; height: 100%;" type="text" name="cc_charges_in_dest_currency"></textarea>
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
			<textarea style="width:100%; height: 100%;" type="text" name="charges_at_destination"></textarea>
			</td>
			<td colspan="10" style="width: 132px;">
			<textarea style="width:100%; height: 100%;" type="text" name="total_collect_charges"></textarea>
			</td>
		</tr>
		</tbody>
</table><br>

<div class="container">
				<button class="button-7" type="submit">Save</button>
				</div>  
    </form>
<body>
</html>