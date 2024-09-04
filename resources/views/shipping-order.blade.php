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

    </style>
<body>

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
<td rowspan="2" style="height: 180px;"><b>Carrier</b>
<textarea name="carrier" style="width:98%; height: 91%;"></textarea>
</td>
</tr>
<tr>
<td style="height: 90px; width: 420px;"><b>Notify Address</b>
<textarea name="notify_address" style="width:98%; height: 80%;"></textarea>
</td>
</tr>
</tbody>
</table>

</body>
</html