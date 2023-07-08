#include<iostream>
using namespace std;
void display(int arr[], int size);
void Merge_sort(int A[],int B[], int size1,int size2) {
	int i = 0; int j = 0, k = 0;
	int s=size1+size2;
	int arr[14] = {};
	while (i<size1 || j<size2) {
		if (i < size1 && j < size2) {
			if (A[i] <= B[j]) {
				arr[k] = A[i];
				i++; k++;
			}
			if (B[j] <= A[i]) {
				arr[k] = B[j];
				k++; j++;
			}
		}
		else {
			if (i<size1) {
				arr[k] = A[i];
				i++; k++;
			}
			else if (j<size2) {
				arr[k] = B[j];
				j++; k++;
			}
		}
	}
		display(arr,s);
}





void display(int arr[], int size) {
	cout << "Array is ";
	for (int i = 0; i < size; i++) {
		cout << arr[i] << endl;
	}
}
void main() {
	//int arr[6] = { 41,23,35,23,47,35 };
	//int arr[6] = { 41,23,35,23,47,35 };
	int arr[8] = { 12,16,17,19,23,67,87,98 };
	int arr1[6] = {1,4,16,17,18,23 };
	//display(arr, 6);
	//Merge_sort(arr,arr1, 8,6);
	//display(arr, 6);
}