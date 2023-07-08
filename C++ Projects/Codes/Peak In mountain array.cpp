#include<iostream>
using namespace std;

int peak_mountain_array(int arr[],int size) {
	int s = 0, e = size - 1;
	int mid = (s + e) / 2;
	
	while (s<e) {

		if (arr[mid]<arr[mid+1]) {
			s = mid+1;
		}
		else if (arr[mid]>arr[mid+1]) {
			e = mid;
		}
		mid = (s + e) / 2;
	}
		
	
	return s;
}

void main() {
	int arr[5] = {10,7,3,2,1 };
	cout << arr[peak_mountain_array(arr,)];
}