#include<iostream>
#include<stdc++.h>
using namespace std;

void print_array(int arr[],int size) {

	for (int i = 0; i < size; i++) {
		cout << arr[i];
	}
	cout << endl;

}
void reverse(int arr[], int size) {
	for (int i = 0, j = size - 1; i < j; i++, j--) {
		swap(arr[i], arr[j]);
	}
}
void swap_alternate(int arr[],int size) {

	for (int i = 0; i<size; i=i+2) {
		if (i+1<size) {
			swap(arr[i], arr[i + 1]);
		}
	}

}
void main() {

	int arr[10] = { 1,2,3,4,5 ,6,7,8,9,10};
	int arr1[9] = { 1,2,3,4,5 ,6,7,8,9};
	swap_alternate(arr, 10);
	print_array(arr,10);
	swap_alternate(arr1, 9);
	print_array(arr1,9);
	//reverse(arr, 10);
	//reverse(arr1, 9);
	//print_array(arr,10);
	//print_array(arr1,9);
}