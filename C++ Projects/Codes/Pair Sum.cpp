#include<iostream>
#include<stdc++.h>
using namespace std;

void print_array(vector<int>arr) {

	for (int i = 0; i < arr.size(); i++)
	{
		cout << arr[i];
	}

}
void pair_sum(vector<int> a,int sum) {
	vector <int> ans;
	for (int i = 0; i < a.size(); i++)
	{
		for (int j = i+1; j < a.size(); j++)
		{
			if (a[i]+a[j]==sum) {
				ans.push_back(min(a[i],a[j]));
				ans.push_back(max(a[i],a[j]));
			}
		}
	}
	print_array(ans);
}


void main() {
	
	vector<int> arr1 = { 1,2,3,4,5 };
	pair_sum(arr1,5);
	vector<int> arr2 = { 1,2,2,3,3,3,9 };

	//Unique(arr,10);

}