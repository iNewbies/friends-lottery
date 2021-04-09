package main

import (
	"encoding/base64"
	"fmt"
	"math/rand"
	"strings"
	"time"
)

type dataType struct {
	name string
	num  int
	hit  string
}

func main() {
	var allStaff = []string{
		"ZJL", "JKX", "KLB", "XX", "LJ", "LJY", "CYF", "WYG", "YJ",
	}
	shuffle(allStaff)

	var data = []*dataType{}

	var restStaff = make([]string, len(allStaff))
	copy(restStaff, allStaff)
	var falg = false

	for {
		for num, name := range allStaff {
			falg = false
			data = append(data, &dataType{
				name: name,
				num:  num + 1,
				hit: (func() string {
					offset := indexOf(restStaff, name)
					if offset != -1 {
						restStaff = append(restStaff[:offset], restStaff[offset+1:]...)
						if len(restStaff) == 0 {
							fmt.Printf(base64Decode("5bCx5Yia5Yia5Y+R55Sf5LqGICVzIOacgOWQjuS4gOS4quaKveWllu+8jGJ1dCDmir3liLDoh6rlt7HvvIzmiYDku6Xph43mlrDlvIDlp4vmir0h"), name)
							fmt.Println()
							falg = true
							return ""
						}
					}
					shuffle(restStaff)
					hit := restStaff[0]
					restStaff = restStaff[1:]
					if offset != -1 {
						restStaff = append(restStaff, name)
					}
					return hit
				})(),
			})
			if falg == true {
				data = []*dataType{}
				shuffle(allStaff)
				restStaff = make([]string, len(allStaff))
				copy(restStaff, allStaff)
			}
		}

		if !falg {
			break
		}
	}

	for _, value := range data {
		fmt.Printf(base64Decode("5oGt5ZacIFx0ICVzIFx0IOWQjOWtpuesrCAlZCDkvY3mir3lpZbvvIznu4/ov4flpJrmrKHpgJDop5LmnIDnu4jmlqnojrfmnaXoh6ogXHQgJXMgXHQg5ZCM5a2m55qE5aSn5aWWIQ=="), value.name, value.num, value.hit)
		fmt.Println()
	}
}

func shuffle(slice []string) {
	r := rand.New(rand.NewSource(time.Now().Unix()))
	for n := len(slice); n > 0; n-- {
		randIndex := r.Intn(n)
		slice[n-1], slice[randIndex] = slice[randIndex], slice[n-1]
	}
}

func indexOf(arr []string, active string) int {
	for i, item := range arr {
		if item == active {
			return i
		}
	}
	return -1
}

func base64Decode(data string) string {
	decoded, err := base64.StdEncoding.DecodeString(data)
	if err != nil {
		return ""
	}
	return strings.ReplaceAll(string(decoded), "\\t", "\t")
}
