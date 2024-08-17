<!DOCTYPE html>
<html >
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
		<script src="https://cdn.ckeditor.com/ckeditor5/ckeditor.js"></script>
		<script src="../../dist/js/addpopup.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">





        <!-- Styles -->
        <style>
            hr.new {
                    border-top: 1px solid black;
                    }
            
            .vl {
                    border-left: 1px solid black;        
                    }
                    
        table {
            border: 1px solid #000000;
            border-collapse: collapse;
            padding: 5px;
			width: 800px;
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
			font-size: 10px;
            padding: 5px;
            background: #ffffff;
            color: #313030;
        }

		.no-border {
        border-left: none;  /* Hide the left border */
        border-right: none; /* Hide the right border */
    }

	.no-border-all {
        border-left: none;  /* Hide the left border */
        border-right: none; /* Hide the right border */
		border-top: none;  /* Hide the top border */
        border-bottom: none; /* Hide the right border */
    }

	.no-border-rb {
        border-right: none; /* Hide the right border */
        border-bottom: none; /* Hide the right border */
    }

	.no-border-lb {
        border-left: none; /* Hide the right border */
        border-bottom: none; /* Hide the right border */
    }


	.no-border-tb {
        border-top: none;  /* Hide the left border */
        border-bottom: none; /* Hide the right border */

    }

	.no-border-ltb {
		border-left: none; /* Hide the right border */
        border-top: none;  /* Hide the top border */
        border-bottom: none; /* Hide the right border */
    }

	.no-border-rtb {
        border-right: none; /* Hide the right border */
        border-top: none;  /* Hide the top border */
        border-bottom: none; /* Hide the right border */
    }

	.no-border-rtl {
        border-right: none; /* Hide the right border */
        border-top: none;  /* Hide the top border */
        border-left: none; /* Hide the left border */
    }

	.no-border-rbl {
        border-right: none; /* Hide the right border */
        border-bottom: none;  /* Hide the bottom border */
        border-left: none; /* Hide the left border */
    }

	.no-border-tl {
        border-top: none;  /* Hide the left border */
        border-left: none; /* Hide the right border */
    }

	.no-border-tr {
        border-top: none;  /* Hide the left border */
        border-right: none; /* Hide the right border */
    }

	.no-border-top {
        border-top: none;  /* Hide the left border */
    }

	.no-border-bottom {
        border-bottom: none; /* Hide the right border */
    }

	.no-border-left {
        border-left: none;  /* Hide the left border */
    }

	.no-border-right {
        border-right: none; /* Hide the right border */
    }

	.tbordred {
    outline: solid 2px #377bb5;
    outline-offset: -2px;
	}

