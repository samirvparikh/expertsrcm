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
    <title>S.F. {{ $eligibility->patient->name ?? '' }}</title>
</head>

<body>
    <table>
        <tr>
            <td>Ind. Max. -</td>
            <td>{{ is_numeric($eligibility->annual_maximum ?? '')  ? '$'.$eligibility->annual_maximum : ($eligibility->annual_maximum ?? '') }}</td>
            <td>REMAIN</td>
            <td>{{ is_numeric($eligibility->remaining_maximum ?? '')  ? '$'.$eligibility->remaining_maximum : ($eligibility->remaining_maximum ?? '') }}</td>
            <td colspan="2"></td>
            <td colspan="2" style="background-color: #21fffe; font-weight: bold; text-align: center;">Ortho Info</td>
        </tr>
        
        <tr>
            <td>Ind. Deductible</td>
            <td>{{ is_numeric($deductiblesData['deductibles']['individual'] ?? '')  ? '$'.$deductiblesData['deductibles']['individual'] : ($deductiblesData['deductibles']['individual'] ?? '') }}</td>
            <td>REMAIN</td>
            <td>{{ is_numeric($deductiblesData['deductible_remain']['individual'] ?? '')  ? '$'.$deductiblesData['deductible_remain']['individual'] : ($deductiblesData['deductible_remain']['individual'] ?? '') }}</td>
            <td colspan="2"></td>
            <td>Age Limit -</td>
            <td>{{ $eligibility->ortho_age_limit ?? '' }}</td>
        </tr>
        <tr>
            <td>Family Deductible</td>
            <td>{{ is_numeric($deductiblesData['deductibles']['family'] ?? '')  ? '$'.$deductiblesData['deductibles']['family'] : ($deductiblesData['deductibles']['family'] ?? '') }}</td>
            <td>REMAIN</td>
            <td>{{ is_numeric($deductiblesData['deductible_remain']['family'] ?? '')  ? '$'.$deductiblesData['deductible_remain']['family'] : ($deductiblesData['deductible_remain']['family'] ?? '') }}</td>
            <td colspan="2"></td>
            <td>, Coverage -</td>
            <td>{{ is_numeric($coverageData['ortho']['coverage'] ?? '')  ? $coverageData['ortho']['coverage'] . '%'  : ($coverageData['ortho']['coverage'] ?? '') }}</td>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td colspan="2"></td>
            <td colspan="2" style="background-color: #21fffe; font-weight: bold; text-align: center;">Frequency :</td>
        </tr>
        <tr>
            <td>Ortho Max. -</td>
            <td>{{ is_numeric($eligibility->ortho_maximum ?? '')  ? '$'.$eligibility->ortho_maximum : ($eligibility->ortho_maximum ?? '') }}</td>
            <td>REMAIN</td>
            <td>{{ is_numeric($eligibility->ortho_remaining_maximum ?? '')  ? '$'.$eligibility->ortho_remaining_maximum : ($eligibility->ortho_remaining_maximum ?? '') }}</td>
            <td colspan="2"></td>
            <td>, D0120 -</td>
            <td>{{ $examData['periodic_exam']['frequency'] ?? '' }}</td>
        </tr>
        <tr>
            <td>Ortho Age Limit</td>
            <td colspan="3">{{ $eligibility->ortho_age_limit ?? '' }}</td>
            <td colspan="2"></td>
            <td>, D0150 -</td>
            <td>{{ $examData['comp_exam']['frequency'] ?? '' }}</td>
        </tr>
        <tr>
            <td>Ortho Deductible</td>
            <td>{{ is_numeric($deductiblesData['deductibles']['ortho'] ?? '')  ? '$'.$deductiblesData['deductibles']['ortho'] : ($deductiblesData['deductibles']['ortho'] ?? '') }}</td>
            <td>REMAIN</td>
            <td>{{ is_numeric($deductiblesData['deductible_remain']['ortho'] ?? '')  ? '$'.$deductiblesData['deductible_remain']['ortho'] : ($deductiblesData['deductible_remain']['ortho'] ?? '') }}</td>
            <td colspan="2"></td>
            <td>{{ $examData['prophy']['frequency'] ?? '' }}</td>
            <td></td>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td colspan="2"></td>
            <td>, D9310 -</td>
            <td>{{ $examData['consultation']['frequency'] ?? '' }}</td>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td colspan="2"></td>
            <td>, D0350 -</td>
            <td>{{ $examData['fac_photographic']['frequency'] ?? '' }}</td>
        </tr>
        <tr>
            <td>Waiting Period</td>
            <td colspan="3">{{ $eligibility->waiting_period ?? '' }}</td>
            <td colspan="2"></td>
            <td>, Bitewings -</td>
            <td>{{ $examData['bw']['frequency'] ?? '' }}</td>
        </tr>
        <tr>
            <td>Missing Tooth</td>
            <td colspan="3">{{ $eligibility->missing_tooth_clause ?? '' }}</td>
            <td colspan="2"></td>
            <td>, FMX/Pano -</td>
            <td>{{ $examData['fmx_pano']['frequency'] ?? '' }}</td>
        </tr>
        <tr>
            <td>COB RULE -</td>
            <td colspan="3">{{ $eligibility->additional_notes ?? '' }}</td>
            <td colspan="2"></td>
            <td>, Crowns -</td>
            <td>{{ $examData['crowns']['frequency'] ?? '' }}</td>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td colspan="2"></td>
            <td>, Dentures -</td>
            <td>{{ $examData['dentures']['frequency'] ?? '' }}</td>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td colspan="2"></td>
            <td>, Perio SCRP -</td>
            <td>{{ $examData['perio_srp']['frequency'] ?? '' }}</td>
        </tr>
        <tr>
            <td colspan="4" style="background-color: #21fffe; font-weight: bold; text-align: center;">History :</td>
            <td colspan="2"></td>
            <td>, D4381 -</td>
            <td>{{ $examData['d4381']['frequency'] ?? '' }}</td>
        </tr>

        <tr>
            <td>D0120</td>
            <td colspan="3">{{ $examData['periodic_exam']['history'] ?? '' }}</td>
            <td colspan="2"></td>
            <td>, Perio Main -</td>
            <td>{{ $examData['perio_maintenance']['frequency'] ?? '' }}</td>
        </tr>
        <tr>
            <td>D0150</td>
            <td colspan="3">{{ $examData['comp_exam']['history'] ?? '' }}</td>
            <td colspan="2"></td>
            <td>, Fluoride -</td>
            <td>{{ $fluorideSealantsData['fluoride']['history'] ?? '' }}</td>
        </tr>
        <tr>
            <td>D9310</td>
            <td colspan="3">{{ $examData['consultation']['history'] ?? '' }}</td>
            <td colspan="2"></td>
            <td>, Age Limit-</td>
            <td>{{ $fluorideSealantsData['fluoride']['age_limit'] ?? '' }}</td>
        </tr>
        <tr>
            <td>D0350</td>
            <td colspan="3">{{ $examData['fac_photographic']['history'] ?? '' }}</td>
            <td colspan="2"></td>
            <td>, Sealants -</td>
            <td>{{ $fluorideSealantsData['sealant']['frequency'] ?? '' }}</td>
        </tr>
        <tr>
            <td>D1110, D1120</td>
            <td colspan="3">{{ $examData['prophy']['history'] ?? '' }}</td>
            <td colspan="2"></td>
            <td>, Age Limit-</td>
            <td>{{ $fluorideSealantsData['sealant']['age_limit'] ?? '' }}</td>
        </tr>
        <tr>
            <td>D0274</td>
            <td colspan="3">{{ $examData['bw']['history'] ?? '' }}</td>
            <td colspan="2"></td>
            <td>, Age Limit-</td>
            <td>{{ $fluorideSealantsData['sealant_2']['age_limit'] ?? '' }}</td>
        </tr>
        <tr>
            <td>D0210 &amp; D0330</td>
            <td colspan="3">{{ $examData['fmx_pano']['history'] ?? '' }}</td>
            <td colspan="2"></td>
            <td>, Night Guard-</td>
            <td>{{ $examData['nightguard']['frequency'] ?? '' }}</td>
        </tr>
        <tr>
            <td>D2740</td>
            <td colspan="3">{{ $examData['crowns']['history'] ?? '' }}</td>
            <td colspan="2"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>D5110</td>
            <td colspan="3">{{ $examData['dentures']['history'] ?? '' }}</td>
            <td colspan="2"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>D9944</td>
            <td colspan="3">{{ $examData['nightguard']['history'] ?? '' }}</td>
            <td colspan="2"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>D4341</td>
            <td colspan="3">{{ $examData['perio_srp']['history'] ?? '' }}</td>
            <td colspan="2"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>D4381</td>
            <td colspan="3">{{ $examData['d4381']['history'] ?? '' }}</td>
            <td colspan="2"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>D4910</td>
            <td colspan="3">{{ $examData['perio_maintenance']['history'] ?? '' }}</td>
            <td colspan="2"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Fluoride</td>
            <td colspan="3">{{ $fluorideSealantsData['fluoride']['history'] ?? '' }}</td>
            <td colspan="2"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Sealants</td>
            <td colspan="3">{{ $fluorideSealantsData['sealant']['history'] ?? '' }}</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td>Sealants</td>
            <td colspan="3">{{ $fluorideSealantsData['sealant_2']['history'] ?? '' }}</td>
            <td colspan="2"></td>
        </tr>
    </table>


</body>

</html>