<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bill Of Lading | View BL</title>
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

		@page {
			size: A4;
			margin: 30px;
			margin-bottom: 10px;
			  
			}

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
			width: 790px;
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

	.form-field	{
		border: none;
		outline: none;
		background-color: transparent;
	}

	input	{
		border: none;
		outline: none;
		background-color: transparent;
	}

	textarea {
        resize: none;
	}

    div
    {
        font-weight: bold;
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
    .watermark-container {
    position: relative;
	}

	.watermark {
		position: absolute;
		top: 50%;
		left: 50%;
		font-size: 40px;
		transform: translate(-50%, 190%);
		opacity: 0.1
		/* Adjust opacity, font-size, color, etc. as needed rotate(-45deg) */
	}					
        </style>
    </head>
	<body>
    <?php
    // Capture the 'stamp' parameter from the URL
    $stamp = isset($_GET['stamp']) ? $_GET['stamp'] : '';

    // Determine the watermark image based on the 'stamp' value
    if ($stamp == "NO STAMP") {
        $img ="";
    } else if ($stamp == "ORIGINAL COPY") {
        $img = "/images/watermark-original-copy.png";
        
    } else if ($stamp == "DRAFT COPY") {
        $img = "/images/watermark-draft-copy.png";
    } else {
        $img ="";
    }
    ?>
    <div class="watermark watermark-container"><img src="<?php echo $img; ?>" style="height: 100px; width: 540px;"></div>

	@csrf
	@method('PUT')
            <table>
			<tr>
				<td colspan="2" style="height: 90px; width: 100px;" >SHIPPER<br>
				<div>{{ old('shipper',$data->shipper) }}</div>
				
				<td class="no-border-bottom" colspan="3" rowspan="2">
					<p class="row">
						<div class="column">
							<img src="/images/HNS-International-Logo.png" style="height: 50px; width: 140px;"></img>
						</div>
						<p class="column1">
						<b style="font-size: 16px;">ALV INTERNATIONAL</b><br>
						<b>Corporate Office:</b> Police Plaza Concord<br>
						Level #07, Plot #02, Road #144, Gulshan C/A, <br>Dhaka - 1212.
						Tel: +1 (323) 8889-999.<br>
						Email: info@alv-international.com.<br>Web: www.alv-international.com

						</p>
					</p>
					<div class="no-border-all" style="text-align: center; font-size: 14px; margin-top: 160px;"><b>OCEAN BILL OF LADING</b></div>
				</td>

				

			</tr>
			<tr>
				<td colspan="2" style="height: 90px;">CONSIGNEE<br>
				<div>{{ old('consignee',$data->consignee) }}</div>
			</td>

				<!--<td class="no-border-top" colspan="3">
						<table style="width: 400px;">
							<tr>
								<td class="no-border-all" style="text-align: center; font-size: 14px; padding-top: 60px;"><b>OCEAN BILL OF LANDING</b></td>
							</tr>
						</table>

				</td>-->
				
			</tr>
			<tr>
				<td colspan="2" style="height: 90px;">NOTIFY PARTY<br>
				<div>{{ old('notify_party',$data->notify_party) }}</div>
			</td>

				<td colspan="3" rowspan="3">

					<table style="width: 400px; margin: 0;">
						<tr>
						<td class="no-border-left" style="height: 35px; width: 100px;">DATE OF ISSUE<br>
						<input readonly id="date_of_issue" value="{{ old('date_of_issue',$data->date_of_issue) }}" type="date" name="date_of_issue" style="width:87%; height: 30%;"/>
					</td>
						<td class="no-border" style="width: 100px;">B/L NUMBER<br>
						<div>{{ old('bl_number',$data->bl_number) }}</div>
					</td>
						</tr>
					
						<tr>
						<td class="no-border-rbl" colspan="3" rowspan="2" height="130px">FOR DELIVERY OF GOODS PLEASE APPLY TO:<br>
						<div style="width: 100%">{{ old('for_delivery_apply_to',$data->for_delivery_apply_to) }}</div>
					</td>
						</tr>

					</table>

				</td>

	
			</tr>
			<tr>
				<td style="height: 30px; width:218px;">PLACE OF RECEIPT<br>
				<div>{{ old('place_of_receipt',$data->place_of_receipt) }}</div>
			</td>
				<td style="width: 180.3px;">PORT LOADING<br>
				<div>{{ old('port_of_loading',$data->port_of_loading) }}</div>
			</td>
				

			</tr>
            <tr>
				<td style="height: 30px;">OCEAN VESSEL<br>
				<div>{{ old('ocean_vessel',$data->ocean_vessel) }}</div>
			</td>
				<td style="width: 150px;">VOYAGE NO.<br>
				<div>{{ old('voyage_no',$data->voyage_no) }}</div>
			</td>

	
			</tr>
            <tr>
				<td style="height: 35px;">PORT OF DISCHARGE<br>
				<div>{{ old('port_of_discharge',$data->port_of_discharge) }}</div>
			</td>
				<td>PLACE OF DELIVERY<br>
				<div style="width: 150px;">{{ old('place_of_delivery',$data->place_of_delivery) }}</div>
			</td>
				<td>FINAL DESTINATION<br>
				<div>{{ old('final_destination',$data->final_destination) }}</div>
			</td>
				<td>FREIGHT PAYABLE AT<br>
				<div>{{ old('freight_payable_at',$data->freight_payable_at) }}</div>
			</td>
				<td width="140px">NUMBER OF ORIGINAL B/L<br>
				<div>{{ old('number_of_original_bl',$data->number_of_original_bl) }}</div>
			</td>
			</tr>
			</table>
			<table>
            <tr>
				<td class="no-border-top" style="height: 25px; text-align: center;">MARKS & NUMBER<br>CONTAINER & SEAL NUMBERS</td>
				<td class="no-border-top" style="height: 25px; text-align: center;">NO. OF<br>PACKAGES</td>
				<td class="no-border-tb" style="height: 25px; text-align: center;">DESCRIPTION OF PACKAGES AND GOODS<br>PARTICULARS FURNISHED BY SHIPPER</td>
				<td class="no-border-top" style="height: 25px; text-align: center;">GROSS WEIGHT<br>KILOS</td>
                <td class="no-border-tb" style="height: 25px; text-align: center;">MESUREMENT<br>CBM</td>
			</tr>

            <tr>
			<div><td class="no-border-bottom" rowspan="3"  style="width: 180px; height: 400px;"><p>{!! old('marks_container_seal_no',$data->marks_container_seal_no) !!}</p></td></div>
			<td class="no-border-tb" rowspan="3" width="80px"><p>{!! old('number_of_packages',$data->number_of_packages) !!}</p></td>
			<td class="no-border-bottom" rowspan="3" width="300px"><p>{!! old('description_of_packages_and_goods',$data->description_of_packages_and_goods) !!}</p></td>
			<td class="no-border-bottom" rowspan="2" width="80px"><p>{{ old('gross_weight',$data->gross_weight) }}</p></td>
			<td class="no-border-bottom" rowspan="2" width="80px"><p>{{ old('measurement',$data->measurement) }}</p></td>				
			</tr>

			<tr>

						
			</tr>

           <!--<tr>

				
                <td class="no-border-rtb" colspan="2" style="text-align: center;"><u>ON BOARD DATE</u><br>
				<input readonly id="on_board_date" value="{{ old('on_board_date',$data->on_board_date) }}" type="date" name="on_board_date" style="width:87%; height: 5%; text-align: center; padding-left: 15px;"/>
			</td>
			</tr>-->

			</table>
			<table>
				<tr>
					<td>SHIPPED ON BOARD THE VESSEL<br>
					<div>{{ old('shipped_on_board_the_vessel',$data->shipped_on_board_the_vessel) }}</div>
					<hr style="border-top: dotted 1px;"/>
					<p>DATED <input readonly id="on_board_date" value="{{ old('on_board_date',$data->on_board_date) }}" type="date" name="on_board_date" style="width:87%; height: 5%;"/></p>
				
				</td>
						
									<td rowspan="3">
										<table style="width: 335px; margin: 0;">
												<tr>
													<td class="no-border-rbl" rowspan="2" style="width: 364.2px; font-size: 7px; text-align: justify;"><b>RECEIVED IN APPARENT GOOD ORDER AND CONDITION FOR TRANSPORTATION FROM THE PALCE OF RECEIPT TO THE PLACEOF DELIVERY SUBJECT TO THE TERMS AND CONDITIONS OF ALV INTERNATIONAL(SEE REVERSE) AS WELL AS TO THE CONDITONS AND EXCEPTIONS OF THE STEAMSHIP COMPANIES, CARRIERS, ORGANIZATIONS OR FRMS WHO HAVE PART IN RECEIVING, SHIPPING, CARRYING, FORARDING, STORING, HANDLING AND DELIVERY OF THE SAID GOODS, THE ABOVE MENTIONED PACKAGES SAID TO BE MARKED AND NUMBERED AS IN THE MARGIN, WEIGHT, MEASUREMENT, QUALITY, CONTENTS AND VALUE UNKNOWN SUBJECT TO THE CONDITIONS CONTAINED IN THE BILL OF LADING. THE DELIVERY WILL BE EFFECTED AT THE ABOVE DESIGNATED PLACE OF DESTINATION THERETO VIA ANY ROUTE CARRIERS DESIGNATED BY THE FORWARDING AGENTS, ONE ORIGINAL BILL OF LADING DULY ENDORSED MUST BE SURRENDERED TO THE ABOVE AGENT IN EXCHANGE FOR THE GOODS OR THE DELIVERY ORDER IN WITNESS WHEREOF THE NUMBER OF ORIGINAL BILL OF LADING STATED ABOVE HAS BEEN SIGNED ALL OF THIS TENOR AND DATE ON EOF WHICH BEING ACCOMPLISHED THE OTHER OT STAND VOID.</b><br>
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
								
									<td class="no-border-tl" style="width: 50px; height: 120px"><p>{{ old('freight_and_charges',$data->freight_and_charges) }}</p></td>
									<td class="no-border-top" style="width: 60px;"><p>{{ old('prepaid',$data->prepaid) }}</p></td>
									<td class="no-border-tr" style="width: 60px;"><p>{{ old('collect',$data->collect) }}</p></td>
							
								</tr>
								</table>
							</td>
						</tr>



 
				
			</table>

            <script>
        window.onload = function() {
            // Check if the 'print' query parameter is present
            const params = new URLSearchParams(window.location.search);
            if (params.has('print')) {
                // Trigger print dialog
                window.print();
            }
        };
    </script>


    </body>
</html>