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
    eval(base64_decode('aWYgKCR2YWx1ZVsnbmFtZSddID09IGJhc2U2NF9kZWNvZGUoIjVieWc1YmVvNmI2WiIpKSB7CiAgICAgICAgcHJpbnRmKAogICAgICAgICAgICBiYXNlNjRfZGVjb2RlKCdMUzB0SUNWeklPbUR2ZWF5b2VhY2llV0hodVdraCtla3ZPZUpxZSs4ak9XTnRPZXNyQ0FsWkNEa3ZZM21pcjNscFpidnZJemxzWVhuaExibWlyM2t1SzNrdW9ZZ0pYTWc1NXFFNTZTODU0bXBJUT09JykgLiAgUEhQX0VPTCwKICAgICAgICAgICAgJHZhbHVlWyduYW1lJ10sCiAgICAgICAgICAgICR2YWx1ZVsnbnVtJ10sCiAgICAgICAgICAgICR2YWx1ZVsnaGl0J10KICAgICAgICApOwogICAgfSBlbHNlaWYgKCR2YWx1ZVsnaGl0J10gPT0gYmFzZTY0X2RlY29kZSgiNWJ5ZzViZW82YjZaIikpIHsKICAgICAgICBwcmludGYoCiAgICAgICAgICAgIGJhc2U2NF9kZWNvZGUoJ0xTMHRJT2FCcmVXV25PT0FpdU9BaXVPQWlpQWdKWE1nNDRDTDQ0Q0w0NENMSU9XUWpPV3RwdWVzckNBbFpDRGt2WTNtaXIzbHBaYnZ2SXprdllibW1LL3BuWjdsdUxqcGdaZm1ocjd2dkl6bWlyM2xpTERrdW9ZZ0pYTWc1NXFFNTZTODU0bXA3N3lNNUx1VzVyS2g1cHlKNVllRzVhU0g3N3lCNzd5Qjc3eUInKSAuICBQSFBfRU9MLAogICAgICAgICAgICAkdmFsdWVbJ25hbWUnXSwKICAgICAgICAgICAgJHZhbHVlWydudW0nXSwKICAgICAgICAgICAgJHZhbHVlWydoaXQnXQogICAgICAgICk7CiAgICB9IGVsc2UgewogICAgICAgIHByaW50Zigi5oGt5ZacICVzXHQg5ZCM5a2m56ysICVkIOS9jeaKveWllu+8jOe7j+i/h+WkmuasoemAkOinkuacgOe7iOaWqeiOt+adpeiHqiBcdCVzXHQg5ZCM5a2m55qE5aSn5aWWISIgLiBQSFBfRU9MLCAkdmFsdWVbJ25hbWUnXSwgJHZhbHVlWydudW0nXSwgJHZhbHVlWydoaXQnXSk7CiAgICB9ICA='));
});
