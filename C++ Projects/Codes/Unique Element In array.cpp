#include<iostream>
#include<stdc++.h>
using namespace std;

void print_array(int arr[], int size) {

	for (int i = 0; i < size; i++) {
		cout << arr[i];
	}
	cout << endl;

}
int Unique_Element(int arr[],int size) {
	int ans = 0;
	for (int i = 0; i < size; i++) {

		ans = ans ^ arr[i];
	}

	return ans;

}
void main() {
	int arr[12] = { 2,4,5,4,5,5,4,6,6,7,4};
	cout<<Unique_Element(arr,12);
	int arr1[9] = { 1,2,3,4,5 ,6,7,8,9 };
	
}