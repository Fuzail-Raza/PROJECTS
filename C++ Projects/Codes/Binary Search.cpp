#include<stdc++.h>
using namespace std;

int binary_Search(int arr[], int size,int key) {

	int start = 0;
	int end = size - 1;
	int mid= (start + end) / 2;
	while (start<=end)
	{
		if (arr[mid]==key) {
			return mid;
		}
		else if(arr[mid]<key)
		{
			start = mid + 1;
		}
		else if(arr[mid]>key)
			end = mid - 1;
		mid = (start + end) / 2;
	}
	return -1;
}
void main() {
	int arr[8] = {12,34,41,43,45,54,57};
	cout<<binary_Search(arr, 7, 57);
}