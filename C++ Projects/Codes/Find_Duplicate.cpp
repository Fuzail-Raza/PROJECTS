#include<iostream>
#include<stdc++.h>
using namespace std;

void print_array(int arr[], int size) {

	for (int i = 0; i < size; i++) {
		cout << arr[i];
	}
	cout << endl;

}
void Unique(int arr[], int size) {

	for (int i = 0; i < size; i++)
	{
		int p = 0;
		for (int j = 0; j < size; j++)
		{
			if (arr[i] == arr[j]) {
				p++;
			}

		}
		cout << arr[i] << " occure " << p << " Times" << endl;
	}

}
bool Unique_occur(vector<int> arr) {
	vector<int>occ;
	sort(arr.begin(), arr.end());
	int count = 0;
	for (int i = 0; i < arr.size(); i = i + count) {
		count = 1;
		for (int j = 1; j < arr.size(); j++) {
			if (arr[i] == arr[j]) {
				count++;
			}
		}
		occ.push_back(count);

	}
	sort(occ.begin(), occ.end());
	for (int i = 0; i < occ.size() - 1; i++) {
		if (occ[i] == occ[i + 1]) {
			return false;
		}
	}
	return true;

}
void main() {
	vector<int> arr2 = { 1,3,5,7,7,5,3,3,7 };
	cout << Unique_occur(arr2);
	int arr[10] = { 1,2,2,4,5 ,6,6,8,2,10 };
	int arr1[9] = { 1,2,3,4,5 ,6,7,8,9 };
	//Unique(arr,10);

}