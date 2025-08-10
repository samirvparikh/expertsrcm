<?php
$deductiblesData = json_decode($eligibilities->first()->deductibles_data, true) ?? [];
$requiredPreauthXrayData = json_decode($eligibilities->first()->required_preauth_xray_data, true) ?? [];
$coverageData = json_decode($eligibilities->first()->coverage_data, true) ?? [];
$examData = json_decode($eligibilities->first()->exam_data, true) ?? [];
$shareHistoryData = json_decode($eligibilities->first()->share_history_data, true) ?? [];
$fluorideSealantsData = json_decode($eligibilities->first()->fluoride_sealants_data, true) ?? [];
$eligibility = $eligibilities->first();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.F. {{ $eligibility->patient->name ?? '' }}</title>
</head>

<body>
    <table style="width: 100%; border-collapse: collapse;" border="1">
        <tr>
            <td colspan="4" style="border: 1px solid black; background-color: yellow; font-weight: bold; text-align: center;">Sunnyvale Dental Care</td>
        </tr>
        <tr>
            <td>Patient Name Full</td>
            <td colspan="3">{{ $eligibility->patient->name ?? '' }}</td>
        </tr>
        <tr>
            <td>Patient DOB</td>
            <td colspan="3">{{ viewDate($eligibility->patient->dob) ?? '' }}</td>
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
            <td colspan="4" style="border: 1px solid black; background-color: #21fffe; font-weight: bold; text-align: center;">Insurance Details</td>
        </tr>
        <tr>
            <td>Insurance Name</td>
            <td colspan="3">{{ $eligibility->insurance_name ?? '' }}</td>
        </tr>
        <tr>
            <td style="background-color: {{ $eligibility->network_status ? '#25fd3c' : '#ff524f' }}">In Network / Out of Network</td>
            <td colspan="3" style="background-color: {{ $eligibility->network_status ? '#25fd3c' : '#ff524f' }}">{{ $eligibility->network_status ? 'In Network' : 'Out of Network' }}</td>
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
            <td colspan="3">{{ viewDate($eligibility->effective_date) ?? '' }}</td>
        </tr>
        <tr>
            <td>End Date</td>
            <td colspan="3">{{ viewDate($eligibility->end_date) ?? '' }}</td>
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
            <td>{{ $eligibility->waiting_period ?? '' }}</td>
            <td colspan="2">{{ $eligibility->waiting_period_remarks ?? '' }}</td>
        </tr>
        <tr>
            <td>Missing Tooth Clause</td>
            <td>{{ $eligibility->missing_tooth_clause ?? '' }}</td>
            <td colspan="2">{{ $eligibility->missing_tooth_clause_remarks ?? '' }}</td>
        </tr>

        <tr>
            <td style="background-color: #fff1cf">Ortho Maximum</td>
            <td colspan="3" style="background-color: #fff1cf">
                {{ is_numeric($eligibility->ortho_maximum ?? '')  ? '$'.$eligibility->ortho_maximum : ($eligibility->ortho_maximum ?? '') }}
            </td>
        </tr>
        <tr>
            <td style="background-color: #fff1cf">Ortho Remianing Maximum</td>
            <td colspan="3" style="background-color: #fff1cf">
                {{ is_numeric($eligibility->ortho_remaining_maximum ?? '')  ? '$'.$eligibility->ortho_remaining_maximum : ($eligibility->ortho_remaining_maximum ?? '') }}
            </td>
        </tr>
        <tr>
            <td style="background-color: #fff1cf">Ortho Age Limit</td>
            <td colspan="3" style="background-color: #fff1cf">{{ $eligibility->ortho_age_limit ?? '' }}</td>
        </tr>
        <tr>
            <td>Annual Maximum</td>
            <td colspan="3">
                {{ is_numeric($eligibility->annual_maximum ?? '')  ? '$'.$eligibility->annual_maximum : ($eligibility->annual_maximum ?? '') }}
            </td>
        </tr>
        <tr>
            <td>Remaining Maximum</td>
            <td colspan="3">
                {{ is_numeric($eligibility->remaining_maximum ?? '')  ? '$'.$eligibility->remaining_maximum : ($eligibility->remaining_maximum ?? '') }}
            </td>
        </tr>
        <tr>
            <td>Plan Year</td>
            <td colspan="3">{{ $eligibility->plan_year ?? '' }}</td>
        </tr>
        <tr class="highlight">
            <td></td>
            <td style="background-color: yellow; font-weight: bold; text-align: center;">Individual</td>
            <td style="background-color: yellow; font-weight: bold; text-align: center;">Family</td>
            <td style="background-color: yellow; font-weight: bold; text-align: center;">Ortho</td>
        </tr>
        @foreach(getEligibilityFormFieldsArray()['deductiblesArray'] as $key => $value)
            <tr>
                <td>{{ $value }}</td>
                <td>
                    {{ is_numeric($deductiblesData[$key]['individual'] ?? '')  ? '$'.$deductiblesData[$key]['individual'] : ($deductiblesData[$key]['individual'] ?? '') }}
                </td>
                <td>
                    {{ is_numeric($deductiblesData[$key]['family'] ?? '')  ? '$'.$deductiblesData[$key]['family'] : ($deductiblesData[$key]['family'] ?? '') }}
                </td>
                <td>
                    {{ is_numeric($deductiblesData[$key]['ortho'] ?? '')  ? '$'.$deductiblesData[$key]['ortho'] : ($deductiblesData[$key]['ortho'] ?? '') }}
                </td>
            </tr>
        @endforeach
        <tr>
            <td>Deductible Applies To</td>
            <td colspan="3">{{ $eligibility->deductible_applies_to ?? '' }}</td>
        </tr>
        <tr>
            <td>Preventive Waived</td>
            <td colspan="3">{{ $eligibility->preventive_waived ?? '' }}</td>
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
        @foreach(getEligibilityFormFieldsArray()['coverageArray'] as $key => $value)
            <tr>
                <td>{{ $value['coverage'] }}</td>                
                <td colspan="2">
                    {{ is_numeric($coverageData[$key]['coverage'] ?? '')  ? $coverageData[$key]['coverage'] . '%'  : ($coverageData[$key]['coverage'] ?? '') }}
                </td>
                <td>{{ $coverageData[$key]['remarks'] ?? '' }}</td>
            </tr>
        @endforeach

        <tr>
            <td colspan="4" style="border: 1px solid black; background-color: #21fffe; font-weight: bold; text-align: center;">Frequency and History</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; font-weight: bold; text-align: center;"></td>
            <td colspan="2" style="border: 1px solid black; background-color: #FFFF00; font-weight: bold; text-align: center;">Frequency</td>
            <td style="border: 1px solid black; background-color: #FFFF00; font-weight: bold; text-align: center;">History</td>
        </tr>
        @foreach(getEligibilityFormFieldsArray()['examDataArray'] as $key => $value)
            <tr>
                <td>{{ $value }}</td>                
                <td colspan="2">{{ $examData[$key]['frequency'] ?? '' }}</td>
                <td>{{ $examData[$key]['history'] ?? '' }}</td>
            </tr>
        @endforeach

        <tr>
            <td colspan="4" style="border: 1px solid black; background-color: #21fffe; font-weight: bold; text-align: center;">Share History?</td>
        </tr>
        @foreach(getEligibilityFormFieldsArray()['shareHistoryArray'] as $field => $value)
            <tr>
                <td>{{ $value }}</td>                
                <td colspan="3">{{ $shareHistoryData[$field] ?? '' }}</td>
            </tr>
        @endforeach

        <tr>
            <td colspan="4" style="border: 1px solid black; background-color: #21fffe; font-weight: bold; text-align: center;">Fluoride and Sealants?</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; font-weight: bold; text-align: center;"></td>
            <td style="border: 1px solid black; background-color: #FFFF00; font-weight: bold; text-align: center;">Frequency</td>
            <td style="border: 1px solid black; background-color: #FFFF00; font-weight: bold; text-align: center;">History</td>
            <td style="border: 1px solid black; background-color: #FFFF00; font-weight: bold; text-align: center;">Age Limit</td>
        </tr>
        @foreach(getEligibilityFormFieldsArray()['fluorideSealantsArray'] as $field => $value)
            <tr>
                <td>{{ $value }} {{ $field }}</td>                
                <td>{{ $fluorideSealantsData[$field]['frequency'] ?? '' }}</td>
                <td>{{ $fluorideSealantsData[$field]['history'] ?? '' }}</td>
                <td>{{ $fluorideSealantsData[$field]['age_limit'] ?? '' }}</td>
            </tr>
        @endforeach

        <tr>
            <td colspan="4" style="border: 1px solid black; background-color: #21fffe; font-weight: bold; text-align: center;">Verification Details</td>
        </tr>
        <tr>
            <td>Date</td>
            <td colspan="3">{{ viewDate($eligibility->verified_date) ?? '' }}</td>
        </tr>
        <tr>
            <td>Verified By</td>
            <td colspan="3">{{ $eligibility->verified_by ?? '' }}</td>
        </tr>
        <tr>
            <td>Insurance Rep. Name</td>
            <td colspan="3">{{ $eligibility->insurance_rep_name ?? '' }}</td>
        </tr>
        <tr>
            <td>Insurance Reference Number</td>
            <td colspan="3">{{ $eligibility->insurance_reference_number ?? '' }}</td>
        </tr>
        <tr>
            <td>Additional Notes</td>
            <td colspan="3">{{ $eligibility->additional_notes ?? '' }}</td>
        </tr>
    </table>
</body>

</html>