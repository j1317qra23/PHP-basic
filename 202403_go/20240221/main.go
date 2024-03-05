package main

import "fmt"

func main() {
	arr := []int{1, 2, 4, 5, 7}
	fmt.Println(arr)

	// bubbleSort(arr)
	// fmt.Println(arr)
	fmt.Println(search(arr, 8))
}
//
func search(arr []int, target int) int {
	for i := 0; i < len(arr); i++ {
		// i=0,1,2,3,4
		if arr[i] == target {
			return i
		}
	}

	return -10

}
