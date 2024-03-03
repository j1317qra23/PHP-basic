package main

import "fmt"

func main()  {
	arr := []int{2, 3, 1, 6, 7, 8}
	fmt.Println(arr)

	bubbleSort(arr)
	fmt.Println(arr)
	
}

func bubbleSort(arr []int) []int{
	count :=0
	for i := 0; i < len(arr); i++ {
		//i:0, 1, 2, 3, ,4
		// i= 0, j=0,1,2,3
		// i= 1
		// i=2
		// i=3
		
		isSwap :=0 //這批元素都被交換過
		for j:=0; j < len(arr) -i -1; j++ {
			count += 1
			if arr[j] > arr[j+1]{
				isSwap = 1
				swap(arr,j,j+1)
			}
			
		}
		if isSwap ==0{
			break
		}
	}
	fmt.Println("count", count)
	return []int{}
}

func swap (arr[]int, i int, j int){
	tmp := arr[i]
	arr[i] = arr[j]
	arr[j] = tmp
}