.table-container {
        display: flex;
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
    </head>
	<body>
	<a href="/dashboard" class="back-btn"><i class="fas fa-arrow-left"></i> Back</a>
<div class="element">
	            <!-- Display All Error Messages -->
				@if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There is empty field!<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
			
	<form action="{{ route('list.store') }}" method="POST">
	@csrf
			<table>
			<tr>
				<td colspan="2" style="height: 100px;">SHIPPER<br>
				<textarea id="shipper" name="shipper" style="width:98%; height: 80%;" required></textarea>
				</td>
				
				<td class="no-border-bottom" colspan="3" rowspan="2">
					<img class="center" src="/images/HNS-Internaional-Logo.png" style="height: 80px; width: 220px;"></img>
					<div colspan="3" class="no-border-all" style="text-align: center; font-size: 14px; margin-top: 100px;"><b>OCEAN BILL OF LANDING</b></div>
				</td>

				

			</tr>
			<tr>
				<td colspan="2" style="height: 100px;">CONSIGNEE<br>
				<textarea id="consignee" name="consignee" style="width:98%; height: 80%;" required></textarea>
			</td>
				
			</tr>
			<tr>
				<td colspan="2" style="height: 110px;">NOTIFY PARTY<br>
				<textarea id="notify_party" name="notify_party" style="width:98%; height: 80%;" required></textarea>
			</td>

				<td colspan="3" rowspan="3">

					<table style="width: 400px; height: 100px; margin: 0;">
						<tr>
						<td class="no-border-left" style="height: 35px; width: 55%">DATE OF ISSUE<br>
						<input id="date_of_issue" type="date" name="date_of_issue" style="width:87%; height: 60%;" required/>
					</td>
						<td class="no-border-right" style="width: 55%;">B/L NUMBER<br>
						<textarea id="bl_number" type="text" name="bl_number" style="width:100%;" required></textarea>
					</td>
						</tr>
					
						<tr>
						<td class="no-border-rbl" colspan="3" rowspan="2" height="140px">FOR DELIVERY OF GOODS PLEASE APPLY TO:<br>
						<textarea rows="10" cols="50" id="for_delivery_apply_to" name="for_delivery_apply_to" style="width:100%; height: 97%;" required></textarea>
					</td>
						</tr>

					</table>

				</td>
				

	
			</tr>
			<tr>
				<td style="height: 30px; width: 203px;">PLACE OF RECEIPT<br>
				<textarea id="place_of_receipt" type="text" name="place_of_receipt" style="width:90%;" required></textarea>
			</td>
				<td style="width: 207px;">PORT LOADING<br>
				<textarea id="port_of_loading" type="text" name="port_of_loading" style="width:90%;" required></textarea>
			</td>
				

			</tr>
            <tr>
				<td style="height: 30px;">OCEAN VESSEL<br>
				<textarea id="ocean_vessel" type="text" name="ocean_vessel" style="width:90%;" required></textarea>
			</td>
				<td>VOYAGE NO.<br>
				<textarea id="voyage_no" type="text" name="voyage_no" style="width:90%;" required></textarea>
			</td>
	
			</tr>
            <tr>
				<td style="height: 35px;">PORT OF DISCHARGE<br>
				<textarea id="port_of_discharge" type="text" name="port_of_discharge" style="width:90%;" required></textarea>
			</td>
				<td>PLACE OF DELIVERY<br>
				<textarea id="place_of_delivery" type="text" name="place_of_delivery" style="width:90%;" required></textarea>
			</td>

			</td>
				<td>FINAL DESTINATION<br>
				<textarea id="final_destination" type="text" name="final_destination" style="width:90%;" required></textarea>
			</td>
				<td>FREIGHT PAYABLE AT<br>
				<textarea id="freight_payable_at" type="text" name="freight_payable_at" style="width:90%;" required></textarea>
			</td>
				<td width="140px">NUMBER OF ORIGINAL B/L<br>
				<textarea id="number_of_original_bl" type="text" name="number_of_original_bl" style="width:90%;" required></textarea>
			</td>
			</tr>
			</table>
			<table style="height: 470px;">
            <tr>
				<td class="no-border-top" style="height: 35px; text-align: center;">MARKS & NUMBER<br>CONTAINER & SEAL NUMBERS</td>
				<td class="no-border-top" style="height: 35px; text-align: center;">NO. OF<br>PACKAGES</td>
				<td class="no-border-tb" style="height: 35px; text-align: center;">DESCRIPTION OF PACKAGES AND GOODS<br>PARTICULARS FURNISHED BY SHIPPER</td>
				<td class="no-border-top" style="height: 35px; text-align: center;">GROSS WEIGHT<br>KILOS</td>
                <td class="no-border-tb" style="height: 35px; text-align: center;">MESUREMENT<br>CBM</td>
			</tr>

            <tr>
			<td class="no-border-bottom" rowspan="3" width="180px" height="420px">
							<!-- Button to open the popup -->
							<center><button class="icon-button" id="openPopup" type="button" style="margin-left: 155px;"><img src="/icons/add-list.png" alt="Icon"></button></center>
						
							<!-- Popup Modal -->
							<div id="popup" class="popup">
								<div class="popup-content">
									<span class="close-button" id="closePopup">&times;</span>
									<h2>MARKS & NUMBER CONTAINER & SEAL NUMBERS</h2>
									<textarea  class="ck-editor__editable_inline" id="editor"></textarea><br>
									<button class="button-7" id="saveButton" type="button">Save</button>
									<button class="button-7" id="closePopupButton" type="button">Close</button>
								</div>
							</div>
							<input class="hidden" type="text" id="geteditor" name="marks_container_seal_no">
			<!--<textarea readonly id="geteditor" type="text" name="marks_container_seal_no" style="width:96%; height: 87%;"></textarea>-->
			<!--<div id="displayArea" style="width:96%; height: 87%;"></div>-->
			
			<div id="displayArea" style="margin-top: -13px;"></div>
			</td>
			<td class="no-border-tb" rowspan="3" width="80px">
							<!-- Button to open the popup -->
							<center><button class="icon-button" id="openPopup1" type="button" style="margin-left: 75px;"><img src="/icons/add-list.png" alt="Icon"></button></center><br>

							<!-- Popup Modal -->
							<div id="popup1" class="popup">
								<div class="popup-content">
									<span class="close-button" id="closePopup1">&times;</span>
									<h2>MARKS & NUMBER CONTAINER & SEAL NUMBERS</h2>
									<textarea  class="ck-editor__editable_inline" id="editor1"></textarea><br>
									<button class="button-7" id="saveButton1" type="button">Save</button>
									<button class="button-7" id="closePopupButton1" type="button">Close</button>
								</div>
							</div>
							<input class="hidden" type="text" id="geteditor1" name="number_of_packages">
							<div id="displayArea1" style="margin-top: -25px;"></div>
			</td>
			<td class="no-border-bottom" rowspan="3" width="300px">
							<!-- Button to open the popup -->
							<center><button class="icon-button" id="openPopup2" type="button" style="margin-left: 280px;"><img src="/icons/add-list.png" alt="Icon"></button></center><br>

							<!-- Popup Modal -->
							<div id="popup2" class="popup">
								<div class="popup-content">
									<span class="close-button" id="closePopup2">&times;</span>
									<h2>DESCRIPTION OF PACKAGES AND GOODS
									PARTICULARS FURNISHED BY SHIPPER</h2>
									<textarea  class="ck-editor__editable_inline" id="editor2"></textarea><br>
									<button class="button-7" id="saveButton2" type="button">Save</button>
									<button class="button-7" id="closePopupButton2" type="button">Close</button>
								</div>
							</div>
							<input class="hidden" type="text" id="geteditor2" name="description_of_packages_and_goods">
							<div id="displayArea2" style="margin-top: -26px;"></div>
			</td>
			<td class="no-border-bottom" width="80px">
			<textarea id="gross_weight" type="text" name="gross_weight" style="width:95%; height: 99%;" required></textarea>
			</td>
			<td class="no-border-lb" rowspan="2" width="80px">
			<textarea id="measurement" type="text" name="measurement" style="width:95%; height: 99%;" required></textarea>
			</td>		
			</tr>


            <tr>
			</tr>
			
			<!--<tr>
                <td class="no-border-rtb" colspan="2" style=" text-align: center;" style="width:100px; margin-bottom: 500px;"><u>ON BOARD DATE</u>
				<br>
				<input id="on_board_date" type="date" name="on_board_date" style="width:48%; height: 12%;" required/>
				</td>
			
			</tr>-->
			</table>
			<table>
				<tr>
					<td>SHIPPED ON BOARD THE VESSEL<br>
					<div><textarea id="bl_number" type="text" name="shipped_on_board_the_vessel" style="width: 96%;" required></textarea></div>
					<hr style="border-top: dotted 1px;"/>
					<p>DATED <input id="on_board_date" type="date" name="on_board_date" style="width:25%; height: 8%;"/></p>
				
				</td>
						
									<td rowspan="3">
										<table style="width: 345px; margin: 0;">
												<tr>
													<td class="no-border-rbl" rowspan="2" style="width: 364.2px; font-size: 7px; text-align: justify;"><b>RECEIVED IN APPARENT GOOD ORDER AND CONDITION FOR TRANSPORTATION FROM THE PALCE OF RECEIPT TO THE PLACEOF DELIVERY SUBJECT TO THE TERMS AND CONDITIONS OF HNS INTERNATIONAL(SEE REVERSE) AS WELL AS TO THE CONDITONS AND EXCEPTIONS OF THE STEAMSHIP COMPANIES, CARRIERS, ORGANIZATIONS OR FRMS WHO HAVE PART IN RECEIVING, SHIPPING, CARRYING, FORARDING, STORING, HANDLING AND DELIVERY OF THE SAID GOODS, THE ABOVE MENTIONED PACKAGES SAID TO BE MARKED AND NUMBERED AS IN THE MARGIN, WEIGHT, MEASUREMENT, QUALITY, CONTENTS AND VALUE UNKNOWN SUBJECT TO THE CONDITIONS CONTAINED IN THE BILL OF LADING. THE DELIVERY WILL BE EFFECTED AT THE ABOVE DESIGNATED PLACE OF DESTINATION THERETO VIA ANY ROUTE CARRIERS DESIGNATED BY THE FORWARDING AGENTS, ONE ORIGINAL BILL OF LADING DULY ENDORSED MUST BE SURRENDERED TO THE ABOVE AGENT IN EXCHANGE FOR THE GOODS OR THE DELIVERY ORDER IN WITNESS WHEREOF THE NUMBER OF ORIGINAL BILL OF LADING STATED ABOVE HAS BEEN SIGNED ALL OF THIS TENOR AND DATE ON EOF WHICH BEING ACCOMPLISHED THE OTHER OT STAND VOID.</b><br>
													<div style="margin-top: 95px;">
														<hr style="border-top: dotted 1px;"/>
													<div style="text-align: center; font-size: 12px;"><b>For HNS Internaional</b></div>
												
												</td>
												</tr>														
										</table>

									</td>
				</tr>

						<tr>
							<td style="margin: 0;">
								<table style="width: 430px;">
								<tr>
										<td class="no-border-left" style="width: 80px; text-align: center;">FREIGHT AND CHARGES</td>
										<td style="width: 60px; text-align: center;">PREPAID</td>
										<td class="no-border-right" style="width: 60px; text-align: center;">COLLECT</td>
								</tr>

								<tr>
								
									<td class="no-border-tl" style="width: 50px; height: 120px;"><textarea id="freight_and_charges" name="freight_and_charges" style="width:96%; height: 96%;" required></textarea></td>
									<td class="no-border-top" style="width: 60px; height: 120px;"><textarea id="prepaid" name="prepaid" style="width:96%; height: 96%;" required></textarea></td>
									<td class="no-border-tr" style="width: 60px; height: 120px;"><textarea id="collect" name="collect" style="width:96%; height: 96%;" required></textarea></td>
							
								</tr>
								</table>
							</td>
						</tr>



 
				
			</table><br>

				<div class="container">
				<button class="button-7" type="submit">Save</button>
				</div>    
</form>
</div>
<!--<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>-->
	<!--<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>-->
    </body>
</html>
