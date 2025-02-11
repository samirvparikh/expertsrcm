<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Insurance Details</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .header {
            background-color: yellow;
            font-weight: bold;
            text-align: center;
        }
        .section-header {
            background-color: cyan;
            font-weight: bold;
        }
        .highlight {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <table style="font-size: 8px;">
        <tr class="header">
            <td colspan="4" style="background-color: yellow; font-weight: bold; text-align: center;">Sunnyvale Dental Care</td>
        </tr>
        <tr>
            <td>Patient Name</td><td colspan="3">Bohnet, Juliene</td>
        </tr>
        <tr>
            <td>Patient DOB</td><td colspan="3">04/20/1959</td>
        </tr>
        <tr>
            <td>Policy Holder Name</td><td colspan="3">Bohnet, Juliene</td>
        </tr>
        <tr>
            <td>Policy Holder DOB</td><td colspan="3">04/20/1959</td>
        </tr>
        <tr class="section-header">
            <td colspan="4">Insurance Details</td>
        </tr>
        <tr>
            <td>Insurance Name</td><td colspan="3">Cigna</td>
        </tr>
        <tr>
            <td>In Network / Out of Network</td><td colspan="3">In Network</td>
        </tr>
        <tr>
            <td>Member ID</td><td colspan="3">U63209891</td>
        </tr>
        <tr>
            <td>Group Name</td><td colspan="3">COUNTY OF SAN MATEO</td>
        </tr>
        <tr>
            <td>Group Number</td><td colspan="3">3340005</td>
        </tr>
        <tr>
            <td>Effective Date</td><td colspan="3">10/01/2022</td>
        </tr>
        <tr>
            <td>Annual Maximum</td><td colspan="3">$1,500.00</td>
        </tr>
        <tr>
            <td>Remaining Maximum</td><td colspan="3">$1,500.00</td>
        </tr>
        <tr class="highlight">
            <td>Deductibles</td>
            <td>Individual</td>
            <td>Family</td>
            <td>Ortho</td>
        </tr>
        <tr>
            <td></td>
            <td>$50.00</td>
            <td>$150.00</td>
            <td>$0.00</td>
        </tr>
        <tr class="section-header">
            <td colspan="4">Required Preauth/X-Rays</td>
        </tr>
        <tr>
            <td>Extraction</td><td colspan="3">Yes</td>
        </tr>
        <tr>
            <td>Crown</td><td colspan="3">Yes</td>
        </tr>
        <tr>
            <td>RCT</td><td colspan="3">Yes</td>
        </tr>
        <tr>
            <td>Periodontal</td><td colspan="3">Yes</td>
        </tr>
        <tr>
            <td>Denture</td><td colspan="3">Yes</td>
        </tr>
    </table>
</body>
</html>
