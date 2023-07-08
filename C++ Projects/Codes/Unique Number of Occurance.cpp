#include<iostream>
#include<stdc++.h>
using namespace std;

void print_array(int arr[], int size) {

	for (int i = 0; i < size; i++) {
		cout << arr[i];
	}
	cout << endl;

}

void duplicate(vector<int> a) {
	int ans = 0;
	for (int i = 0; i < a.size(); i++) {
		ans = ans ^ a[i];
	cout << endl << ans;
	}
	for (int i = 1; i < a.size();i++) {
		ans = ans ^ i;

	}
	cout << endl << ans;
}
void main() {
	vector<int> arr2 = {1,2,3,4,5,2};
	duplicate(arr2);
	int arr[10] = { 1,2,2,4,5 ,6,6,8,2,10 };
	int arr1[9] = { 1,2,3,4,5 ,6,7,8,9 };
	//Unique(arr,10);
	
}