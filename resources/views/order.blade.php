<!DOCTYPE html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bill Of Lading | Shipping Order</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
		
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Include CKEditor 5 from CDN -->
		<script src="https://cdn.jsdelivr.net/npm/ckeditor5-classic-plus@41.3.0/build/ckeditor.js"></script>
		<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.1/ckeditor5.css" />
		<script src="https://cdn.ckeditor.com/ckeditor5/ckeditor.js"></script>
		<script src="../../dist/js/addpopup.js"></script>
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

        textarea {
        resize: none;
        font-size: 11px;
        }


        .container {
          text-align: center;
          display: block;
          margin-bottom: 10px;
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

        .element {
          max-width: fit-content;
          margin-left: auto;
          margin-right: auto;
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
<a href="/dashboard" class="back-btn"><i class="fas fa-arrow-left"></i> Back</a>
<div class="element">
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
<textarea name="shipper" style="width:98%; height: 80%;"></textarea>
</td>
<td>&nbsp;</td>
</tr>
<tr>
<td style="height: 90px; width: 420px;"><b>Consignee</b>
<textarea name="consignee" style="width:98%; height: 80%;"></textarea>
</td>
<td rowspan="2" style="padding-top: 180px;"><b>Carrier</b></td>
</tr>
<tr>
<td style="height: 90px; width: 420px;"><b>Notify Address</b>
<textarea name="notify_addressr" style="width:98%; height: 80%;"></textarea>
</td>
</tr>
</tbody>
</table>

<p style="margin-left: 50px;">This is a confirmation of our Nomination please contact the Shipper and update us the status of the shipment.</p>
    <form action="" method="">

      <table>
        <tr>
          <td style="height: 30px;"><b>Vessel Details</b>
          <textarea name="vessel_details" style="width:98%; height: 60%;"></textarea>
        </td>
          <td style="height: 30px;"><b>Voyage</b>
          <textarea name="voyage" style="width:98%; height: 60%;"></textarea>
        </td>
          <td style="height: 30px;"><b>Receiving Unit</b>
          <textarea name="receiving_unit" style="width:98%; height: 60%;"></textarea>
        </td>
          <td style="height: 30px;"><b>Type of Service</b>
          <textarea name="type_of_service" style="width:98%; height: 60%;"></textarea>
        </td>
          <td style="height: 30px;"><b>Job Order Number</b>
          <textarea name="job_order_number" style="width:98%; height: 60%;"></textarea>
        </td>
        </tr>
        <tr>
          <td style="height: 30px;"><b>Place of Receipt</b>
          <textarea name="place_of_receipt" style="width:98%; height: 60%;"></textarea>
        </td>
          <td><b>Port of Loading</b>
          <textarea name="port_of_loading" style="width:98%; height: 60%;"></textarea>
        </td>
          <td><b>Port of Discharge</b>
          <textarea name="port_of_discharge" style="width:98%; height: 60%;"></textarea>
        </td>
          <td><b>Final P.D</b>
          <textarea name="final_pd" style="width:98%; height: 60%;"></textarea>
        </td>
          <td><b>Job Order Date</b>
          <textarea name="job_order_date" style="width:98%; height: 60%;"></textarea>
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
        <tr style="height: 380px;">
          <td width="250px">
                          <!-- Button to open the popup -->
                          <center><button class="icon-button" id="openPopup" type="button" style="margin-left: 220px;"><img src="/icons/add-list.png" alt="Icon"></button></center>
                  
                  <!-- Popup Modal -->
                  <div id="popup" class="popup">
                    <div class="popup-content">
                      <span class="close-button" id="closePopup">&times;</span>
                      <h2>Marks and Numbers</h2>
                      <textarea  class="ck-editor__editable_inline" id="editor"></textarea><br>
                      <button class="button-7" id="saveButton" type="button">Save</button>
                      <button class="button-7" id="closePopupButton" type="button">Close</button>
                    </div>
                  </div>
                  <input class="hidden" type="text" id="geteditor" name="marks_and_no">

          
          <div id="displayArea" style="margin-top: -13px;"></div>
          </td>
          <td>
                    <!-- Button to open the popup -->
                    <center><button class="icon-button" id="openPopup2" type="button" style="margin-left: 280px;"><img src="/icons/add-list.png" alt="Icon"></button></center><br>

                    <!-- Popup Modal -->
                    <div id="popup2" class="popup">
                      <div class="popup-content">
                        <span class="close-button" id="closePopup2">&times;</span>
                        <h2>Number of packages, kind of packages, general
                        description of goods, (Said to contain)</h2>
                        <textarea  class="ck-editor__editable_inline" id="editor2"></textarea><br>
                        <button class="button-7" id="saveButton2" type="button">Save</button>
                        <button class="button-7" id="closePopupButton2" type="button">Close</button>
                      </div>
                    </div>
                    <input class="hidden" type="text" id="geteditor2" name="general_description_of_goods">
                    <div id="displayArea2" style="margin-top: -26px;"></div>
          </td>
          <td style="width: 100px; height: 100px;">
          <textarea name="gross_weight" style="width:95%; height: 98%;"></textarea>
          </td>
          <td style="width: 100px; height: 100px;">
          <textarea name="measurement" style="width:95%; height: 98%;"></textarea>
          </td>
        </tr>
        <tr>
          <td style="height: 80px; width: 100px;" colspan="5"><b>Comments / Special Instructions:</b>
          <textarea name="comments" style="width: 99%; height: 75%;"></textarea>
        </td>
        </tr>
      </table><br>
                <div class="container">
                  <button class="button-7" type="submit">Save</button>
                </div> 
      </div>
      </form>
</body>
</html>