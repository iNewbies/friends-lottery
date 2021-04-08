<?php
$allStaff = [
    'ZJL', 'JKX', 'KLB', 'XX', 'LJ', 'LJY', 'CYF', 'WYG', 'YJ'
];
shuffle($allStaff);
$restStaff = $allStaff;
$falg = false;
do {
    foreach ($allStaff as $num => $name) {
        $falg = false;
        $data[] = [
            'name' => $name,
            'num' => $num + 1,
            'hit' => (function ($name) use (&$restStaff, &$falg) {
                $offset = array_search($name, $restStaff);
                if ($offset !== false) {
                    array_splice($restStaff, $offset, 1);
                    if (empty($restStaff)) {
                        printf(base64_decode('5bCx5Yia5Yia5Y+R55Sf5LqGICVzIOacgOWQjuS4gOS4quaKveWllu+8jGJ1dCDmir3liLDoh6rlt7HvvIzmiYDku6Xph43mlrDlvIDlp4vmir0h') . PHP_EOL, $name);
                        $falg = true;
                        return null;
                    }
                }
                shuffle($restStaff);
                $hit = array_shift($restStaff);
                if ($offset !== false) {
                    $restStaff[] = $name;
                }
                return $hit;
            })($name)
        ];
        if ($falg === true) {
            unset($data);
            shuffle($allStaff);
            $restStaff = $allStaff;
            break;
        }
    }
} while ($falg);
array_walk($data, function ($value) {
    eval(base64_decode('cHJpbnRmKCLmga3llpwgXHQlc1x0IOWQjOWtpuesrCAlZCDkvY3mir3lpZbvvIznu4/ov4flpJrmrKHpgJDop5LmnIDnu4jmlqnojrfmnaXoh6ogXHQlc1x0IOWQjOWtpueahOWkp+WlliEiIC4gUEhQX0VPTCwgJHZhbHVlWyduYW1lJ10sICR2YWx1ZVsnbnVtJ10sICR2YWx1ZVsnaGl0J10pOyA='));
});
