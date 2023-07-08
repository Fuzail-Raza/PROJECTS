#include<iostream>
#include<stdc++.h>
using namespace std;

void print_array(set<int>arr) {

	for (auto i:arr) {
		std::cout << i;
	}
	std::cout << endl;

}


set<int> precise_intersection(vector<int> a, vector<int> b) {
	set <int> ans;
	
	int i = 0, j = 0;
	while (i < a.size() && j < b.size()) {
		if (a[i]<b[j]) {
			i++;
		}
		else if (a[i]==b[j]) {
			ans.insert(a[i]);
			i++;
			j++;
		}
		else {
			j++;
		}


	}

	print_array(ans);
	return ans;
}

void main() {
	vector<int> arr1 = { 1,2,2,3,3,4,5 };
	vector<int> arr2 = { 1,2,2,3,3,3,9 };
	precise_intersection(arr1,arr2);
	
	//Unique(arr,10);

}