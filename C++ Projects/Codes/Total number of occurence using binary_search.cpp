#include<iostream>
#include<stdc++.h>
using namespace std;

int first_occurance(vector<int> a, int key) {
	int s = 0, e = a[a.size() - 1];
	int mid = (s + e) / 2;
	int ans = 0;
	while (s <= e) {

		if (a[mid] == key) {
			ans = mid;
			e = mid - 1;
		}
		else if (a[mid] > key) {
			e = mid - 1;
		}
		else if (a[mid] < key) {
			s = mid + 1;
		}

		mid = (s + e) / 2;
	}
	return ans;
}
int Last_occurance(vector<int> a,int key) {
	int s = 0, e = a[a.size()-1];
	int mid = (s + e) / 2;
	int ans=0;
	while (s<=e) {

		if (a[mid]==key) {
			ans = mid;
			s = mid + 1;
		}
		else if (a[mid] > key) {
			e = mid - 1;
		}
		else if (a[mid] < key) {
			s = mid + 1;
		}

		mid = (s + e) / 2;
	}
	return ans;
}


void main() {
	pair<int, int> p;
	
	vector<int> arr ={1,2,4,4,4,4,5,6};
	p.first= first_occurance(arr, 4);
	p.second= Last_occurance(arr, 4);
	cout << p.first << p.second;
	cout << "Total Occurance is : " << p.second-p.first+1;
}