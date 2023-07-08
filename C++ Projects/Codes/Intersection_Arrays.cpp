#include<iostream>
#include<stdc++.h>
using namespace std;

void print_array(vector<int>arr) {

	for (int i = 0; i < arr.size(); i++) {
		cout << arr[i];
	}
	
}
bool common(int ans,vector<int>a) {
	for (int p = 0; p < a.size(); p++) {
		if ( a[p] == ans) {
			return 0;
		}
	}
	return 1;
}

vector<int> intersection(vector<int> a, vector<int> b) {
	vector <int> ans;
	for (int i = 0; i < a.size(); i++)
	{
		for (int j = 0; j < b.size(); j++)
		{
			if (a[i]<b[j]) {
				break;
		}
			if (a[i]==b[j]) {
				if (common(a[i],ans)) {
					ans.push_back(a[i]);
				}
				b[j] = -1;
				a[i] = -1;
			}
		}
	}
	print_array(ans);
	return ans;
}


void main() {
	vector<int> arr1 = { 1,2,2,3,3,4,5 };
	vector<int> arr2 = { 1,2,2,3,3,3,9 };
	intersection(arr1,arr2);
	
	//Unique(arr,10);

}