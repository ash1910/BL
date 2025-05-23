<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

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
					
        </style>
    </head>



			<table>
			<tr>
				<td class="no-border-left" colspan="2" style="height: 100px;">SHIPPER</td>
				
				<td class="no-border-rtb" colspan="2">
					<img class="center" src="/images/HNS-Internaional-Logo.png" style="height: 80px; width: 220px;"></img>
				</td>

				

			</tr>
			<tr>
				<td class="no-border" colspan="2" style="height: 100px; width: 300px;">CONSIGNEE</td>

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
				<td class="no-border" colspan="2" style="height: 110px;">NOTIFY PARTY</td>

				<td class="no-border-rb" colspan="3">

					<table style="width: 300px; margin: 0;">
						<tr>
						<td class="no-border" style="height: 35px;">DATE OF ISSUE</td>
						<td class="no-border">B/L NUMBER</td>
						</tr>
					
						<tr>
						<td class="no-border-rbl" colspan="3" rowspan="2">FOR DELIVERY OF GOODS PLEASE APPLY TO:</td>
						</tr>

					</table>

				</td>

	
			</tr>
			<tr>
				<td class="no-border" style="height: 30px;">PLACE OF RECEIPT</td>
				<td class="no-border-left">PORT LOADING</td>
				

			</tr>
            <tr>
				<td class="no-border" style="height: 30px;">OCEAN VESSEL</td>
				<td class="no-border-left">VOYAGE NO.</td>
	
			</tr>
            <tr>
				<td class="no-border" style="height: 35px;">PORT OF DISCHARGE</td>
				<td class="no-border-left">FINAL DESTINATION</td>
				<td class="no-border-right">FREIGHT PAYABLE AT</td>
				<td class="no-border" colspan="2">NUMBER OF ORIGINAL B/L</td>
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
			<td class="no-border-lb" rowspan="3">&nbsp;</td>
			<td class="no-border-tb" rowspan="3">&nbsp;</td>
			<td class="no-border-bottom">&nbsp;</td>
			<td class="no-border-bottom" rowspan="2">&nbsp;</td>
			<td class="no-border-rb" rowspan="2">&nbsp;</td>				
			</tr>

			<tr>

			<td class="no-border-tb" style="text-align: center;"><b><u>CONTAINER NO. SIZE</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>SEAL NO. MODE</U></b></td>
						
			</tr>

            <tr>
			
				<td class="no-border-tb" style="text-align: center;"><b>FREIGHT COLLECT</b></td>
				
                <td class="no-border-rtb" colspan="2" style=" text-align: center;"><u>ON BOARD DATE</u></td>
			</tr>
			</table>
			<table>
				<tr>
					<td class="no-border-lb" style="width: 366px; font-size: 7px; text-align: justify;"><b>LAW AND JURIDICTION CLAUSE<br>THE CONTRACT EVIDENCED BY OR CONTAINED IN THIS BILL OF LADING SHALL BE GOVERNED BY THE LAW OF SINGAPORE AND NAY CLAIM OR DISPUTE ARISING HEREUNDER OR IN CONNECTION HEREWITH SHALL (WITHOUT PREJUDICE TO THE CARRIER RIGHT TO COMMENCE PROCEEDINGS IN ANY OTHER JURISDICTION) BE SUBJECT TO THE JURISDICTION OF THE COURTS OF SINGAPORE <br>NOTE:<br>THE MERCHANTS ATTENTION IS CALLED TO THE FACT THAT ACCORDING TO CLAUSES 10, 11 AND 12 OF THIS BILL OF LADING, THE LIABILITY OF THE CARRIER IS, IN MOST CASES, LIMITED IN RESPECT OF LOSS OF OR DAMAGE TO THE GOODS AND DELAY.<br>"APPLICABLE ONLY WHEN DOCUMENT USED AS A THROUGH B/L</b></td>
						
										<td class="no-border-right" rowspan="3">
										<table style="width: 423px; margin: 0;">

														<tr>
														<td class="no-border" style="text-align: center; font-size: 14px;"><b>ALV INTERNATIONAL</b></td>
														</tr> 

														<tr>
														<td class="no-border-right" rowspan="2" style="width: 364.2px; font-size: 7px; text-align: justify;"><b>RECEIVED IN APPARENT GOOD ORDER AND CONDITION FOR TRANSPORTATION FROM THE PALCE OF RECEIPT TO THE PLACEOF DELIVERY SUBJECT TO THE TERMS AND CONDITIONS OF ALV INTERNATIONAL(SEE REVERSE) AS WELL AS TO THE CONDITONS AND EXCEPTIONS OF THE STEAMSHIP COMPANIES, CARRIERS, ORGANIZATIONS OR FRMS WHO HAVE PART IN RECEIVING, SHIPPING, CARRYING, FORARDING, STORING, HANDLING AND DELIVERY OF THE SAID GOODS, THE ABOVE MENTIONED PACKAGES SAID TO BE MARKED AND NUMBERED AS IN THE MARGIN, WEIGHT, MEASUREMENT, QUALITY, CONTENTS AND VALUE UNKNOWN SUBJECT TO THE CONDITIONS CONTAINED IN THE BILL OF LADING. THE DELIVERY WILL BE EFFECTED AT THE ABOVE DESIGNATED PLACE OF DESTINATION THERETO VIA ANY ROUTE CARRIERS DESIGNATED BY THE FORWARDING AGENTS, ONE ORIGINAL BILL OF LADING DULY ENDORSED MUST BE SURRENDERED TO THE ABOVE AGENT IN EXCHANGE FOR THE GOODS OR THE DELIVERY ORDER IN WITNESS WHEREOF THE NUMBER OF ORIGINAL BILL OF LADING STATED ABOVE HAS BEEN SIGNED ALL OF THIS TENOR AND DATE ON EOF WHICH BEING ACCOMPLISHED THE OTHER OT STAND VOID.</b></td>
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
									<td class="no-border-rtb" style="text-align: center; width: 354.2px; font-size: 12px"><b>ALV INTERNATIONAL</b></td>
									
									</tr>

									<tr>
									<td class="no-border-left" style="text-align: center;">TOTAL:</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td class="no-border-tr" style="text-align: center;">AS AGENT FOR CARRIER ALV INTERNATIONAL</td>
									</tr>
												
									
									
								</table>







    
     
    </body>
</html>
