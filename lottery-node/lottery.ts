import shuffle from 'shuffle-array';

const allStaff = [
    'ZJL', 'JKX', 'KLB', 'XX', 'LJ', 'LJY', 'CYF', 'WYG', 'YJ',
];
shuffle(allStaff);

const data: {
    name: string;
    num: number;
    hit: string;
}[] = [];

let restStaff = allStaff.slice(0);
let falg = false;
do {
    allStaff.forEach((name, num): void => {
        falg = false;
        data.push({
            name,
            num: num + 1,
            hit: (() : string => {
                const offset = restStaff.indexOf(name);
                if (offset !== -1) {
                    restStaff.splice(offset, 1);
                    if (restStaff.length === 0) {
                        printf(base64_decode('5bCx5Yia5Yia5Y+R55Sf5LqGICVzIOacgOWQjuS4gOS4quaKveWllu+8jGJ1dCDmir3liLDoh6rlt7HvvIzmiYDku6Xph43mlrDlvIDlp4vmir0h'), name);
                        falg = true;
                        return '';
                    }
                }
                shuffle(restStaff);
                const hit = restStaff.shift();
                if (offset !== -1) {
                    restStaff.push(name);
                }
                return hit!;
            })(),
        });
        if (falg === true) {
            data.splice(0, data.length);
            shuffle(allStaff);
            restStaff = allStaff.slice(0);
        }
    });
} while (falg)

data.forEach(($value): void => {
    eval(base64_decode('cHJpbnRmKCLmga3llpwgXHQlc1x0IOWQjOWtpuesrCAlZCDkvY3mir3lpZbvvIznu4/ov4flpJrmrKHpgJDop5LmnIDnu4jmlqnojrfmnaXoh6ogXHQlc1x0IOWQjOWtpueahOWkp+WlliEiIC4gUEhQX0VPTCwgJHZhbHVlWyduYW1lJ10sICR2YWx1ZVsnbnVtJ10sICR2YWx1ZVsnaGl0J10pOyA=').replace('. PHP_EOL', ''));
});


function printf(format: string, ...args: (string | number)[]): void {
    let result = format;
    args.forEach((arg): void => {
        if (typeof arg === 'number') {
            result = result.replace('%d', `${arg}`);
            return;
        }
        result = result.replace('%s', arg);
    });
    console.log(result);
}

function base64_decode(data: string): string {
    return Buffer.from(data, 'base64').toString('utf8');
}
