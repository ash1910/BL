<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
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
			

					
        </style>
    </head>
	<body>
<div class="element">
	<form action="{{ route('dashboard.store') }}" method="POST">
	@csrf
			<table>
			<tr>
				<td class="no-border-left" colspan="2" style="height: 100px;">SHIPPER<br>
				<textarea id="shipper" name="shipper" style="width:98%; height: 80%;"></textarea>
				</td>
				
				<td class="no-border-rtb" colspan="2">
					<img class="center" src="/images/HNS-Internaional-Logo.png" style="height: 80px; width: 220px;"></img>
				</td>

				

			</tr>
			<tr>
				<td class="no-border" colspan="2" style="height: 100px; width: 300px;">CONSIGNEE<br>
				<textarea id="consignee" name="consignee" style="width:98%; height: 80%;"></textarea>
			</td>

				<td class="no-border-tr" colspan="2">
						<table style="width: 300px;">
							<tr>
								<td class="no-border-all" style="font-size: 14px; padding-top: 60px;"><b>OCEAN BILL OF LANDING</b></td>
								<td class="no-border-all" colspan="2" style="width: 150px; font-size: 14px; padding-top: 60px;"><b>NON-NEGOTIABLE</b></td>
							</tr>
						</table>

				</td>
				
			</tr>
			<tr>
				<td class="no-border" colspan="2" style="height: 110px;">NOTIFY PARTY<br>
				<textarea id="notify_party" name="notify_party" style="width:98%; height: 80%;"></textarea>
			</td>

				<td class="no-border-rb" colspan="3" rowspan="3">

					<table style="width: 300px; height: 100px; margin: 0;">
						<tr>
						<td class="no-border" style="height: 35px;">DATE OF ISSUE<br>
						<input id="date_of_issue" type="date" name="date_of_issue" style="width:87%; height: 60%;"/>
					</td>
						<td class="no-border">B/L NUMBER<br>
						<textarea id="bl_number" type="text" name="bl_number" style="width:100%;"></textarea>
					</td>
						</tr>
					
						<tr>
						<td class="no-border-rbl" colspan="3" rowspan="2" height="140px">FOR DELIVERY OF GOODS PLEASE APPLY TO:<br>
						<textarea rows="10" cols="50" id="for_delivery_apply_to" name="for_delivery_apply_to" style="width:159%; height: 100%;"></textarea>
					</td>
						</tr>

					</table>

				</td>
				

	
			</tr>
			<tr>
				<td class="no-border" style="height: 30px;">PLACE OF RECEIPT<br>
				<textarea id="place_of_receipt" type="text" name="place_of_receipt" style="width:90%;"></textarea>
			</td>
				<td class="no-border-left">PORT LOADING<br>
				<textarea id="port_of_loading" type="text" name="port_of_loading" style="width:90%;"></textarea>
			</td>
				

			</tr>
            <tr>
				<td class="no-border" style="height: 30px;">OCEAN VESSEL<br>
				<textarea id="ocean_vessel" type="text" name="ocean_vessel" style="width:90%;"></textarea>
			</td>
				<td class="no-border-left">VOYAGE NO.<br>
				<textarea id="voyage_no" type="text" name="voyage_no" style="width:90%;"></textarea>
			</td>
	
			</tr>
            <tr>
				<td class="no-border" style="height: 35px;">PORT OF DISCHARGE<br>
				<textarea id="port_of_discharge" type="text" name="port_of_discharge" style="width:90%;"></textarea>
			</td>
				<td class="no-border-left">FINAL DESTINATION<br>
				<textarea id="final_destination" type="text" name="final_destination" style="width:90%;"></textarea>
			</td>
				<td class="no-border-right">FREIGHT PAYABLE AT<br>
				<textarea id="freight_payable_at" type="text" name="freight_payable_at" style="width:50%;"></textarea>
			</td>
				<td class="no-border" colspan="2">NUMBER OF ORIGINAL B/L<br>
				<textarea id="number_of_original_bl" type="text" name="number_of_original_bl" style="width:100%;"></textarea>
			</td>
			</tr>
			</table>
			<table style="height: 470px;">
            <tr>
				<td class="no-border-tl" style="height: 35px; text-align: center;">MARKS & NUMBER<br>CONTAINER & SEAL NUMBERS</td>
				<td class="no-border-top" style="height: 35px; text-align: center;">NO. OF<br>PACKAGES</td>
				<td class="no-border-tb" style="height: 35px; text-align: center;">DESCRIPTION OF PACKAGES AND GOODS<br>PARTICULARS FURNISHED BY SHIPPER</td>
				<td class="no-border-top" style="height: 35px; text-align: center;">GROSS WEIGHT<br>KILOS</td>
                <td class="no-border-rtb" style="height: 35px; text-align: center;">MESUREMENT<br>CBM</td>
			</tr>

            <tr>
			<td class="no-border-lb" rowspan="3" width="180px">
							<!-- Button to open the popup -->
							<center><button id="openPopup" type="button">Add</button></center><br>
						
							<!-- Popup Modal -->
							<div id="popup" class="popup">
								<div class="popup-content">
									<span class="close-button" id="closePopup">&times;</span>
									<h2>MARKS & NUMBER CONTAINER & SEAL NUMBERS</h2>
									<textarea  class="ck-editor__editable_inline" id="editor"></textarea><br>
									<button id="saveButton" type="button">Save</button>
									<button id="closePopupButton" type="button">Close</button>
								</div>
							</div>
							<input class="hidden" type="text" id="geteditor" name="marks_container_seal_no">
			<!--<textarea readonly id="geteditor" type="text" name="marks_container_seal_no" style="width:96%; height: 87%;"></textarea>-->
			<!--<div id="displayArea" style="width:96%; height: 87%;"></div>-->
			
			<div id="displayArea"></div>
			</td>
			<td class="no-border-tb" rowspan="3" width="100px">
							<!-- Button to open the popup -->
							<center><button id="openPopup1" type="button">Add</button></center><br>

							<!-- Popup Modal -->
							<div id="popup1" class="popup">
								<div class="popup-content">
									<span class="close-button" id="closePopup1">&times;</span>
									<h2>MARKS & NUMBER CONTAINER & SEAL NUMBERS</h2>
									<textarea  class="ck-editor__editable_inline" id="editor1"></textarea><br>
									<button id="saveButton1" type="button">Save</button>
									<button id="closePopupButton1" type="button">Close</button>
								</div>
							</div>
							<input class="hidden" type="text" id="geteditor1" name="number_of_packages">
							<div id="displayArea1"></div>
			</td>
			<td class="no-border-bottom" rowspan="3" width="260px">
							<!-- Button to open the popup -->
							<center><button id="openPopup2" type="button">Add</button></center><br>

							<!-- Popup Modal -->
							<div id="popup2" class="popup">
								<div class="popup-content">
									<span class="close-button" id="closePopup2">&times;</span>
									<h2>DESCRIPTION OF PACKAGES AND GOODS
									PARTICULARS FURNISHED BY SHIPPER</h2>
									<textarea  class="ck-editor__editable_inline" id="editor2"></textarea><br>
									<button id="saveButton2" type="button">Save</button>
									<button id="closePopupButton2" type="button">Close</button>
								</div>
							</div>
							<input class="hidden" type="text" id="geteditor2" name="description_of_packages_and_goods">
							<div id="displayArea2"></div>
			</td>
			<td class="no-border-bottom" width="100px">
			<textarea id="gross_weight" type="text" name="gross_weight" style="width:95%; height: 99%;"></textarea>
			</td>
			<td class="no-border-rbl" rowspan="2" width="100px">
			<textarea id="measurement" type="text" name="measurement" style="width:95%; height: 99%;"></textarea>
			</td>		
			</tr>


            <tr>
			</tr>
			
			<tr>
                <td class="no-border-rtb" colspan="2" style=" text-align: center;" style="width:100px; margin-bottom: 500px;"><u>ON BOARD DATE</u>
				<br>
				<input id="on_board_date" type="date" name="on_board_date" style="width:48%; height: 12%;"/>
				</td>
			
			</tr>
			</table>
			<table>
				<tr>
					<td class="no-border-lb" style="width: 366px; font-size: 7px; text-align: justify;"><b>LAW AND JURIDICTION CLAUSE<br>THE CONTRACT EVIDENCED BY OR CONTAINED IN THIS BILL OF LADING SHALL BE GOVERNED BY THE LAW OF SINGAPORE AND NAY CLAIM OR DISPUTE ARISING HEREUNDER OR IN CONNECTION HEREWITH SHALL (WITHOUT PREJUDICE TO THE CARRIER RIGHT TO COMMENCE PROCEEDINGS IN ANY OTHER JURISDICTION) BE SUBJECT TO THE JURISDICTION OF THE COURTS OF SINGAPORE <br>NOTE:<br>THE MERCHANTS ATTENTION IS CALLED TO THE FACT THAT ACCORDING TO CLAUSES 10, 11 AND 12 OF THIS BILL OF LADING, THE LIABILITY OF THE CARRIER IS, IN MOST CASES, LIMITED IN RESPECT OF LOSS OF OR DAMAGE TO THE GOODS AND DELAY.<br>"APPLICABLE ONLY WHEN DOCUMENT USED AS A THROUGH B/L</b></td>
						
										<td class="no-border-right" rowspan="3">
										<table style="width: 423px; margin: 0;">

														<tr>
														<td class="no-border" style="text-align: center; font-size: 14px;"><b>HNS INTERNATIONAL</b></td>
														</tr> 

														<tr>
														<td class="no-border-right" rowspan="2" style="width: 364.2px; font-size: 7px; text-align: justify;"><b>RECEIVED IN APPARENT GOOD ORDER AND CONDITION FOR TRANSPORTATION FROM THE PALCE OF RECEIPT TO THE PLACEOF DELIVERY SUBJECT TO THE TERMS AND CONDITIONS OF HNS INTERNATIONAL(SEE REVERSE) AS WELL AS TO THE CONDITONS AND EXCEPTIONS OF THE STEAMSHIP COMPANIES, CARRIERS, ORGANIZATIONS OR FRMS WHO HAVE PART IN RECEIVING, SHIPPING, CARRYING, FORARDING, STORING, HANDLING AND DELIVERY OF THE SAID GOODS, THE ABOVE MENTIONED PACKAGES SAID TO BE MARKED AND NUMBERED AS IN THE MARGIN, WEIGHT, MEASUREMENT, QUALITY, CONTENTS AND VALUE UNKNOWN SUBJECT TO THE CONDITIONS CONTAINED IN THE BILL OF LADING. THE DELIVERY WILL BE EFFECTED AT THE ABOVE DESIGNATED PLACE OF DESTINATION THERETO VIA ANY ROUTE CARRIERS DESIGNATED BY THE FORWARDING AGENTS, ONE ORIGINAL BILL OF LADING DULY ENDORSED MUST BE SURRENDERED TO THE ABOVE AGENT IN EXCHANGE FOR THE GOODS OR THE DELIVERY ORDER IN WITNESS WHEREOF THE NUMBER OF ORIGINAL BILL OF LADING STATED ABOVE HAS BEEN SIGNED ALL OF THIS TENOR AND DATE ON EOF WHICH BEING ACCOMPLISHED THE OTHER OT STAND VOID.</b></td>
														</tr>
														

													</table>

										</td>
							

				</tr>

						<tr>
							<td class="no-border-left" style="margin: 0;">
							<table style="width: 354.2px;">
							<tr>
									<td class="no-border-left" style="width: 50px; text-align: center;">FREIGHT AND<br>DISBURSEMENTS</td>
									<td style="width: 70px; text-align: center;">RATE AT<br>1 CBM </td>
									<td style="width: 60px; text-align: center;">PREPAID</td>
									<td class="no-border-right" style="width: 60px; text-align: center;">COLLECT</td>
							</tr>
							</table>
							</td>
						</tr>



 
				
			</table>



								<table class="no-border-rtl" style="width: 800px; height: 30px;">

									<tr>
									<td class="no-border-tl" style="width: 77px; height: 50px">&nbsp;</td>
									<td class="no-border-top" style="width: 70px;">&nbsp;</td>
									<td class="no-border-top" style="width: 60px;">&nbsp;</td>
									<td class="no-border-top" style="width: 60px;">&nbsp;</td>
									<td class="no-border-rtb" style="text-align: center; width: 354.2px; font-size: 12px"><b>HNS INTERNATIONAL</b></td>
									
									</tr>

									<tr>
									<td class="no-border-left" style="text-align: center;">TOTAL:</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td class="no-border-tr" style="text-align: center;">AS AGENT FOR CARRIER HNS INTERNATIONAL</td>
									</tr>
												
									
									
								</table><br>

				<div class="container">
				<button type="submit">Create</button>
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
