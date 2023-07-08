#include<iostream>
#include<stdc++.h>
using namespace std;

void print_array(vector<int>arr) {
	
	for (int i = 0; i < arr.size(); i++)
	{
		cout << arr[i];
	}

}
void Tripllet_sum(vector<int> a, int sum) {
	vector <int> ans;
	for (int i = 0; i < a.size()-2; i++)
	{
		for (int j = i + 1; j < a.size()-1; j++)
		{
	 		for (int k = j+1; k < a.size(); k++)
			{
				if (a[i] + a[j]+ a[k] == sum) {
					ans.push_back(a[i]);
					ans.push_back(a[j]);
					ans.push_back(a[k]);
				}
			}
		}
	}
		print_array(ans);

}
void main() {

	vector<int> arr1 = { 1,2,3,4,2,0,5 };
	Tripllet_sum(arr1, 6);
	vector<int> arr2 = { 1,2,2,3,3,3,9 };

	//Unique(arr,10);

}