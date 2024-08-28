<!DOCTYPE html>
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
			font-size: 11px;
            padding: 5px;
            background: #ffffff;
            color: #313030;
        }
        
        .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        }

        .no-border {
        border-left: none;  /* Hide the left border */
        border-right: none; /* Hide the right border */
        }

        .container-heading {
            display: flex;
            align-items: flex-start; /* Aligns items to the top */
        }

        .image img {
            height: 50px;
            width: 140px;
            margin-right: 20px; /* Space between image and text */
        }

        .text {
            font-size: 12px; /* Adjust font size as needed */
        }

</style>
<body>
<div class="container-heading">
        <div class="image">
            <img src="/images/HNS-Internaional-Logo.png" alt="HNS International Logo">
        </div>
        <div class="text">
            <b style="font-size: 16px;">HNS INTERNATIONAL</b><br>
            <b>Corporate Office:</b> Police Plaza Concord<br>
            Level #07, Plot #02, Road #144, Gulshan C/A,<br>
            Dhaka - 1212.<br>
            Tel: +880 2 55045148-9.<br>
            Email: info@hns-international.com.<br>
            Web: www.hns-international.com
        </div>
    </div>
    <h5 style="margin-left: 180px;">SHIPPING ORDER. CARTERS NOTE AND SHIPPERS INSTRUCTION</h5>
<table>
<tbody>
<tr>
<td style="height: 90px; width: 420px;"><b>Shipper</b>
<div>{{ old('shipper',$data->shipper) }}</div>
</td>
<td>&nbsp;</td>
</tr>
<tr>
<td style="height: 90px; width: 420px;"><b>Consignee</b>
<div>{{ old('consignee',$data->consignee) }}</div>
</td>
<td rowspan="2" style="height: 180px;"><b>Carrier</b>
<div>{{ old('carrier',$data->carrier) }}</div>
</td>
</tr>
<tr>
<td style="height: 90px; width: 420px;"><b>Notify Address</b>
<div>{{ old('notify_address',$data->notify_address) }}</div>
</td>
</tr>
</tbody>
</table>

<p style="margin-left: 50px;">This is a confirmation of our Nomination please contact the Shipper and update us the status of the shipment.</p>

<table>
  <tr>
    <td style="height: 30px;"><b>Vessel Details</b>
    <div>{{ old('vessel_details',$data->vessel_details) }}</div>    
    </td>
    <td><b>Voyage</b>
    <div>{{ old('voyage',$data->voyage) }}</div>
    </td>
    <td><b>Receiving Unit</b>
    <div>{{ old('receiving_unit',$data->receiving_unit) }}</div>
    </td>
    <td><b>Type of Service</b>
    <div>{{ old('type_of_service',$data->type_of_service) }}</div>
    </td>
    <td><b>Job Order Number</b>
    <div>{{ old('job_order_number',$data->job_order_number) }}</div>
    </td>
  </tr>
  <tr>
    <td style="height: 30px;"><b>Place of Receipt</b>
    <div>{{ old('place_of_receipt',$data->place_of_receipt) }}</div>
    </td>
    <td><b>Port of Loading</b>
    <div>{{ old('port_of_loading',$data->port_of_loading) }}</div>
    </td>
    <td><b>Port of Discharge</b>
    <div>{{ old('port_of_discharge',$data->port_of_discharge) }}</div>
    </td>
    <td><b>Final P.D</b>
  <div>{{ old('final_pd',$data->final_pd) }}</div>
    </td>
    <td><b>Job Order Date</b>
    <div>{{ old('job_order_date',$data->job_order_date) }}</div>
    </td>
  </tr>
</table>
<div  style="padding-top: 3px"></div>
<table>
  <tr>
    <td class="no-border"><center><b>Marks and Numbers</b></center></td>
    <td class="no-border"><center><b>Number of packages, kind of packages, general<br> description of goods, (Said to contain)</b></center></td>
    <td class="no-border"><center><b>Gross Weight</b></center></td>
    <td class="no-border"><center><b>Measurement</b></center></td>
  </tr>
  <tr>
    <td class="no-border" style="height: 400px; width: 250px;"><p>{!! old('marks_and_no',$data->marks_and_no) !!}</p></td>
    <td class="no-border" style="height: 400px; width: 300px;"><p>{!! old('general_description_of_goods',$data->general_description_of_goods) !!}</div></td>
    <td class="no-border" style="width: 100px; height: 400px;"><p>{{ old('gross_weight',$data->gross_weight) }}</p></td>
    <td class="no-border" style="width: 100px; height: 400px;"><p>{{ old('measurement',$data->measurement) }};</p></td>
  </tr>
  <tr style="height: 90px;">
    <td class="no-border" colspan="4"><b>Comments / Special Instructions:</b>
        <div>{{ old('comments',$data->comments) }}</div>
    </td>
  </tr>
</table>
</body>
</html>