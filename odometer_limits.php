<?php
// Array of plate numbers and their corresponding limits
$odometer_limits = [
    // First group with limits: 5k, 25k, 50k, 75k, 100k, 120k, 145k, 175k, 200k
    'NGY 5004' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGY 5095' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGY 5096' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGY 5097' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGY 5098' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGY 5101' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGY 5102' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NEN 5556' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NEN 5557' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NEN 5559' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NEN 5666' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NEN 5999' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NEN 6499' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NEN 5899' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NEN 5799' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGY 2799' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGY 2800' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGY 2699' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGY 2700' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGY 3099' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGC 8463' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGC 8382' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGC 8375' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGC 8374' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NGC 8384' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NFN 8257' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NFN 9384' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NFN 9385' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NFN 9386' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NFN 9387' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NFN 9394' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NFN 9396' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NFN 9395' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NFN 9404' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NFN 9397' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NFN 9417' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'NFN 9416' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'DBS 2071' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'DBS 2111' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'DBS 2131' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'DBS 2070' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'DBS 2110' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'DBS 2140' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'DBS 2091' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'DBS 2130' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'DBS 2090' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    'DBS 2080' => [5000, 25000, 50000, 75000, 100000, 120000, 145000, 175000, 200000],
    
    // Second group with limits: 5k, 15k, 25k, 35k, 75k, 100k, 125k, 145k
    'NKI 4369' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NKI 4320' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NKI 3870' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NKI 4311' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NKI 4354' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NKI 4361' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NKI 4352' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NKJ 4988' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NKJ 4771' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NKJ 4586' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NKJ 4806' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NKJ 4535' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NKJ 4775' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NKJ 4592' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NHL 5829' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NHL 5814' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NHL 5827' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NHL 5830' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NHL 5819' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NHL 5820' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NFN 5445' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NFN 4646' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NFN 5225' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NFN 5355' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NFN 5335' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NFN 4777' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NFN 5255' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NGC 8795' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NGC 8796' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NFN 4567' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NFN 5455' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NHX 1173' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NGC 8817' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NGC 8827' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NGC 8825' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NGC 8826' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NGC 8797' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NGC 8805' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NGC 8806' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NGC 8807' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NGC 8815' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
    'NGC 8816' => [5000, 15000, 25000, 35000, 75000, 100000, 125000, 145000],
];

/**
 * Function to check if an odometer reading is approaching a limit
 * 
 * @param string $plate_no The truck plate number
 * @param int $current_odometer The current odometer reading
 * @return array Contains warning level and next limit information
 */
function checkOdometerWarning($plate_no, $current_odometer) {
    global $odometer_limits;
    
    // Default return values
    $result = [
        'warning_level' => 'normal', // normal, yellow, orange, red
        'next_limit' => null,
        'distance_to_limit' => null,
        'percentage' => null,
        'all_limits' => isset($odometer_limits[$plate_no]) ? $odometer_limits[$plate_no] : []
    ];
    
    // Check if we have limits for this plate number
    if (!isset($odometer_limits[$plate_no])) {
        return $result;
    }
    
    $limits = $odometer_limits[$plate_no];
    $next_limit = null;
    $distance_to_limit = null;
    
    // Find the next limit
    foreach ($limits as $limit) {
        if ($current_odometer < $limit) {
            $next_limit = $limit;
            $distance_to_limit = $next_limit - $current_odometer;
            break;
        }
    }
    
    // If no next limit found, all limits have been passed
    if ($next_limit === null) {
        $result['warning_level'] = 'red';
        $result['next_limit'] = 'Exceeded all limits';
        return $result;
    }
    
    $result['next_limit'] = $next_limit;
    $result['distance_to_limit'] = $distance_to_limit;
    
    // Calculate percentage to next limit
    // We consider the range from 5000 before the limit to the limit itself
    $range = 5000;
    if ($distance_to_limit <= $range) {
        $percentage = ($range - $distance_to_limit) / $range * 100;
        $result['percentage'] = $percentage;
        
        // Determine warning level
        if ($distance_to_limit <= 1000) {
            $result['warning_level'] = 'red';
        } elseif ($distance_to_limit <= 3000) {
            $result['warning_level'] = 'orange';
        } elseif ($distance_to_limit <= 5000) {
            $result['warning_level'] = 'yellow';
        }
    }
    
    return $result;
}

/**
 * Get the CSS class for the odometer warning level
 * 
 * @param string $warning_level The warning level (normal, yellow, orange, red)
 * @return string The CSS class name
 */
function getWarningClass($warning_level) {
    switch ($warning_level) {
        case 'red':
            return 'bg-danger text-white';
        case 'orange':
            return 'bg-warning text-dark';
        case 'yellow':
            return 'bg-warning bg-opacity-50 text-dark';
        default:
            return '';
    }
}
?>