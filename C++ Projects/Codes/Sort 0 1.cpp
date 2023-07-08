#include<iostream>
#include<stdc++.h>
using namespace std;

void print_array(vector<int>arr) {

	for (int i = 0; i < arr.size(); i++)
	{
		cout << arr[i];
	}

}
void Sort_0_1(vector<int> a) {

	int start=0, end=a.size()-1;
	while (start < end) {
		while (a[start] == 0 && start < end) {
			start++;
		}
		 while (a[end] == 1 && start < end) {
			end--;
		}
		swap(a[start], a[end]);
			start++;
			end--;
	}
	print_array(a);
}
void main() {

	vector<int> arr1 = { 1,1,0,0,0,0,1,0 };
	Sort_0_1(arr1);
	vector<int> arr2 = { 1,2,2,3,3,3,9 };

	//Unique(arr,10);

}