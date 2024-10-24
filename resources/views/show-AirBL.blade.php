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
@csrf
@method('PUT')
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
		<p>Shipper's Name and Address</p>
		<p>&nbsp;</p>
		</td>
		<td colspan="15" style="width: 197.5px;">
		<b>Shipper's Account Number</b>
		<div>{{ old('shipper_account_number',$data->shipper_account_number) }}</div>
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
		{!! old('shipper_name_and_address',$data->shipper_name_and_address) !!}
		</td>

		<tr>
		<td colspan="17" style="width: 395px;">
		<p>Copies 1,2 and 3 of this Air Waybill are originals and have the same validity</p>
		</td>

		</tr>
		<tr>
		<td colspan="11" style="width: 197.5px; border-bottom: hidden; font-weight: bold;">
		<p>Consignee's Name and Address</p>
		<p>&nbsp;</p>
		</td>
		<td colspan="15" style="width: 197.5px;">
		<b>Consignee's Account Number</b>
		<div>{{ old('consignee_account_number',$data->consignee_account_number) }}</div>
		</td>
		<td colspan="17" rowspan="2" style="width: 395px;">
		<p style="text-align: justify;">It is agreed that the goods described herein are accepted in apparent good order and condition (exept as noted) for carriage SUBJECT TO THE CONDITIONS OF CONTRACT ON THE REVERSE HEREOF. ALL GOODS MAY BE CARRIED BY ANY OTHER MEANS INCLUDING ROAD OR ANY OTHER CARRIER UNLESS SPECIFIC CONTRARY INSTRUCTIONS ARE GIVEN HEREON BY THE SHIPPER, AND SHIPPER AGREES THAT THE SHIPMENT MAY BE CARRIED VIA INTERMEDIATE STOPPING PLACES WHICH THE CARRIER DEEMS APPROPRIATE. THE SHIPPER'S ATTENTION IS DRAWN TO THE NOTICE CONCERNING CARRIER'S LIMITATION OF LIABILITY. Shipper may increase such limitation of liability by declaring a higher value for carriage and paying a supplemental charge if required.</p>
		</td>

		</tr>
		<tr>
			<td colspan="26" style="width: 395px; height: 120px;">
			<div>{!! old('consignee_name_and_address',$data->consignee_name_and_address) !!}</div>
			</td>
		</tr>
		<tr>
			<td colspan="26" style="width: 395px; height: 65px;">
			<b>Issuing Carrier's Agent Name and City</b>
			<div style="margin-top: -12px;">{!! old('issuing_carrier_agent_name_and_city',$data->issuing_carrier_agent_name_and_city) !!}</div>
			</td>
			<td colspan="17" rowspan="2" style="width: 395px;">
			<b>Accounting Information</b>
			<div style="margin-top: -12px;">{!! old('accounting_information',$data->accounting_information) !!}</div>
			</td>
		</tr>
		<tr>
			<td colspan="11" style="width: 197.5px;">
			<b>Agent's IATA Code</b>
			<div>{{ old('agent_iata_code',$data->agent_iata_code) }}</div>
			</td>
			<td colspan="15" style="width: 197.5px;">
			<b>Account No.</b>
			<div>{{ old('account_number',$data->account_number) }}</div>
			</td>
		</tr>
		<tr>
			<td colspan="26" rowspan="2" style="width: 395px;">
			<b>Airport of Departure (Addr. of First Carrier) and Requested Routing</b>
			<div>{{ old('airport_of_departure',$data->airport_of_departure) }}</div>
			</td>
			<td colspan="8" style="border-bottom: hidden;">
			<b>Reference Number</b>
			<div>{{ old('reference_number',$data->reference_number) }}</div>
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
			<div>{{ old('to_a',$data->to_a) }}</div>
			</td>
			<td colspan="4" style="width: 76px; border-bottom: hidden;">
			<b>By First Carrier</b>
			</td>
			<td colspan="7" style="width: 76px; font-size: 7px; text-align: center; font-weight: bold;">
			<p>Routing and Destination</p>
			</td>
			<td colspan="5" rowspan="2" style="width: 40px;">
			<b>To</b>
			<div>{{ old('to_b',$data->to_b) }}</div>
			</td>
			<td colspan="3" rowspan="2" style="width: 40px;">
			<b>By</b>
			<div>{{ old('by_a',$data->by_a) }}</div>
			</td>
			<td colspan="4" rowspan="2" style="width: 40px;">
			<b>To</b>
			<div>{{ old('to_c',$data->to_c) }}</div>
			</td>
			<td rowspan="2" style="width: 40px;">
			<b>By</b>
			<div>{{ old('by_b',$data->by_b) }}</div>
			</td>
			<td colspan="3" rowspan="2" style="width: 38px;">
			<b>Currency</b>
			<div>{{ old('currency',$data->currency) }}</div>
			</td>
			<td colspan="2" rowspan="2" style="width: 28px;">
			<b>CHGS<br>Code</b>
			<div>{{ old('chgs_code',$data->chgs_code) }}</div>
			</td>
			<td colspan="2" style="width: 28px; font-weight: bold;">
			<p>WT/VAL</p>
			</td>
			<td colspan="2" style="width: 19px; font-weight: bold;">
			<p>Other</p>
			</td>
			<td colspan="4" rowspan="2"style="width: 189px; text-align: center;">
			<b>Declared Value for Carriage</b>
			<div>{{ old('declared_value_for_carriage',$data->declared_value_for_carriage) }}</div>
			</td>
			<td colspan="5" rowspan="2" style="width: 47px; text-align: center;">
			<b>Declared Value for Customs</b>
			<div>{{ old('declared_value_for_customs',$data->declared_value_for_customs) }}</div>
			</td>
		</tr>
		<tr>
			<td colspan="11" style="width: 151px;">
			<div>{{ old('by_first_carrier',$data->by_first_carrier) }}</div>
			</td>
			<td style="width: 17px; text-align: center;">
			<b>PPD</b>
			<div>{{ old('ppd_v',$data->ppd_v) }}</div>
			</td>
			<td colspan="1" style="width: 17px;">
			<b>COLL</b>
			<div>{{ old('coll_v',$data->coll_v) }}</div>
			</td>
			<td colspan="1" style="width: 16px;">
			<b>PPD</b>
			<div>{{ old('ppd_o',$data->ppd_o) }}</div>
			</td>
			<td colspan="1" style="width: 16px;">
			<b>COLL</b>
			<div>{{ old('coll_o',$data->coll_o) }}</div>
			</td>
		
		</tr>
		<tr>
			<td colspan="10" rowspan="2" style="width: 161px;">
			<b style="text-align: center;">Airport of Destination</b>
			<div>{{ old('airport_of_destination',$data->airport_of_destination) }}</div>
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
			<td colspan="8" rowspan="2" style="width: 113px; text-align:center;">
			<b>Amount of Insurance</b>
			<div>{{ old('ammount_of_insurance',$data->ammount_of_insurance) }}</div>
			</td>
			<td colspan="8" rowspan="2" style="width: 236px;">
			<p style="text-align: justify; font-size: 8px;">INSURANCE &ndash; If Carrier offers insurance, and such insurance is requested in&nbsp; accordance with the conditions thereof, indicate amount to be insured in figures in box marked "Amount of Insurance"</p>
			</td>

		</tr>
		<tr>
			<td colspan="11" style="width: 94px;">
			<div>{{ old('flight_no',$data->flight_no) }}</div>
			</td>
			<td colspan="7" style="width: 95px;">
			<div>{{ old('flight_date',$data->flight_date) }}</div>
			</td>
		</tr>
		<tr>
			<td colspan="43" style="width: 699px; border-bottom: none;">
			<div style="font-weight: bold">Handling Information</div>
			<div>{{ old('handling_information',$data->handling_information) }}</div>
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
			<div>{{ old('no_of_pieces_rcp',$data->no_of_pieces_rcp) }}</div>
			</td>
			<td colspan="8" rowspan="2" style="width: 82px;">
			<div>{{ old('gross_weight',$data->gross_weight) }}</div>
			</td>
			<td rowspan="2" style="width: 9px;">
			<div>{{ old('kg_lb',$data->kg_lb) }}</div>
			</td>
			<td rowspan="2" style="width: 11px;">
			<div>{{ old('rate_class',$data->rate_class) }}</div>
			</td>
			<td colspan="5" rowspan="2" style="width: 57px;">
			<div>{{ old('commodity_item_no',$data->commodity_item_no) }}</div>
			</td>
			<td colspan="7" rowspan="2" style="width: 66px;">
			<div>{{ old('chargeable_weight',$data->chargeable_weight) }}</div>
			</td>
			<td colspan="4" rowspan="2" style="width: 85px;">
			<div>{{ old('rate_charge',$data->rate_charge) }}</div>		
			</td>
			<td colspan="5" rowspan="2" style="width: 104px;">
			<div>{!! old('total',$data->total) !!}</div>		
			</td>
			<td colspan="7" rowspan="2" style="width: 208px;">
			<div>{!! old('nature_and_quantity_of_goods',$data->nature_and_quantity_of_goods) !!}</div>
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
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('prepaid',$data->prepaid) }}</div>	
			</td>
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('collect',$data->collect) }}</div>	
			</td>
		</tr>
		<tr>
			<td colspan="5" style="width: 88px; border-bottom: hidden;">
			<p>&nbsp;</p>
			</td>
			<td colspan="7" style="width: 110px; text-align: center; font-weight: bold;">
			<p>Valuation Charge</p>
			</td>
			<td colspan="8" style="width: 88px; border-bottom: hidden;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('valuation_charge_a',$data->valuation_charge_a) }}</div>
			</td>
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('valuation_charge_b',$data->valuation_charge_b) }}</div>
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
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('tax_a',$data->tax_a) }}</div>
			</td>
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('tax_b',$data->tax_b) }}</div>
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
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('total_other_charges_due_agent_a',$data->total_other_charges_due_agent_a) }}</div>
			</td>
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('total_other_charges_due_agent_b',$data->total_other_charges_due_agent_b) }}</div>
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
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('total_other_charges_due_carrier_a',$data->total_other_charges_due_carrier_a) }}</div>
			</td>
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('total_other_charges_due_carrier_b',$data->total_other_charges_due_carrier_b) }}</div>
			</td>
		</tr>
		<tr>
			<td colspan="10" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
			<td colspan="10" style="width: 132px;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="10" style="width: 132px; text-align: center; font-weight: bold;">
			<p>Total Prepaid</p>
			</td>
			<td colspan="10" style="width: 132px; text-align: center; font-weight: bold;">
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
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('total_prepaid',$data->total_prepaid) }}</div>
			</td>
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('total_collect',$data->total_collect) }}</div>
			</td>
		</tr>
		<tr>
			<td colspan="10" style="width: 132px; text-align: center; font-weight: bold;">
			<p>Currency Conversion Rates</p>
			</td>
			<td colspan="10" style="width: 132px; text-align: center; font-weight: bold;">
			<p>CC Charges in Dest. Currency</p>
			</td>
		</tr>
		<tr>
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('currency_conversion_rates',$data->currency_conversion_rates) }}</div>
			</td>
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('cc_charges_in_dest_currency',$data->cc_charges_in_dest_currency) }}</div>
			</td>
		</tr>
		<tr>
			<td colspan="10" rowspan="2" style="width: 132px; text-align: center; font-weight: bold;">
			<p>For Carrier's Use only<br>at Destination</p>
			</td>
			<td colspan="10" style="width: 132px; text-align: center; font-weight: bold;">
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
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('charges_at_destination',$data->charges_at_destination) }}</div>
			</td>
			<td colspan="10" style="width: 132px;">
			<div style="text-align: center;">{{ old('total_collect_charges',$data->total_collect_charges) }}</div>
			</td>
		</tr>
		</tbody>
</table>
<body>
</html>