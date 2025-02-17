<?php
$coverageData = json_decode($eligibilities->first()->coverage_data, true) ?? [];
$requiredPreauthXrayData = json_decode($eligibilities->first()->required_preauth_xray_data, true) ?? [];
$eligibility = $eligibilities->first();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.F. </title>
</head>

<body>
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td colspan="4" style="border: 1px solid black; background-color: yellow; font-weight: bold; text-align: center;">Sunnyvale Dental Care</td>
        </tr>
        <tr>
            <td>Patient Name</td>
            <td colspan="3">{{ $eligibility->patient->name ?? '' }}</td>
        </tr>
        <tr>
            <td>Patient DOB</td>
            <td colspan="3">{{ $eligibility->patient->dob ?? '' }}</td>
        </tr>
        <tr>
            <td>Policy Holder Name</td>
            <td colspan="3">{{ $eligibility->policy_holder_name ?? '' }}</td>
        </tr>
        <tr>
            <td>Policy Holder DOB</td>
            <td colspan="3">{{ viewDate($eligibility->policy_holder_dob) ?? '' }}</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid black; background-color: yellow; font-weight: bold; text-align: center;">Insurance Details</td>
        </tr>
        <tr>
            <td>Insurance Name</td>
            <td colspan="3">{{ $eligibility->insurance_name ?? '' }}</td>
        </tr>
        <tr>
            <td style="background-color: {{ $eligibility->network_status ? '#25d85b' : '#ff524f' }}">In Network / Out of Network</td>
            <td style="background-color: {{ $eligibility->network_status ? '#25d85b' : '#ff524f' }}" colspan="3">{{ $eligibility->network_status ? 'In Network' : 'Out of Network' }}</td>
        </tr>
        <tr>
            <td>Member ID</td>
            <td colspan="3">{{ $eligibility->member_id ?? '' }}</td>
        </tr>
        <tr>
            <td>Group Name</td>
            <td colspan="3">{{ $eligibility->group_name ?? '' }}</td>
        </tr>
        <tr>
            <td>Group Number</td>
            <td colspan="3">{{ $eligibility->group_number ?? '' }}</td>
        </tr>
        <tr>
            <td>Effective Date</td>
            <td colspan="3">{{ ymdtomdy($eligibility->effective_date) ?? '' }}</td>
        </tr>
        <tr>
            <td>End Date</td>
            <td colspan="3">{{ ymdtomdy($eligibility->end_date) ?? '' }}</td>
        </tr>
        <tr>
            <td>Claims Filling Limit</td>
            <td colspan="3">{{ $eligibility->claims_filing_limit ?? '' }}</td>
        </tr>
        <tr>
            <td>Life Time</td>
            <td colspan="3">{{ $eligibility->life_time ?? '' }}</td>
        </tr>
        
        <tr>
            <td>Waiting Period</td>
            <td>No</td>
            <td colspan="2">N/A</td>
        </tr>
        <tr>
            <td>Missing Tooth Clause</td>
            <td>No</td>
            <td colspan="2">N/A</td>
        </tr>

        <tr>
            <td>Ortho Maximum</td>
            <td colspan="3">Not covered</td>
        </tr>
        <tr>
            <td>AnnOrtho Remianing Maximumual</td>
            <td colspan="3">Not covered</td>
        </tr>
        <tr>
            <td>Ortho Age Limit</td>
            <td colspan="3">N/A</td>
        </tr>
        <tr>
            <td>Annual Maximum</td>
            <td colspan="3">$1,500.00</td>
        </tr>
        <tr>
            <td>Remaining Maximum</td>
            <td colspan="3">$1,500.00</td>
        </tr>
        <tr>
            <td>Plan Year</td>
            <td colspan="3">Calender Year</td>
        </tr>
        <tr class="highlight">
            <td></td>
            <td>Individual</td>
            <td>Family</td>
            <td>Ortho</td>
        </tr>
        <tr>
            <td>Deductibles</td>
            <td>$50.00</td>
            <td>$150.00</td>
            <td>$0.00</td>
        </tr>
        <tr>
            <td>Deductible REMAIN</td>
            <td>$50.00</td>
            <td>$150.00</td>
            <td>$0.00</td>
        </tr>
        <tr>
            <td>Deductible Applies To</td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td>Preventive Waived</td>
            <td colspan="3"></td>
        </tr>

        <tr>
            <td colspan="4" style="border: 1px solid black; background-color: yellow; font-weight: bold; text-align: center;">Required Preauth/X-Rays</td>
        </tr>        
        @foreach(getEligibilityFormFieldsArray()['requiredPreauthXrayArray'] as $key => $value)
            <tr>
                <td>{{ $value }}</td>
                <td colspan="3">{{ $requiredPreauthXrayData[$key] ?? '' }}</td>
            </tr>
        @endforeach


        <tr>
            <td colspan="4" style="border: 1px solid black; background-color: yellow; font-weight: bold; text-align: center;">Coverage %</td>
        </tr>
        @foreach(getEligibilityFormFieldsArray()['coverageData'] as $key => $value)
            <tr>
                <td>{{ $value['coverage'] }}</td>                
                <td colspan="2">{{ $coverageData[$key]['coverage'] ?? '' }}</td>
                <td>{{ $coverageData[$key]['remarks'] ?? '' }}</td>
            </tr>
        @endforeach

    </table>
</body>

</html>